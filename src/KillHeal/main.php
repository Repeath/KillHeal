<?php

namespace KillHeal;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;

class main extends PluginBase implements Listener{

    public function onEnable()
    {
        $this->getServer()->getLogger()->info("KillHeal Loaded. Plugin Created by Ryux.");
    }

    public function onDeath(PlayerDeathEvent $event)
    {
        $cause = $event->getEntity()->getLastDamageCause();
        if ($cause instanceof EntityDamageByEntityEvent) {
            $killer = $cause->getDamager();
            $killer->setHealth(20);
        }
    }
}
