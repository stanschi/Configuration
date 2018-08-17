<?php
namespace Unifun\Configuration;

class ConfigurationJson extends ConfigurationBase
{ 
    public function loadConfiguration($params): void
    {
        $dataJson = file_get_contents($params, true);
        
        if($dataJson)
        {
            $data = json_decode($dataJson);
            $this->config = $data;
        }
    }
}
