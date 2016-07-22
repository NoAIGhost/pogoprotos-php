<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Responses/CollectDailyDefenderBonusResponse.proto.php');

namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result
  abstract class CollectDailyDefenderBonusResponse_Result extends ProtobufEnum {
    const UNSET = 0;
    const SUCCESS = 1;
    const FAILURE = 2;
    const TOO_SOON = 3;
    const NO_DEFENDERS = 4;

    public static $_values = array(
      0 => "UNSET",
      1 => "SUCCESS",
      2 => "FAILURE",
      3 => "TOO_SOON",
      4 => "NO_DEFENDERS",
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

  // message POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse
  final class CollectDailyDefenderBonusResponse extends ProtobufMessage {

    private $_unknown;
    private $result = CollectDailyDefenderBonusResponse_Result::UNSET; // optional .POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1
    private $currencyType = array(); // repeated string currency_type = 2
    private $currencyAwarded = array(); // repeated int32 currency_awarded = 3
    private $defendersCount = 0; // optional int32 defenders_count = 4

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
          case 1: // optional .POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          case 2: // repeated string currency_type = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->currencyType[] = $tmp;

            break;
          case 3: // repeated int32 currency_awarded = 3
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_signed_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->currencyAwarded[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_signed_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->currencyAwarded[] = $tmp;
              }
            }

            break;
          case 4: // optional int32 defenders_count = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->defendersCount = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== CollectDailyDefenderBonusResponse_Result::UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
      foreach($this->currencyType as $v) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($v));
        fwrite($fp, $v);
      }
      foreach($this->currencyAwarded as $v) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $v);
      }
      if ($this->defendersCount !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->defendersCount);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== CollectDailyDefenderBonusResponse_Result::UNSET) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      foreach($this->currencyType as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->currencyAwarded as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->defendersCount !== 0) {
        $size += 1 + Protobuf::size_varint($this->defendersCount);
      }
      return $size;
    }

    public function clearResult() { $this->result = CollectDailyDefenderBonusResponse_Result::UNSET; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function clearCurrencyType() { $this->currencyType = array(); }
    public function getCurrencyTypeCount() { return count($this->currencyType); }
    public function getCurrencyType($index) { return $this->currencyType[$index]; }
    public function getCurrencyTypeArray() { return $this->currencyType; }
    public function setCurrencyType($index, array $value) {$this->currencyType[$index] = $value; }
    public function addCurrencyType(array $value) { $this->currencyType[] = $value; }
    public function addAllCurrencyType(array $values) { foreach($values as $value) {$this->currencyType[] = $value; }}

    public function clearCurrencyAwarded() { $this->currencyAwarded = array(); }
    public function getCurrencyAwardedCount() { return count($this->currencyAwarded); }
    public function getCurrencyAwarded($index) { return $this->currencyAwarded[$index]; }
    public function getCurrencyAwardedArray() { return $this->currencyAwarded; }
    public function setCurrencyAwarded($index, array $value) {$this->currencyAwarded[$index] = $value; }
    public function addCurrencyAwarded(array $value) { $this->currencyAwarded[] = $value; }
    public function addAllCurrencyAwarded(array $values) { foreach($values as $value) {$this->currencyAwarded[] = $value; }}

    public function clearDefendersCount() { $this->defendersCount = 0; }
    public function getDefendersCount() { return $this->defendersCount;}
    public function setDefendersCount($value) { $this->defendersCount = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, CollectDailyDefenderBonusResponse_Result::UNSET)
           . Protobuf::toString('currency_type', $this->currencyType, "")
           . Protobuf::toString('currency_awarded', $this->currencyAwarded, 0)
           . Protobuf::toString('defenders_count', $this->defendersCount, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse)
  }

}