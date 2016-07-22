<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/Item/BattleAttributes.proto.php');

namespace POGOProtos\Settings\Master\Item {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Item.BattleAttributes
  final class BattleAttributes extends ProtobufMessage {

    private $_unknown;
    private $staPercent = 0; // optional float sta_percent = 1

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
          case 1: // optional float sta_percent = 1
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->staPercent = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->staPercent !== 0) {
        fwrite($fp, "\x0d", 1);
        Protobuf::write_float($fp, $this->staPercent);
      }
    }

    public function size() {
      $size = 0;
      if ($this->staPercent !== 0) {
        $size += 5;
      }
      return $size;
    }

    public function clearStaPercent() { $this->staPercent = 0; }
    public function getStaPercent() { return $this->staPercent;}
    public function setStaPercent($value) { $this->staPercent = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('sta_percent', $this->staPercent, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Item.BattleAttributes)
  }

}