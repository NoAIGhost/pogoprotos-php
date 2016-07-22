<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/MarkTutorialCompleteResponse.proto.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  require('POGOProtos/Data/PlayerData.proto.php');

  // message POGOProtos.Networking.Responses.MarkTutorialCompleteResponse
  final class MarkTutorialCompleteResponse extends ProtobufMessage {

    private $_unknown;
    private $success = false; // optional bool success = 1
    private $playerData = null; // optional .POGOProtos.Data.PlayerData player_data = 2

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
          case 1: // optional bool success = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->success = ($tmp > 0) ? true : false;

            break;
          case 2: // optional .POGOProtos.Data.PlayerData player_data = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->playerData = new \POGOProtos\Data\PlayerData($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\PlayerData did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->success !== false) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->success ? 1 : 0);
      }
      if ($this->playerData !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->playerData->size());
        $this->playerData->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->success !== false) {
        $size += 2;
      }
      if ($this->playerData !== null) {
        $l = $this->playerData->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearSuccess() { $this->success = false; }
    public function getSuccess() { return $this->success;}
    public function setSuccess($value) { $this->success = $value; }

    public function clearPlayerData() { $this->playerData = null; }
    public function getPlayerData() { return $this->playerData;}
    public function setPlayerData(\POGOProtos\Data\PlayerData $value) { $this->playerData = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('success', $this->success, false)
           . Protobuf::toString('player_data', $this->playerData, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.MarkTutorialCompleteResponse)
  }

}