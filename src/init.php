<?php
namespace Encryption;
/**
 * Mappings for characters and their corresponding symbols.
 *
 * This array contains mappings of alphanumeric characters and some symbols to their
 * respective representations in various scripts or languages. Each character is mapped
 * to an array of four unique representations.
 *
 * Format:
 * - Key: A single alphanumeric character or symbol (e.g., "A", "B", "C", "0", "1", etc.)
 * - Value: An array of strings representing the mappings for that character.
 *
 * Example:
 * "A" => ["𑁄𑀲𓋆𑁼", "𑀦𑌶𑁛𐬌", "𑁋𓁋𑀐𓅐", "𓂇𓅕𐬛𐬰"]
 *
 * @var array $mappings
 */
$mappings = [
  "A" => ["𑁄𑀲𓋆𑁼", "𑀦𑌶𑁛𐬌", "𑁋𓁋𑀐𓅐", "𓂇𓅕𐬛𐬰"],
  "B" => ["𑁭𑌦𓈉𑁜", "𐬓𑁒𓍯𓀍", "𓈉𐬯𑁠𑅕", "𑁷𓋣𑌨𓌪"],
  "C" => ["𓏭𓄿𐬀𑌳", "𐬢𑁦𓇽𓂷", "𑀘𐬢𑁈𑁠", "𓍗𑁖𓈏𐬮"],
  "D" => ["𑁉𑌕𓍣𑀪", "𓅯𐬎𑌒𐍈", "𐬴𐬙𓍋𓈚", "𑀦𓍋𐬏𐬳"],
  "E" => ["𐬉𑁇𓉌𐌅", "𓂋𑅕𑀜𐬋", "𓄭𑌶𓆕𐬇", "𑁊𑅛𑀒𐦗"],
  "F" => ["𓆶𑍗𓈅𑀸", "𑀮𑌽𓇽𐬓", "𐬗𑀓𐌈𑀧", "𑍇𐬅𓄖𐬺"],
  "G" => ["𐬤𓌱𑀲𑌋", "𑌖𑀡𓋦𓇻", "𑁢𑍞𑀐𓊍", "𐍈𓁗𑁝𐬅"],
  "H" => ["𑁠𐬨𓊨𓍖", "𐬝𑌂𑍊𐦘", "𐬙𐬦𐌁𓋚", "𐭁𑉅𐬠𓏉"],
  "I" => ["𓃉𐬚𑀢𑍍", "𐍁𐬚𓉖𐬎", "𑁏𓀂𑀔𐮷", "𓆀𐬸𐬰𐦅"],
  "J" => ["𑅙𑀁𐬚𑁳", "𓍜𑁐𓋗𐬓", "𐬏𐬲𑀱𓏁", "𓏱𑈃𐬡𐬱"],
  "K" => ["𑌅𑅒𓅔𐬉", "𐬌𐍈𐌷𑀙", "𑉊𑍟𐌞𐭠", "𓋦𑌶𐬮𑅑"],
  "L" => ["𑀤𑌼𑍑𓅜", "𐬞𐬰𑀅𓋎", "𑀔𐬗𓋤𑁶", "𑀼𐬊𑌆𓉎"],
  "M" => ["𐬥𓏗𓆢𑁮", "𑀡𐬣𐬪𓆤", "𐌌𐍊𑁯𐬔", "𑌭𑄌𐬟𑅕"],
  "N" => ["𑄝𑅌𐬩𐌳", "𓅋𐩁𓉞𐌔", "𐬔𑅣𑁣𓈚", "𑀯𑅍𑀦𓅗"],
  "O" => ["𑌕𐬄𓄝𑄋", "𐬴𓈃𑌭𓇈", "𑀷𐬟𐦒𐌶", "𑄧𑀌𓌵𑁈"],
  "P" => ["𐬋𐬵𑅃𐬥", "𑍔𓅭𑌈𑇠", "𐌍𑀡𐍂𓄇", "𐦠𓍗𑌦𐍂"],
  "Q" => ["𑀯𐌗𓅱𑁚", "𓌏𐩕𑀬𐏃", "𑍅𐌙𓀦𑍞", "𑁞𐌒𓍖𑁣"],
  "R" => ["𓌔𑌞𐌌𓍏", "𑍛𑀖𑌷𐬘", "𐬪𐌋𑌧𓏧", "𑌃𑌕𐬉𑌢"],
  "S" => ["𐬴𓏦𑀚𓋉", "𑍇𐌱𐍗𓉔", "𐬚𐬦𑁹𐩘", "𑀣𐩗𐬒𑈪"],
  "T" => ["𑌌𑀭𓄐𓌒", "𐌴𐬮𑌆𓇉", "𐌅𑀵𐬬𐌍", "𐬘𐬄𓈖𐬳"],
  "U" => ["𑌕𐌈𓁔𓈌", "𐬯𐌦𑀩𑇤", "𑍄𐬦𑀊𑌌", "𓍟𐬉𐩏𓉏"],
  "V" => ["𑍞𐌄𓈝𓊖", "𓈚𑌔𐬟𐬩", "𐌑𑌤𓊖𐩚", "𐍙𐬌𑀬𑇩"],
  "W" => ["𑌭𐬰𑉄𓏱", "𑌰𑀖𑌉𐬟", "𐌆𐌡𓈎𐨣", "𐌀𐌈𐬅𑁮"],
  "X" => ["𑁇𐬳𓂸𐬓", "𑌬𐌊𓉇𐌷", "𓊔𑌒𓋑𑌷", "𓎱𐬥𐦣𑇸"],
  "Y" => ["𑀨𑍖𑀃𑀝", "𑄟𐬳𐬦𑌦", "𑍇𐌄𑁣𐩞", "𓆥𑄎𐌒𓃨"],
  "Z" => ["𑉖𐬀𐍢𐬞", "𑀊𑌗𐌌𐬠", "𐩉𓇃𐌇𑁮", "𑀲𑀌𓌘"],
  "0" => ["𑍅𓂂𓁱𒊹", "𓅠𑁦𓉅𒄭", "𓉛𑉧𑁫𒄖", "𓁘𑁹𑅴𓂢"],
  "1" => ["𒅑𐬋𒆙𑁅", "𓁇𑁒𓏇𓄜", "𐬗𒉾𑁡𑌄", "𑉏𑅒𑅝𓆘"],
  "2" => ["𓊉𓁆𓅇𓁑", "𐬖𑁸𑀢𐬶", "𓀖𑀞𑌵𑁘", "𑌢𓆡𐬋𓁓"],
  "3" => ["𐬰𑅲𓅤𓋂", "𓋌𑁾𑁧𐍯", "𓅱𑁹𓋉𓁆", "𐬟𓁂𐬞𑌢"],
  "4" => ["𑁨𓁉𑁻𓊲", "𐬱𑀁𑌠𐬣", "𓁧𓋎𑌄𑀂", "𓀲𑁼𑁕𓊇"],
  "5" => ["𓊇𑁶𓋜𐬄", "𐬜𑁽𐬟𑁇", "𓅋𐬗𓁔𑌇", "𓅦𑌡𐬋𑁦"],
  "6" => ["♗⚠🜛⧻", "⚁⧼♖𐇭", "♛⚘⫧⚵", "⧟🜤⚙♝"],
  "7" => ["⚒♛⚿⫸", "⏂⚰𖧆♜", "⧢⚡𑄢⚇", "🜌⚟♕⚛"],
  "8" => ["𑍅𓂂𓁱𒊹", "𓅠𑁦𓉅𒄭", "𓉛𑉧𑁫𒄖", "𓁘𑁹𑅴𓂢"],
  "9" => ["𒅑𐬋𒆙𑁅", "𓁇𑁒𓏇𓄜", "𐬗𒉾𑁡𑌄", "𑉏𑅒𑅝𓆘"],
  "_" => ["𓊉𓁆𓅇𓁑", "𐬖𑁸𑀢𐬶", "𓀖𑀞𑌵𑁘", "𑌢𓆡𐬋𓁓"],
];

