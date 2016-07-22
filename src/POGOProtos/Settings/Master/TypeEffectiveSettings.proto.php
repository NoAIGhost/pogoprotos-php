<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/TypeEffectiveSettings.proto.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  require('POGOProtos/Enums/PokemonType.proto.php');

  // message POGOProtos.Settings.Master.TypeEffectiveSettings
  final class TypeEffectiveSettings extends ProtobufMessage {

    private $_unknown;
    private $attackScalar = array(); // repeated float attack_scalar = 1
    private $attackType = PokemonType::POKEMON_TYPE_NONE; // optional .POGOProtos.Enums.PokemonType attack_type = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // repeated float attack_scalar = 1
            if($wire !== 2 && $wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 5 got: $wire");
            }
            if ($wire === 5) {
              $tmp = Protobuf::read_float($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
              $this->attackScalar[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_float($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
                $this->attackScalar[] = $tmp;
              }
            }

            break;
          case 2: // optional .POGOProtos.Enums.PokemonType attack_type = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->attackType = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->attackScalar as $v) {
        fwrite($fp, "\x0d", 1);
        Protobuf::write_float($fp, $v);
      }
      if ($this->attackType !== PokemonType::POKEMON_TYPE_NONE) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->attackType);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->attackScalar as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->attackType !== PokemonType::POKEMON_TYPE_NONE) {
        $size += 1 + Protobuf::size_varint($this->attackType);
      }
      return $size;
    }

    public function clearAttackScalar() { $this->attackScalar = array(); }
    public function getAttackScalarCount() { return count($this->attackScalar); }
    public function getAttackScalar($index) { return $this->attackScalar[$index]; }
    public function getAttackScalarArray() { return $this->attackScalar; }
    public function setAttackScalar($index, array $value) {$this->attackScalar[$index] = $value; }
    public function addAttackScalar(array $value) { $this->attackScalar[] = $value; }
    public function addAllAttackScalar(array $values) { foreach($values as $value) {$this->attackScalar[] = $value; }}

    public function clearAttackType() { $this->attackType = PokemonType::POKEMON_TYPE_NONE; }
    public function getAttackType() { return $this->attackType;}
    public function setAttackType($value) { $this->attackType = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('attack_scalar', $this->attackScalar, 0)
           . Protobuf::toString('attack_type', $this->attackType, PokemonType::POKEMON_TYPE_NONE);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.TypeEffectiveSettings)
  }

}