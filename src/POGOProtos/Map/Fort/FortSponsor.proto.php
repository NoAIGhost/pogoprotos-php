<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Map/Fort/FortSponsor.proto.php');

namespace POGOProtos\Map\Fort {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Map.Fort.FortSponsor
  abstract class FortSponsor extends ProtobufEnum {
    const UNSET_SPONSOR = 0;
    const MCDONALDS = 1;
    const POKEMON_STORE = 2;

    public static $_values = array(
      0 => "UNSET_SPONSOR",
      1 => "MCDONALDS",
      2 => "POKEMON_STORE",
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