<?php

// Define a mapping for characters to Morse code using symbols
$morseCodeMapping = [
  "A" => ["ꓯⳘⲁ⸝", "𓀢𝓐⸸", "🜛⛩ꚜ⸲", "㆜⚔𖣘🜂"],
  "B" => ["⟟☩𑄹ⴺ", "𝔅𝓑𐋦♘", "⍐⧿🜖𝕭", "✸⚶🜥𐑮"],
  "C" => ["𓍑ℭꚀ⟔", "♕꙰⏆☽", "✥ᚥ⚡⍰", "𖨒Ꝁ⨯⚚"],
  // ... add the rest of the letters and numbers
  "1" => ["⧨⚙♜🜚", "⫹𖣔♖⏉", "⚇𑄙⚟🜃", "♛⚇⏂🜲"],
  "2" => ["⚊🜩⚜⧘", "⫾⚆𖣙⚡", "⚋⧶🜢⚗", "🜚♙⚊⩏"],
  // ... include other digits
];

// Encrypt function
function encryptText($text, $mapping)
{
  $encrypted = "";

  // Loop through each character in the text
  foreach (str_split(strtoupper($text)) as $char) {
    // Check if the character is in the mapping
    if (array_key_exists($char, $mapping)) {
      // Randomly pick one of the symbols
      $symbols = $mapping[$char];
      $encrypted .= $symbols[array_rand($symbols)] . " "; // Pick a random symbol
    } else {
      $encrypted .= "? "; // Unknown characters
    }
  }

  return trim($encrypted); // Return the encrypted text
}

// Decrypt function
function decryptText($encryptedText, $mapping)
{
  $reversedMapping = [];

  // Flatten the mapping so each symbol points back to its original letter
  foreach ($mapping as $char => $symbols) {
    foreach ($symbols as $symbol) {
      $reversedMapping[$symbol] = $char;
    }
  }

  $decrypted = "";

  // Split the encrypted text by spaces
  foreach (explode(" ", $encryptedText) as $code) {
    if (isset($reversedMapping[$code])) {
      $decrypted .= $reversedMapping[$code];
    } else {
      $decrypted .= "?"; // Unknown symbol
    }
  }

  return $decrypted; // Return the decrypted text
}

// Test example
$text = "ab12";
$encryptedText = encryptText($text, $morseCodeMapping);
echo "Encrypted: " . $encryptedText . PHP_EOL;

$decryptedText = decryptText($encryptedText, $morseCodeMapping);
echo "Decrypted: " . $decryptedText . PHP_EOL;

?>
