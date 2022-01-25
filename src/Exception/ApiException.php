<?php

namespace Timezone\Exception;

use Exception;
use GuzzleHttp\Exception\RequestException;

class ApiException extends Exception
{
    /**
     * @var RequestException
     * @internal
     */
    private $exception;

    /**
     * Exception constructor
     *
     * Constructs a new exception.
     *
     * @param RequestException $exception
     * @internal
     */
    public function __construct(RequestException $exception)
    {
        $this->exception = $exception;
        parent::__construct();
    }

    /**
     * @param RequestException $exception
     * @return AccessDeniedException|ApiException|AuthenticationException|ConflictingStateException|
     * MethodNotAllowedException|NotFoundException|RateLimitExceededException|UnsupportedAcceptHeaderException|
     * UnsupportedContentTypeException|ValidationException
     */
    public static function create(RequestException $exception)
    {
        if($response = $exception->getResponse()) {

            switch ($response->getStatusCode()) {
                case 400:
                    return new ValidationException($exception);
                case 401:
                    return new AuthenticationException($exception);
                case 403:
                    return new AccessDeniedException($exception);
                case 404:
                    return new NotFoundException($exception);
                case 405:
                    return new MethodNotAllowedException($exception);
                case 406:
                    return new UnsupportedAcceptHeaderException($exception);
                case 409:
                    return new ConflictingStateException($exception);
                case 415:
                    return new UnsupportedContentTypeException($exception);
                case 429:
                    return new RateLimitExceededException($exception);
            }
        }

        return new ApiException($exception);
    }

    /**
     * Returns the Request Exception
     *
     * A Guzzle Request Exception is returned
     *
     * @return RequestException
     */
    public function getRequestException()
    {
        return $this->exception;
    }

}