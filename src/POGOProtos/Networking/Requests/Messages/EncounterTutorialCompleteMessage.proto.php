<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/EncounterTutorialCompleteMessage.proto.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  require('POGOProtos/Enums/PokemonId.proto.php');

  // message POGOProtos.Networking.Requests.Messages.EncounterTutorialCompleteMessage
  final class EncounterTutorialCompleteMessage extends ProtobufMessage {

    private $_unknown;
    private $pokemonId = PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 1

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
          case 1: // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
    }

    public function size() {
      $size = 0;
      if ($this->pokemonId !== PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      return $size;
    }

    public function clearPokemonId() { $this->pokemonId = PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokemon_id', $this->pokemonId, PokemonId::MISSINGNO);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.EncounterTutorialCompleteMessage)
  }

}