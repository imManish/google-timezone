<?php

namespace Timezone\Resource;

abstract class AbstractResource
{
    /**
     * @var Api
     * @internal
     */
    private $api;

    /**
     * @var String
     * @internal
     */
    protected $endpoint;

    /**
     * Resource constructor
     *
     * Constructs a new resource
     *
     * @param Api $api
     * @internal
     *
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Creates the endpoint
     *
     * @param null $id The endpoint terminator
     * @return string
     * @internal
     *
     */
    protected function endpoint($id = null)
    {
        return $id === null ? $this->endpoint : $this->endpoint . '/' . $id;
    }

    /**
     * @return Api
     * @internal
     */
    protected function api()
    {
        return $this->api;
    }
}