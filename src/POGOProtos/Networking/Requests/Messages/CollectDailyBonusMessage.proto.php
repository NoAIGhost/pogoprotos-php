<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Messages/CollectDailyBonusMessage.proto.php');

namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.CollectDailyBonusMessage
  final class CollectDailyBonusMessage extends ProtobufMessage {

    private $_unknown;

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
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
    }

    public function size() {
      $size = 0;
      return $size;
    }

    public function __toString() {
      return '';
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.CollectDailyBonusMessage)
  }

}