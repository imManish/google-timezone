<?php

trait CreateTrait
{
    /**
     * @param null $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return \Freshdesk\Api
     * @internal
     */
    abstract protected function api();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->api()->request('GET', $this->endpoint(), $data);
    }
}