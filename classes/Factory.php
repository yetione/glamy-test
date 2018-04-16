<?php


class Factory
{

    public static function __callStatic($name, $arguments)
    {
        if (method_exists(get_called_class(), $name)){
            return call_user_func_array(get_called_class().'::'.$name, $arguments );
        }
        throw new \RuntimeException('Method '.$name.' dont exists');
    }

    protected static function addReal($url){
        return new Real($url);
    }

    protected static function addMock($url){
        return new Mock($url);
    }

    protected static function multiplyReal($url){
        return new MultiplyReal($url);
    }

    protected static function multiplyMock($url){
        return new MultiplyMock($url);
    }
}