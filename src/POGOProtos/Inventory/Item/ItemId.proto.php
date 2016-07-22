<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/Item/ItemId.proto.php');

namespace POGOProtos\Inventory\Item {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Inventory.Item.ItemId
  abstract class ItemId extends ProtobufEnum {
    const ITEM_UNKNOWN = 0;
    const ITEM_POKE_BALL = 1;
    const ITEM_GREAT_BALL = 2;
    const ITEM_ULTRA_BALL = 3;
    const ITEM_MASTER_BALL = 4;
    const ITEM_POTION = 101;
    const ITEM_SUPER_POTION = 102;
    const ITEM_HYPER_POTION = 103;
    const ITEM_MAX_POTION = 104;
    const ITEM_REVIVE = 201;
    const ITEM_MAX_REVIVE = 202;
    const ITEM_LUCKY_EGG = 301;
    const ITEM_INCENSE_ORDINARY = 401;
    const ITEM_INCENSE_SPICY = 402;
    const ITEM_INCENSE_COOL = 403;
    const ITEM_INCENSE_FLORAL = 404;
    const ITEM_TROY_DISK = 501;
    const ITEM_X_ATTACK = 602;
    const ITEM_X_DEFENSE = 603;
    const ITEM_X_MIRACLE = 604;
    const ITEM_RAZZ_BERRY = 701;
    const ITEM_BLUK_BERRY = 702;
    const ITEM_NANAB_BERRY = 703;
    const ITEM_WEPAR_BERRY = 704;
    const ITEM_PINAP_BERRY = 705;
    const ITEM_SPECIAL_CAMERA = 801;
    const ITEM_INCUBATOR_BASIC_UNLIMITED = 901;
    const ITEM_INCUBATOR_BASIC = 902;
    const ITEM_POKEMON_STORAGE_UPGRADE = 1001;
    const ITEM_ITEM_STORAGE_UPGRADE = 1002;

    public static $_values = array(
      0 => "ITEM_UNKNOWN",
      1 => "ITEM_POKE_BALL",
      2 => "ITEM_GREAT_BALL",
      3 => "ITEM_ULTRA_BALL",
      4 => "ITEM_MASTER_BALL",
      101 => "ITEM_POTION",
      102 => "ITEM_SUPER_POTION",
      103 => "ITEM_HYPER_POTION",
      104 => "ITEM_MAX_POTION",
      201 => "ITEM_REVIVE",
      202 => "ITEM_MAX_REVIVE",
      301 => "ITEM_LUCKY_EGG",
      401 => "ITEM_INCENSE_ORDINARY",
      402 => "ITEM_INCENSE_SPICY",
      403 => "ITEM_INCENSE_COOL",
      404 => "ITEM_INCENSE_FLORAL",
      501 => "ITEM_TROY_DISK",
      602 => "ITEM_X_ATTACK",
      603 => "ITEM_X_DEFENSE",
      604 => "ITEM_X_MIRACLE",
      701 => "ITEM_RAZZ_BERRY",
      702 => "ITEM_BLUK_BERRY",
      703 => "ITEM_NANAB_BERRY",
      704 => "ITEM_WEPAR_BERRY",
      705 => "ITEM_PINAP_BERRY",
      801 => "ITEM_SPECIAL_CAMERA",
      901 => "ITEM_INCUBATOR_BASIC_UNLIMITED",
      902 => "ITEM_INCUBATOR_BASIC",
      1001 => "ITEM_POKEMON_STORAGE_UPGRADE",
      1002 => "ITEM_ITEM_STORAGE_UPGRADE",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}