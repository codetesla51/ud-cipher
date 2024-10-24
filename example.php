<?php

require "src/init.php";
use UDC\SymbolMapper;
use UDC\NoiseGenerator;
use UDC\TextEncryptor;
// Define mappings and noise symbols
// Initialize the encryption components
$symbolMapper = new SymbolMapper($mappings);
$noiseGenerator = new NoiseGenerator($noiseSymbols);
$encryptor = new TextEncryptor($symbolMapper, $noiseGenerator);

// Test text
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $_POST["text"];
  $action = $_POST["action"];

  $encryptedText = $encryptor->encryptText($text);
  echo "Encrypted Text: " . $encryptedText;

  $decryptedText = $encryptor->decryptText($encryptedText);
  echo "Decrypted Text: " . $decryptedText;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryptor</title>
</head>
<body>
    <h1>Text Encryptor and Decryptor</h1>

    <form method="POST">
        <label for="text">Enter Text:</label>
        <input type="text" id="text" name="text" required>
        <br>
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