$noiseSymbols = [
  "⩓",
  "⚿",
  "☢",
  "⛧",
  "♯",
  "⩠",
  "☰",
  "✰",
  "❃",
  "✦",
  "✧",
  "✩",
  "✪",
  "✫",
  "✬",
  "✭",
  "⨉",
  "⨍",
  "⨏",
  "⨑",
  "⨒",
  "⨓",
  "⨔",
  "⨕",
  "⨖",
  "⨗",
  "⨘",
  "⨙",
  "⨚",
  "⨛",
  "⨜",
  "⨝",
  "⨞",
  "⨟",
  "⚝",
  "⚈",
  "⚉",
  "⚊",
  "⚋",
  "⚌",
  "⚍",
  "⚎",
  "⚏",
  "⚠",
  "⚡",
  "⚢",
  "⚣",
  "⚤",
  "⚥",
  "⚦",
  "⚧",
  "⚨",
  "☤",
  "☥",
  "☦",
  "☧",
  "☨",
  "☩",
  "☪",
  "☫",
  "☬",
  "☭",
  "☮",
  "☯",
  "☰",
  "☱",
  "☲",
  "☳",
  "☴",
  "☵",
  "☶",
  "☷",
  "♈",
  "♉",
  "♊",
  "♋",
  "♌",
  "♍",
  "♎",
  "♏",
  "♐",
  "♑",
  "♒",
  "♓",
  "♔",
  "♕",
  "♖",
  "♗",
  "♘",
  "♙",
  "♚",
  "♛",
  "♜",
  "♝",
  "♞",
  "♟",
  "♠",
  "♥",
  "♦",
  "♣",
  "⚤",
  "⚥",
  "⚦",
  "⚧",
  "⚨",
  "⚩",
  "⚪",
  "⚫",
  "⚮",
  "⚯",
  "⚰",
  "⚱",
  "⚲",
  "⚳",
  "⚴",
  "⚵",
  "⚶",
  "⚷",
  "⚸",
  "⚹",
  "⚺",
  "⚻",
  "⚼",
  "⚽",
];

