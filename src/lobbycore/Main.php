<?php

namespace lobbycore;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;

use pocketmine\item\Item;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getLogger()->info("Plugin LobbyCore Aktif");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event){

        $player = $event->getPlayer();

        $player->getInventory()->clearAll();

        $item = Item::get(399, 0, 1);
        $item->setCoustomName("LobbyCore");
        $item2 = Item::get(409, 0, 1);
        $item2->setCoustomName("Lobby");
        $item3 = Item::get(385, 0, 1);
        $item3->setCoustomName("LobbyC");

        $player->getInventory()->setItem(0, $item);
        $player->getInventory()->setItem(4, $item2);
        $player->getInventory()->setItem(8, $item3);
    }

    public function onClick(PlayerInteractEvent $event){

        $player = $event->getPlayer();
        $in = $player->getInventory()->getItemInHand()->getCustomName();

        if ($in == "LobbyCore"){
            $player->sendMessage("Haiiiiiii")
        }
        if ($in == "LobbyC"){
            $player->sendMessage("Haiiiiiii")
        }
        if ($in == "LobbyC"){
            $player->sendMessage("Haiiiiiii")
        }


    }

    public function onInventory(InventoryTransactionEvent $event){
        $event->setCancelled(true);
    }
}
