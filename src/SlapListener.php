<?php

namespace xqwtxon\SlapBackV2;

use xqwtxon\SlapBackV2\Main;
use slapper\entities\SlapperHuman;
use slapper\events\SlapperHitEvent;
use pocketmine\event\Listener;
use pocketmine\entity\Human;
use pocketmine\entity\animation\ArmSwingAnimation;
class SlapListener implements Listener {
    
    public function __construct(private Main $plugin){
        //NOOP
    }
    
    public function onSlapperHit(SlapperHitEvent $ev){
        $toggle = $this->plugin->getConfig()->get("enabled");
        if ($toggle == false) return;
        if ($toggle == true){
		  $entity = $ev->getEntity();
		  if(!$entity instanceof SlapperHuman){
			return;
		  }
		  $entity = $ev->getEntity();
		  if(!$entity instanceof SlapperHuman){
			return;
		  }
                  $player = $ev->getDamager();
                  $entity->broadcastAnimation(new ArmSwingAnimation($entity), [$player]);  
          }
	}
}
