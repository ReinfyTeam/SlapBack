<?php

namespace xqwtxon\SlapBackV2;

use pocketmine\plugin\PluginBase;
use xqwtxon\SlapBackV2\SlapInfo;
use xqwtxon\SlapBackV2\SlapListener;
use pocketmine\utils\TextFormat;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\VersionInfo;

class Main extends PluginBase implements SlapInfo{
    public function onLoad() :void {
        $this->saveResource("config.yml");
        $log = $this->getServer()->getLogger();
        $config = $this->getConfig();
        if ($config->get("config-version") == SlapInfo::CONFIG_VERSION){
            @rename($this->getDataFolder()."/"."config.yml", $this->getDataFolder()."/"."old-config.yml");
            $log->notice("[NOTICE] Your configuration is outdated! The configuration was renamed as old-config.yml");
            $this->saveResource("config.yml");
        } else {
            $this->saveConfig();
            $log->info("[INFO] The plugin was loaded!");
        }
        if (SlapperInfo::IS_DEVELOPMENT_BUILD == true){
            $log->warning($prefix.TextFormat::RED."Your SlapBack is in development build! You may expect crash during the plugin. You can make issue about this plugin by visiting plugin github issue!");
            return;
        }
    }
	public function onEnable() :void{
	    $toggle = $this->getConfig()->get("enabled");
	    $log = $this->getServer()->getLogger();
	    if (SlapInfo::PROTOCOL_VERSION == ProtocolInfo::CURRENT_PROTOCOL){
                $log->info(TextFormat::GREEN."Your SlapBack is Compatible with your version!");
            } else {
                $log->info(TextFormat::RED."Your SlapBack isnt Compatible with your version!");
                $this->getServer()->getPluginManager()->disablePlugin($this);
                return;
            }
	    if (!isset($toggle)){
	        $log->error("[ERROR] It cant be blank the config!");
	        $this->getConfig()->set("enabled", true);
	        return;
	    } else {
	     if ($toggle == true){
	    $log->info("[INFO] The plugin was enabled!");
		$this->getServer()->getPluginManager()->registerEvents(new SlapListener($this), $this);
		return;
	     }
	     if ($toggle == false){
	     $log->info("[INFO] The plugin was disabled by configuration.");
	     $this->getServer()->getPluginManager()->disablePlugin($this);
	     return;
	     }
	}
}
	public function onDisable() :void{
	    $log = $this->getServer()->getLogger();
	    $log->info("[INFO] Successfully plugin disabled!");
	    $this->saveConfig();
	}
}