// init

// Class to handle character-symbol mappin

namespace UDC;

// Class to handle character-symbol mappings
class SymbolMapper
{
  private $mapping;

  public function __construct($mapping)
  {
    $this->mapping = $mapping;
  }

  public function getSymbolsForChar($char)
  {
    return $this->mapping[$char] ?? null;
  }

  public function getReversedMapping()
  {
    $reversedMapping = [];
    foreach ($this->mapping as $char => $symbols) {
      foreach ($symbols as $symbol) {
        $reversedMapping[$symbol] = $char;
      }
    }
    return $reversedMapping;
  }
}

// Class to handle noise symbols
class NoiseGenerator
{
  private $noiseSymbols;

  public function __construct($noiseSymbols)
  {
    $this->noiseSymbols = $noiseSymbols;
  }

  public function addNoise()
  {
    return $this->noiseSymbols[array_rand($this->noiseSymbols)];
  }

  public function isNoise($symbol)
  {
    return in_array($symbol, $this->noiseSymbols);
  }
}

// Main class to encrypt and decrypt text
class UDC
{
  private $symbolMapper;
  private $noiseGenerator;

  public function __construct(
    SymbolMapper $symbolMapper,
    NoiseGenerator $noiseGenerator
  ) {
    $this->symbolMapper = $symbolMapper;
    $this->noiseGenerator = $noiseGenerator;
  }

  public function encryptText($text)
  {
    $encrypted = "";
    $noiseFrequency = rand(1, 3);

    foreach (str_split(strtoupper($text)) as $char) {
      $symbols = $this->symbolMapper->getSymbolsForChar($char);

      if ($symbols) {
        $encrypted .= $symbols[array_rand($symbols)] . " ";
        if (rand(1, $noiseFrequency) === 1) {
          $encrypted .= $this->noiseGenerator->addNoise() . " ";
        }
      } else {
        $encrypted .= "? ";
      }
    }

    return trim($encrypted);
  }

  public function decryptText($encryptedText)
  {
    $reversedMapping = $this->symbolMapper->getReversedMapping();
    $decrypted = "";

    foreach (explode(" ", $encryptedText) as $code) {
      if (isset($reversedMapping[$code])) {
        $decrypted .= $reversedMapping[$code];
      } elseif (!$this->noiseGenerator->isNoise($code)) {
        $decrypted .= "?";
      }
    }

    return $decrypted;
  }

  public function output($text, $addNewLine = true)
  {
    echo $text;
    if ($addNewLine) {
      echo "\n";
    }
  }
}