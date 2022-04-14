<?php

namespace xqwtxon\SlapBack;

use xqwtxon\SlapBack\Main;
use slapper\entities\SlapperHuman;
use slapper\events\SlapperHitEvent;
use xqwtxon\SlapBack\SlapListener;
use pocketmine\event\Listener;
use pocketmine\network\mcpe\protocol\AnimatePacket;

class SlapListener implements Listener {
    public function onSlapperHit(SlapperHitEvent $ev){
		$entity = $ev->getEntity();
		if(!$entity instanceof SlapperHuman){
			return;
		}
		$pk = new AnimatePacket();
		$pk->entityRuntimeId = $entity->getId();
		$pk->action = AnimatePacket::ACTION_SWING_ARM;
		$ev->getDamager()->dataPacket($pk);
	}
}