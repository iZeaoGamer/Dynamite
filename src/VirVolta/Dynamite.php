<?php

namespace VirVolta;

use pocketmine\plugin\PluginBase;
use pocketmine\entity\projectile\Egg;
use pocketmine\event\Listener;
use pocketmine\level\Explosion;
use pocketmine\level\Position;
use pocketmine\event\entity\ProjectileHitEntityEvent;
use pocketmine\event\entity\ProjectileHitEvent;

class Dynamite extends PluginBase implements Listener
{

    public function onEnable()
    {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onProjectileHitEntity(ProjectileHitEntityEvent $event)
    {
        $entity = $event->getEntity();

        if ($entity instanceof Egg) {

            $explosion = new Explosion(new Position($entity->getX(), $entity->getY(), $entity->getZ(), $entity->getLevel()), 3.3, null);
            $explosion->explodeA();
            $explosion->explodeB();

            $entity->flagForDespawn();

        }

    }

    public function onProjectileHit(ProjectileHitEvent $event)
    {
        $entity = $event->getEntity();

        if ($entity instanceof Egg) {

            $explosion = new Explosion(new Position($entity->getX(), $entity->getY(), $entity->getZ(), $entity->getLevel()), 3.3, null);
            $explosion->explodeA();
            $explosion->explodeB();

            $entity->flagForDespawn();

        }

    }

}
