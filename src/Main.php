<?php

namespace ReinfyTeam\SlapBack;

use pocketmine\plugin\PluginBase;
use ReinfyTeam\SlapBack\SlapListener;

class Main extends PluginBase {
	public function onEnable() :void{
	    $this->getServer()->getPluginManager()->registerEvents(new SlapListener(), $this); 
	}
} 
