<?php

namespace Plugin;

use LonaDB\Plugins\PluginBase;

class MainClass extends PluginBase
{
    public function onEnable() : void
    {
        $this->GetLogger()->Load($this->GetName() . " has been enabled");
    }
}
