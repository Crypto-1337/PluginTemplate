<?php
//Namespace from plugin.json
namespace Plugin;
//Import PluginBase
use LonaDB\Plugins\PluginBase;
//Class name from plugin.json
class MainClass extends PluginBase
{
    //The onEnable funciton is always run once the plugin has been loaded
    //You should use this as your constructor
    public function onEnable() : void
    {
        $this->GetLogger()->Load($this->GetName() . " on version " . $this->GetVersion() . " has been enabled");
    }

    //You can create your own event handling:
    public function onTableCreate(string $executor, string $name) : void {
        $this->GetLogger()->Plugin($this->GetName(), "A table has been created: " . $name);
    }
    public function onTableDelete(string $executor, string $name) : void {
        $this->GetLogger()->Plugin($this->GetName(), "A table has been deleted: " . $name);
    }
}
