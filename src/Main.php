<?php

namespace xqwtxon\SlapBackV2;

use pocketmine\plugin\PluginBase;
use xqwtxon\SlapBackV2\SlapListener;

class Main extends PluginBase {
	public function onEnable() :void{
	    $this->getServer()->getPluginManager()->registerEvents(new SlapListener(), $this); 
	}
} 
