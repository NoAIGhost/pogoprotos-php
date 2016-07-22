<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/FortDetailsMessage.proto.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.FortDetailsMessage
  final class FortDetailsMessage extends ProtobufMessage {

    private $_unknown;
    private $fortId = ""; // optional string fort_id = 1
    private $latitude = 0; // optional double latitude = 2
    private $longitude = 0; // optional double longitude = 3

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
          case 1: // optional string fort_id = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->fortId = $tmp;

            break;
          case 2: // optional double latitude = 2
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->latitude = $tmp;

            break;
          case 3: // optional double longitude = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->longitude = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->fortId !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->fortId));
        fwrite($fp, $this->fortId);
      }
      if ($this->latitude !== 0) {
        fwrite($fp, "\x11", 1);
        Protobuf::write_double($fp, $this->latitude);
      }
      if ($this->longitude !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->longitude);
      }
    }

    public function size() {
      $size = 0;
      if ($this->fortId !== "") {
        $l = strlen($this->fortId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->latitude !== 0) {
        $size += 9;
      }
      if ($this->longitude !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearFortId() { $this->fortId = ""; }
    public function getFortId() { return $this->fortId;}
    public function setFortId($value) { $this->fortId = $value; }

    public function clearLatitude() { $this->latitude = 0; }
    public function getLatitude() { return $this->latitude;}
    public function setLatitude($value) { $this->latitude = $value; }

    public function clearLongitude() { $this->longitude = 0; }
    public function getLongitude() { return $this->longitude;}
    public function setLongitude($value) { $this->longitude = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('fort_id', $this->fortId, "")
           . Protobuf::toString('latitude', $this->latitude, 0)
           . Protobuf::toString('longitude', $this->longitude, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.FortDetailsMessage)
  }

}