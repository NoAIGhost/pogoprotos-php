<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/PokemonFamilyId.proto.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Enums.PokemonFamilyId
  abstract class PokemonFamilyId extends ProtobufEnum {
    const FAMILY_UNSET = 0;
    const FAMILY_BULBASAUR = 1;
    const FAMILY_CHARMANDER = 4;
    const FAMILY_SQUIRTLE = 7;
    const FAMILY_CATERPIE = 10;
    const FAMILY_WEEDLE = 13;
    const FAMILY_PIDGEY = 16;
    const FAMILY_RATTATA = 19;
    const FAMILY_SPEAROW = 21;
    const FAMILY_EKANS = 23;
    const FAMILY_PIKACHU = 25;
    const FAMILY_SANDSHREW = 27;
    const FAMILY_NIDORAN_FEMALE = 29;
    const FAMILY_NIDORAN_MALE = 32;
    const FAMILY_CLEFAIRY = 35;
    const FAMILY_VULPIX = 37;
    const FAMILY_JIGGLYPUFF = 39;
    const FAMILY_ZUBAT = 41;
    const FAMILY_ODDISH = 43;
    const FAMILY_PARAS = 46;
    const FAMILY_VENONAT = 48;
    const FAMILY_DIGLETT = 50;
    const FAMILY_MEOWTH = 52;
    const FAMILY_PSYDUCK = 54;
    const FAMILY_MANKEY = 56;
    const FAMILY_GROWLITHE = 58;
    const FAMILY_POLIWAG = 60;
    const FAMILY_ABRA = 63;
    const FAMILY_MACHOP = 66;
    const FAMILY_BELLSPROUT = 69;
    const FAMILY_TENTACOOL = 72;
    const FAMILY_GEODUDE = 74;
    const FAMILY_PONYTA = 77;
    const FAMILY_SLOWPOKE = 79;
    const FAMILY_MAGNEMITE = 81;
    const FAMILY_FARFETCHD = 83;
    const FAMILY_DODUO = 84;
    const FAMILY_SEEL = 86;
    const FAMILY_GRIMER = 88;
    const FAMILY_SHELLDER = 90;
    const FAMILY_GASTLY = 92;
    const FAMILY_ONIX = 95;
    const FAMILY_DROWZEE = 96;
    const FAMILY_HYPNO = 97;
    const FAMILY_KRABBY = 98;
    const FAMILY_VOLTORB = 100;
    const FAMILY_EXEGGCUTE = 102;
    const FAMILY_CUBONE = 104;
    const FAMILY_HITMONLEE = 106;
    const FAMILY_HITMONCHAN = 107;
    const FAMILY_LICKITUNG = 108;
    const FAMILY_KOFFING = 109;
    const FAMILY_RHYHORN = 111;
    const FAMILY_CHANSEY = 113;
    const FAMILY_TANGELA = 114;
    const FAMILY_KANGASKHAN = 115;
    const FAMILY_HORSEA = 116;
    const FAMILY_GOLDEEN = 118;
    const FAMILY_STARYU = 120;
    const FAMILY_MR_MIME = 122;
    const FAMILY_SCYTHER = 123;
    const FAMILY_JYNX = 124;
    const FAMILY_ELECTABUZZ = 125;
    const FAMILY_MAGMAR = 126;
    const FAMILY_PINSIR = 127;
    const FAMILY_TAUROS = 128;
    const FAMILY_MAGIKARP = 129;
    const FAMILY_LAPRAS = 131;
    const FAMILY_DITTO = 132;
    const FAMILY_EEVEE = 133;
    const FAMILY_PORYGON = 137;
    const FAMILY_OMANYTE = 138;
    const FAMILY_KABUTO = 140;
    const FAMILY_AERODACTYL = 142;
    const FAMILY_SNORLAX = 143;
    const FAMILY_ARTICUNO = 144;
    const FAMILY_ZAPDOS = 145;
    const FAMILY_MOLTRES = 146;
    const FAMILY_DRATINI = 147;
    const FAMILY_MEWTWO = 150;
    const FAMILY_MEW = 151;

    public static $_values = array(
      0 => "FAMILY_UNSET",
      1 => "FAMILY_BULBASAUR",
      4 => "FAMILY_CHARMANDER",
      7 => "FAMILY_SQUIRTLE",
      10 => "FAMILY_CATERPIE",
      13 => "FAMILY_WEEDLE",
      16 => "FAMILY_PIDGEY",
      19 => "FAMILY_RATTATA",
      21 => "FAMILY_SPEAROW",
      23 => "FAMILY_EKANS",
      25 => "FAMILY_PIKACHU",
      27 => "FAMILY_SANDSHREW",
      29 => "FAMILY_NIDORAN_FEMALE",
      32 => "FAMILY_NIDORAN_MALE",
      35 => "FAMILY_CLEFAIRY",
      37 => "FAMILY_VULPIX",
      39 => "FAMILY_JIGGLYPUFF",
      41 => "FAMILY_ZUBAT",
      43 => "FAMILY_ODDISH",
      46 => "FAMILY_PARAS",
      48 => "FAMILY_VENONAT",
      50 => "FAMILY_DIGLETT",
      52 => "FAMILY_MEOWTH",
      54 => "FAMILY_PSYDUCK",
      56 => "FAMILY_MANKEY",
      58 => "FAMILY_GROWLITHE",
      60 => "FAMILY_POLIWAG",
      63 => "FAMILY_ABRA",
      66 => "FAMILY_MACHOP",
      69 => "FAMILY_BELLSPROUT",
      72 => "FAMILY_TENTACOOL",
      74 => "FAMILY_GEODUDE",
      77 => "FAMILY_PONYTA",
      79 => "FAMILY_SLOWPOKE",
      81 => "FAMILY_MAGNEMITE",
      83 => "FAMILY_FARFETCHD",
      84 => "FAMILY_DODUO",
      86 => "FAMILY_SEEL",
      88 => "FAMILY_GRIMER",
      90 => "FAMILY_SHELLDER",
      92 => "FAMILY_GASTLY",
      95 => "FAMILY_ONIX",
      96 => "FAMILY_DROWZEE",
      97 => "FAMILY_HYPNO",
      98 => "FAMILY_KRABBY",
      100 => "FAMILY_VOLTORB",
      102 => "FAMILY_EXEGGCUTE",
      104 => "FAMILY_CUBONE",
      106 => "FAMILY_HITMONLEE",
      107 => "FAMILY_HITMONCHAN",
      108 => "FAMILY_LICKITUNG",
      109 => "FAMILY_KOFFING",
      111 => "FAMILY_RHYHORN",
      113 => "FAMILY_CHANSEY",
      114 => "FAMILY_TANGELA",
      115 => "FAMILY_KANGASKHAN",
      116 => "FAMILY_HORSEA",
      118 => "FAMILY_GOLDEEN",
      120 => "FAMILY_STARYU",
      122 => "FAMILY_MR_MIME",
      123 => "FAMILY_SCYTHER",
      124 => "FAMILY_JYNX",
      125 => "FAMILY_ELECTABUZZ",
      126 => "FAMILY_MAGMAR",
      127 => "FAMILY_PINSIR",
      128 => "FAMILY_TAUROS",
      129 => "FAMILY_MAGIKARP",
      131 => "FAMILY_LAPRAS",
      132 => "FAMILY_DITTO",
      133 => "FAMILY_EEVEE",
      137 => "FAMILY_PORYGON",
      138 => "FAMILY_OMANYTE",
      140 => "FAMILY_KABUTO",
      142 => "FAMILY_AERODACTYL",
      143 => "FAMILY_SNORLAX",
      144 => "FAMILY_ARTICUNO",
      145 => "FAMILY_ZAPDOS",
      146 => "FAMILY_MOLTRES",
      147 => "FAMILY_DRATINI",
      150 => "FAMILY_MEWTWO",
      151 => "FAMILY_MEW",
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