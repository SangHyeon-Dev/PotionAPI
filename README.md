# PotionAPI

- APIs that make it easy to use Effect and OnScreenTextureAbimation Packets
-------------------------------------------------------------------------------------------
new OnScreenTextureAnimationPacket()->effectId = 16;
$player->dataPacket(new OnScreenTextureAnimationPacket()); 
$player->addEffect(new EffectInstance (Effect::getEffect(16), 20* 99999999, 255, true));
-------------------------------------------------------------------------------------------
-> PotionAPI::getInstance()->onEffect($player, 16 , 20 , 99999999 , 255);

use Usage: use Leader\PotionAPI;
PotionAPI::onEffect($player , int $Type , int $Unit , int $Time , int $Power);
