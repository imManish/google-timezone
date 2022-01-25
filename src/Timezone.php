<?php
namespace Timezone;

use Timezone\Exception;
use Timezone\ApiException;

class Timezone
{
    /**
     * @var string
     */
    protected $url='';

    /**
     * @var string
     */
    protected $prefix='';

    /**
     * @var string
     */
    protected $apikey='';

    /**
     * @param $apikey
     */
    public function __construct($apikey='')
    {
        $this->apikey = $apikey;
        $validate = $this->validateRequest($this->apikey);
        if ($validate) {
            $this->setupResourceWithApi();
        } else {
            $this->setupResource();
        }
    }
    /**
     * @return void
     */
    private function setupResource()
    {
        $this->timezone = new Timezone();
    }

    /**
     * @return void
     */
    private function setupResourceWithApi()
    {
        $this->timezone = new Timezone();
    }

    /**
     * @return void
     */
    private function validateRequest()
    {
        if (!isset($apiKey)) {
            throw new Exceptions\InvalidConfigurationException("API key is empty.");
        }
    }


}