<?php

namespace jojoe77777\VanillaXYZ;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\network\mcpe\protocol\GameRulesChangedPacket;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerJoin(PlayerJoinEvent $ev){
        $pk = new GameRulesChangedPacket();
        $pk->gameRules = ["showcoordinates" => [1, true]];
        $ev->getPlayer()->dataPacket($pk);
    }

}
