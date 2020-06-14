<?php
namespace Mawdoo3\Drsk;


class Connector  
{
    private $service = 'auth';
    private $source = 'package';
    private $call = 'Mawdoo3\\Drsk';
    public function __call($name, $arguments)
    {
        if($this->source == 'package') {
            $this->call = "\Mawdoo3\\Drsk\\$this->service";
            return call_user_func_array([new $this->call, $name],$arguments);
        } else {
            return "call api for $this->call";
        }
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new Connector;
        $instance->service = $arguments[0];
        return $instance;
    }
    public function __invoke($x = 'package')
    {
       $this->source = $x;
    }
}
