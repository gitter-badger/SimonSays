<?php

namespace simonsays;

use pocketmine\player\Player;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\Random;
use pocketmine\math\Vector3 as Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("SimonSays enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable()
    {
        $this->getLogger()->info("SimonSays disabled");
    }
}
