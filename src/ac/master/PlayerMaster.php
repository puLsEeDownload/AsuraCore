<?php

namespace ac\master;

use pocketmine\player\Player;

class PlayerMaster
{

    public static ?Player $player = null;

    public static function getPlayer(): ?Player
    {
        return self::$player;
    }

}