<?php
namespace mawdoo3\drsk;


class Connector  
{
    private $service = 'auth';
    private $source = 'package';
    private $call = 'mawdoo3\\drsk';
    // public static function isAuthed($user = null)
    // {
    //     return isset($user) && !is_null($user) ? "$user logged in from auth" : 'not logged from auth';
    // }
    public function __call($name, $arguments)
    {
        $this->call = "\mawdoo3\\drsk\\$this->service";
        return call_user_func_array([$this->call, $name],$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return new Connector;
    }
    public static function to($name)
    {
        $instance = new Connector;
        $instance->service = $name;
        return $instance;
    }
}
