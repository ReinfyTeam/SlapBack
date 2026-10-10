<?php

declare(strict_types=1);

namespace ReinfyTeam\SlapBack;

use pocketmine\plugin\PluginBase;

final class Main extends PluginBase {
	public function onEnable() : void{
	    $this->getServer()->getPluginManager()->registerEvents(new SlapListener(), $this);
	}
}
