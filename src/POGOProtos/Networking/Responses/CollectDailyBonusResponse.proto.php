<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/CollectDailyBonusResponse.proto.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Networking.Responses.CollectDailyBonusResponse.Result
  abstract class CollectDailyBonusResponse_Result extends ProtobufEnum {
    const UNSET = 0;
    const SUCCESS = 1;
    const FAILURE = 2;
    const TOO_SOON = 3;

    public static $_values = array(
      0 => "UNSET",
      1 => "SUCCESS",
      2 => "FAILURE",
      3 => "TOO_SOON",
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

  // message POGOProtos.Networking.Responses.CollectDailyBonusResponse
  final class CollectDailyBonusResponse extends ProtobufMessage {

    private $_unknown;
    private $result = CollectDailyBonusResponse_Result::UNSET; // optional .POGOProtos.Networking.Responses.CollectDailyBonusResponse.Result result = 1

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
          case 1: // optional .POGOProtos.Networking.Responses.CollectDailyBonusResponse.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== CollectDailyBonusResponse_Result::UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== CollectDailyBonusResponse_Result::UNSET) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      return $size;
    }

    public function clearResult() { $this->result = CollectDailyBonusResponse_Result::UNSET; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, CollectDailyBonusResponse_Result::UNSET);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.CollectDailyBonusResponse)
  }

}