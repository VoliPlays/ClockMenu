<?php

namespace LaFuma;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\Level;
use pocketmine\block\Block;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("\n§l§cPlugin attivato con successo!\nSeguimi su Telegram @LaFuma per news");
		}
		
		public function onJoin(PlayerJoinEvent $event){
			
			$player = $event->getPlayer();
			$player->getInventory()->clearAll();
			$item1 = Item::get(Item::CLOCK);
			$item1->setCustomName("§l§bSolarDinasty§r");
			$player->getInventory()->setItem(4, $item1);
		
	}
	
	public function onInteract(PlayerInteractEvent $event1){
		
		$player = $event1->getPlayer();
		$item = $player->getInventory()->getItemInHand();
		if($item->getCustomName() == "§l§bSolarDinasty§r"){
			$player->getInventory()->clearAll();
			//Info
			$item2 = Item::get(Item::SLIMEBALL, 12,1);
			$item2->setCustomName("§l§6Info§r");
			$player->getInventory()->setItem(4,$item2);
			//KitPvP
			$item3 = Item::get(Item::DIAMOND_SWORD, 11,1);
			$item3->setCustomName("§l§6KitPvP§r");
			$player->getInventory()->setItem(5,$item3);
			//Prison
			$item4 = Item::get(Item::DIAMOND_PICKAXE, 10,1);
			$item4->setCustomName("§l§6Prison§r");
			$player->getInventory()->setItem(3,$item4);
			//Back 1
			$item1 = Item::get(Item::STICK, 14,1);
			$item1->setCustomName("§4§lBack§r");
			$player->getInventory()->setItem(8,$item1);
			//Back 2
			$item5 = Item::get(Item::STICK,9,1);
			$item5->setCustomName("§l§4Back§r");
			$player->getInventory()->setItem(0,$item5);
			//Ignore This
			//$item6 = Item::get(Item::WOOL,8,1);
			//$item6->setCustomName("§l§cIgnore this§r");
			//$player->getInventory()->setItem(2,$item6);
			//Ignore This2
			//$item7 = Item::get(Item::WOOL,7,1);
			//$item7->setCustomName("§l§cIgnore this§r");
			//$player->getInventory()->setItem(1,$item7);
			//Ignore This3
			//$item8 = Item::get(Item::WOOL,6,1);
			//$item8->setCustomName("§l§cIgnore this§r");
			//$player->getInventory()->setItem(6,$item8);
			//Ignore This4
			//$item9 = Item::get(Item::WOOL,5,1);
			//$item9->setCustomName("§l§cIgnore this§r");
			//$player->getInventory()->setItem(7,$item9);
			
}else if($item->getCustomName() == "§4§lBack§r"){
	$player->getInventory()->clearAll();
	$item1 = Item::get(Item::CLOCK);
    $item1->setCustomName("§l§bSolarDinasty§r");
	$player->getInventory()->setItem(4, $item1);
	
  }else if($item->getCustomName() == "§l§4Back§r"){
  	$player->getInventory()->clearAll();
      $item1 = Item::get(Item::CLOCK);
      $item1->setCustomName("§l§bSolarDinasty§r");
      $player->getInventory()->setItem(4,$item1);
      
}else if($item->getCustomName() == "§l§6KitPvP§r"){
$player->teleport($this->getServer()->getLevelByName("KitPvP")->getSafeSpawn());

}else if($item->getCustomName() == "§l§6Prison§r"){
$player->teleport($this->getServer()->getLevelByName("Prison")->getSafeSpawn());
        }
    }
 }
