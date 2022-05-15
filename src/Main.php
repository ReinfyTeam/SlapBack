<?php

namespace xqwtxon\SlapBackV2;

use pocketmine\plugin\PluginBase;
use xqwtxon\SlapBackV2\SlapListener;
use pocketmine\utils\TextFormat;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\VersionInfo;

class Main extends PluginBase {
    public function onLoad() :void {
        $this->saveResource("config.yml");
        $log = $this->getLogger();
        $config = $this->getConfig();
        if ($config->get("config-version") == "1.0.0"){
            @rename($this->getDataFolder()."/"."config.yml", $this->getDataFolder()."/"."old-config.yml");
            $log->notice("Your configuration is outdated! The configuration was renamed as old-config.yml");
            $this->saveResource("config.yml");
        } else {
            return;
        }
    }
	public function onEnable() :void{
	    $log = $this->getLogger();
	    $this->getServer()->getPluginManager()->registerEvents(new SlapListener(), $this); 
	}
} 
}
