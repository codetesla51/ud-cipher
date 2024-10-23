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

// Define some noise symbols that don't overlap with Morse code
$noiseSymbols = ["⩓", "⚿", "☢", "⛧", "♯", "⩠", "☰"];

// Encrypt function with noise
function encryptText($text, $mapping, $noiseSymbols)
{
  $encrypted = "";
  $noiseFrequency = rand(1, 3); // Add noise every 1 to 3 symbols

  // Loop through each character in the text
  foreach (str_split(strtoupper($text)) as $char) {
    // Check if the character is in the mapping
    if (array_key_exists($char, $mapping)) {
      // Randomly pick one of the Morse symbols
      $symbols = $mapping[$char];
      $encrypted .= $symbols[array_rand($symbols)] . " "; // Pick a random symbol

      // Optionally add noise
      if (rand(1, $noiseFrequency) === 1) {
        $encrypted .= $noiseSymbols[array_rand($noiseSymbols)] . " "; // Add a random noise symbol
      }
    } else {
      $encrypted .= "? "; // Unknown characters
    }
  }

  return trim($encrypted); // Return the encrypted text
}

// Decrypt function that ignores noise
function decryptText($encryptedText, $mapping, $noiseSymbols)
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
      $decrypted .= $reversedMapping[$code]; // Real Morse code symbol
    } elseif (!in_array($code, $noiseSymbols)) {
      $decrypted .= "?"; // Unknown symbol, not noise
    }
    // Ignore noise symbols
  }

  return $decrypted; // Return the decrypted text
}

// Test example
$text = "ab12";
$encryptedText = encryptText($text, $morseCodeMapping, $noiseSymbols);
echo "Encrypted with noise: " . $encryptedText . PHP_EOL;

$decryptedText = decryptText($encryptedText, $morseCodeMapping, $noiseSymbols);
echo "Decrypted: " . $decryptedText . PHP_EOL;

?>
