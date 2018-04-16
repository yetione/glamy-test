<?php

class Mock extends Real
{

    public function get(){
        $this->setData(["data" => [ ["value"=>4], ["value"=> 8, "alt"=> 6], ["value"=>12, "alt"=>5] ]]);
    }
}