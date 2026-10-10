<?php

declare(strict_types=1);

namespace slapper\events;

use pocketmine\entity\Entity;
use pocketmine\player\Player;
use slapper\entities\SlapperHuman;

final class SlapperHitEvent {
	public function getEntity() : Entity {
		throw new \LogicException();
	}

	public function getDamager() : Player {
		throw new \LogicException();
	}
}
