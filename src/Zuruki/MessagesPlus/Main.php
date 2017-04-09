<?php

namespace Zuruki\MessagesPlus;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
	public function onEnable(){
	$this->getLogger()->info(" Enabled!");
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	@mkdir($this->getDataFolder());
        $this->cfg = $this->getConfig();
        $this->saveDefaultConfig();
	}
	public function onDisable(){
	$this->getLogger()->info(" Enabled!");
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onJoin(PlayerJoinEvent $ejoin){
	$joinmsg = $this->cfg->get("JoinMessage:");
	$player = $ejoin->getPlayer();
	$name = $ejoin->getPlayer()->getName();
	$this->getServer()->broadcastMessage($joinmsg);
	}
	



