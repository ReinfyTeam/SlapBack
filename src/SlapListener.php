<?php

declare(strict_types=1);

namespace ReinfyTeam\SlapBack;

use slapper\entities\SlapperHuman;
use slapper\events\SlapperHitEvent;
use pocketmine\event\Listener;
use pocketmine\entity\animation\ArmSwingAnimation;

final class SlapListener implements Listener {
	public function onSlapperHit(SlapperHitEvent $ev) : void {
		$entity = $ev->getEntity();
		if(!$entity instanceof SlapperHuman){
			return;
		}
		$player = $ev->getDamager();
		$entity->broadcastAnimation(new ArmSwingAnimation($entity), [$player]);
	}
}
