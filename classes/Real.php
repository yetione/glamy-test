<?php
class Real extends AbstractRequest
{

    /**
     * @return int
     */
    public function process()
    {
        $this->get();
        $aData = $this->getData();
        if (!isset($aData['data']) || !is_array($aData['data'])){
            throw new \RuntimeException('Data key is not set or not array');
        }
        $result = 0;
        foreach ($aData['data'] as $item) {
            if (isset($item['value'])){
                $result += $item['value'];
            }
        }
        return $result;
    }
}