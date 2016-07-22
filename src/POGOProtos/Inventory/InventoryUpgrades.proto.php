<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/InventoryUpgrades.proto.php');

namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  require('POGOProtos/Inventory/InventoryUpgrade.proto.php');

  // message POGOProtos.Inventory.InventoryUpgrades
  final class InventoryUpgrades extends ProtobufMessage {

    private $_unknown;
    private $inventoryUpgrades = array(); // repeated .POGOProtos.Inventory.InventoryUpgrade inventory_upgrades = 1

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
          case 1: // repeated .POGOProtos.Inventory.InventoryUpgrade inventory_upgrades = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->inventoryUpgrades[] = new \POGOProtos\Inventory\InventoryUpgrade($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\InventoryUpgrade did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->inventoryUpgrades as $v) {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, $v->size());
        $v->write($fp);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->inventoryUpgrades as $v) {
        $l = $v->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearInventoryUpgrades() { $this->inventoryUpgrades = array(); }
    public function getInventoryUpgradesCount() { return count($this->inventoryUpgrades); }
    public function getInventoryUpgrades($index) { return $this->inventoryUpgrades[$index]; }
    public function getInventoryUpgradesArray() { return $this->inventoryUpgrades; }
    public function setInventoryUpgrades($index, array $value) {$this->inventoryUpgrades[$index] = $value; }
    public function addInventoryUpgrades(array $value) { $this->inventoryUpgrades[] = $value; }
    public function addAllInventoryUpgrades(array $values) { foreach($values as $value) {$this->inventoryUpgrades[] = $value; }}

    public function __toString() {
      return ''
           . Protobuf::toString('inventory_upgrades', $this->inventoryUpgrades, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.InventoryUpgrades)
  }

}