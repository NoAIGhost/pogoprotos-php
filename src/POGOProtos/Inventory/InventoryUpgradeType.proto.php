<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/InventoryUpgradeType.proto.php');

namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Inventory.InventoryUpgradeType
  abstract class InventoryUpgradeType extends ProtobufEnum {
    const UPGRADE_UNSET = 0;
    const INCREASE_ITEM_STORAGE = 1;
    const INCREASE_POKEMON_STORAGE = 2;

    public static $_values = array(
      0 => "UPGRADE_UNSET",
      1 => "INCREASE_ITEM_STORAGE",
      2 => "INCREASE_POKEMON_STORAGE",
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