<?php
class MultiplyReal extends Real{

    public function process()
    {
        $this->get();
        $aData = $this->getData();
        if (!isset($aData['data']) || !is_array($aData['data'])){
            throw new \RuntimeException('Data key is not set or not array');
        }
        $result = 1;
        foreach ($aData['data'] as $item) {
            if (isset($item['value']) && $item['value'] % 2 === 0){
                $result *= $item['value'];
            }
            if (isset($item['alt']) && $item['alt'] % 2 !== 0){
                $result *= $item['alt'];
            }
        }
        return $result;
    }
}