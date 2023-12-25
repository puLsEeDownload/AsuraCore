<?php

namespace ac;

use pocketmine\plugin\PluginBase;

class AsuraCore extends PluginBase
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}