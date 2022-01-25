<?php
namespace Timezone\Traits;

trait ViewTrait
{
    /**
     * @param integer $end string
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
     * @param $id
     * @param array|null $query
     * @return mixed
     */
    public function view($id, array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint($id), null, $query);
    }
}