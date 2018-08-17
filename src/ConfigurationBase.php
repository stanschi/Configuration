<?php
namespace Unifun\Configuration;

abstract class ConfigurationBase
{
    public $config;

    /**
     * ConfigurationBase constructor.
     * @param $params string Parameters of configurations (filename, json-string, xml-string, etc.)
     */
    public function __construct($params)
    {
        $this->loadConfiguration($params);
    }
    
    abstract public function loadConfiguration($params): void;

}

