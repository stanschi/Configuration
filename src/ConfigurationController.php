<?php
namespace Unifun\Configuration;

class ConfigurationController
{
    public $config;
    private static $instance;
    
    public static function getInstance($params, $method="JSON")
    {
        if(!self::$instance) 
        {
            self::$instance = new self($params, $method);
        }
        
        return self::$instance;
    }

    private function __construct($params, $method="JSON")
    {
        $configObject = null;
        switch ($method) {
            case "JSON":
                $configObject = new ConfigurationJson($params);
                break;
            default:
                $configObject = new ConfigurationJson($params);
                break;
        }

        $this->config = $configObject->config;
    }
    
}

