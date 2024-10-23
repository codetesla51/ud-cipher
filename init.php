<?php

// Define a mapping for characters to Morse code using difficult-to-read symbols
$morseCodeMapping = [
  "A" => "⌐▄", // Random symbol
  "B" => "∩⊕", // Random symbol
  "C" => "∴∵", // Random symbol
  "D" => "⟆⟆", // Random symbol
  "E" => "√", // Random symbol
  "F" => "∫∏", // Random symbol
  "G" => "◊◊", // Random symbol
  "H" => "∫∫", // Random symbol
  "I" => "⌊⌋", // Random symbol
  "J" => "⦾", // Random symbol
  "K" => "⩵⩵", // Random symbol
  "L" => "∩∩", // Random symbol
  "M" => "⍴", // Random symbol
  "N" => "≡≡", // Random symbol
  "O" => "↵", // Random symbol
  "P" => "∈", // Random symbol
  "Q" => "⌬", // Random symbol
  "R" => "⊙", // Random symbol
  "S" => "≈", // Random symbol
  "T" => "∅", // Random symbol
  "U" => "≮", // Random symbol
  "V" => "≯", // Random symbol
  "W" => "✳", // Random symbol
  "X" => "◻", // Random symbol
  "Y" => "❂", // Random symbol
  "Z" => "∮", // Random symbol
  "0" => "∘", // Random symbol
  "1" => "⌘", // Random symbol
  "2" => "⊛", // Random symbol
  "3" => "⊖", // Random symbol
  "4" => "⌿", // Random symbol
  "5" => "∣", // Random symbol
  "6" => "⚑", // Random symbol
  "7" => "☆", // Random symbol
  "8" => "✪", // Random symbol
  "9" => "❁", // Random symbol
  " " => "/", // Space as separator
  "." => "❖", // Random symbol
  "," => "➞", // Random symbol
  "?" => "✉", // Random symbol
  "!" => "⚠", // Random symbol
];

function encryptText($text, $mapping)
{
  $encrypted = "";

  // Loop through each character in the text
  foreach (str_split(strtoupper($text)) as $char) {
    // Append the Morse code or the equivalent symbol
    if (array_key_exists($char, $mapping)) {
      $encrypted .= $mapping[$char] . " ";
    } else {
      $encrypted .= "? "; // Unknown characters
    }
  }

  return trim($encrypted); // Return the encrypted text
}

function decryptText($encryptedText, $mapping)
{
  $reversedMapping = array_flip($mapping); // Reverse the mapping
  $decrypted = "";

  // Split the encrypted text by spaces (Morse code words are separated by spaces)
  foreach (explode(" ", $encryptedText) as $code) {
    if (isset($reversedMapping[$code])) {
      $decrypted .= $reversedMapping[$code];
    } else {
      $decrypted .= "?"; // Unknown Morse code
    }
  }

  return $decrypted; // Return the decrypted text
}

// Test example
$text = "my na$[]}))-:::me is usman 13495";
$encryptedText = encryptText($text, $morseCodeMapping);
echo "Encrypted: " . $encryptedText . PHP_EOL;

$decryptedText = decryptText($encryptedText, $morseCodeMapping);
echo "Decrypted: " . $decryptedText . PHP_EOL;

?>
