<?php

namespace Leader;

use pocketmine\entity\Effect;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\entity\EffectInstance;
use pocketmine\network\mcpe\protocol\OnScreenTextureAnimationPacket;
use pocketmine\Server;

class PotionAPI extends PluginBase implements Listener {

  /** @var PotionAPI */
  private static $instance;

  public static function getInstance() : self {
        return self::$instance;
    }

  public function onLoad(){
		self::$instance = $this;

	}
    public function onEnable() {
        Server::getInstance()->getPluginManager()->registerEvents($this,$this);
    }

    public function onEffect(Player $player , int $Type , int $Unit , int $Time , int $Power) {
        $Packet = new OnScreenTextureAnimationPacket();
        $Packet->effectId = $Type;
        $player->dataPacket($Packet);
        $player->addEffect(new EffectInstance(Effect::getEffect($Type),$Unit * $Time, $Power, false));
    }
}
