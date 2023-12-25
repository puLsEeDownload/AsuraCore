<?php

namespace ac;

use ac\master\PlayerMaster;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener
{

    public function onJoin(PlayerJoinEvent $event): void
    {
        PlayerMaster::$player = $event->getPlayer();
    }

}