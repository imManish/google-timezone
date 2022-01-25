<?php
namespace Timezone\Resource;

use Timezone\Traits\ViewTrait;

class Timezone extends AbstractResource
{
    use ViewTrait;
    /**
     * The resource endpoint
     * @internal
     * @var string
     */
    protected $endpoint = '/timezone';


    /**
     * @param array|null $query
     * @return mixed
     */
    public function current(array $query=null)
    {
        return $this->api()->request('GET', $this->endpoint('me'), null, $query);
    }
}