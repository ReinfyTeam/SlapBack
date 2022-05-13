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
	    $toggle = $this->getConfig()->get("enabled");
	    $log = $this->getServer()->getLogger();
	    if (!isset($toggle)){
	        $log->error("It cant be blank the config!");
	        $this->getConfig()->set("enabled", true);
	        return;
	    } else {
	    if ($toggle == true){
	        $log->info("The plugin was enabled!");
		$this->getServer()->getPluginManager()->registerEvents(new SlapListener(), $this);
		return;
	     }
	     if ($toggle == false){
	     $log->info("The plugin was disabled by configuration.");
	     $this->getServer()->getPluginManager()->disablePlugin($this);
	     return;
	     }
	}
} 
}
