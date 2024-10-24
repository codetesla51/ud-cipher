<h2 style="color:#008afa"> UD-Cipher</h2>
![MIT License](https://img.shields.io/badge/License-MIT-green.svg)
![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)

**UD-Cipher** is a lightweight PHP and JavaScript library for encoding and decoding text using customizable symbol mappings, noise symbols, and a Caesar cipher variant. This mini encoding library provides an easy way to obfuscate text, making it suitable for various applications where text privacy is a concern. The encoding utilizes ancient symbols such as:

𐭁𑉅𐬠𓏉, 𓂋𑅕𑀜𐬋, 𐬞𐬰𑀅𓋎, ☨, 𑀤𑌼𑍑𓅜, 𐬴𓈃𑌭𓇈, 𓁄𓀲𓋆𑁼, ⚰, 𐌀𐌈𐬅𑁮, 𑄧𑀌𓌵𑁈, ✬, 𓌔𑌞𐌌𓍏, ♖, 𑀼𐬊𑌆𓉎, ⨟, 𐬴𐬙𓍋𓈚
## Features
- **Simple Text Encoding and Decoding**: Easily encode and decode text strings.
- **Customizable Symbol Mappings**: Define your own mappings for characters to symbols.
- **Random Noise Symbols**: Introduce random noise during encoding for increased complexity.
- **Easy to Use and Lightweight**: A straightforward implementation suitable for small projects.

## Note
This library should not and cannot be used for production encoding or large-scale applications. For large-scale use, consider modern encryption algorithms like **AES-256** or **Argon2**.

## Installation

### Prerequisites
- **PHP 7.4+**

### Step-by-step Guide

1. **Clone the Repository**

   ```bash
   git clone https://github.com/codetesla51/ud-cipher.git
   cd ud-cipher
   ```
   
2. **Open VSCode or Your Preferred Editor/IDE**
**Using the PHP Version**
Include the UD-Cipher Library

In your PHP file, include the library and use the necessary classes:
```bash
php
Copy code
require "src/init.php";
use UDC\SymbolMapper;
use UDC\NoiseGenerator;
use UDC\UDC
```
3. **Instantiate the Classes**

Call the UD-Cipher methods for encoding:
```bash
php
Copy code
$symbolMapper = new SymbolMapper($mappings);
$noiseGenerator = new NoiseGenerator($noiseSymbols);
$encryptor = new UDC($symbolMapper, $noiseGenerator);
```
4.**Handle Encoding and Decoding in Your Application**

Here’s an example of how to process text input:
```bash
php
Copy code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"]; // User input from the form

    // Encode the input text
    $encryptedText = $encryptor->encryptText($text);
    echo "Encrypted Text: " . $encryptedText;

    // Decode the encrypted text
    $decryptedText = $encryptor->decryptText($encryptedText);
    echo "Decrypted Text: " . $decryptedText;
}
```
**Example**
For a simple HTML form to input text, you could use:
```bash
html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD-Cipher Example</title>
</head>
<body>
    <h1>Text Encoder/Decoder</h1>
    <form method="POST">
        <label for="text">Enter Text:</label>
        <input type="text" id="text" name="text" required>
        <input type="submit" value="Encode/Decode">
    </form>
</body>
</html>
```
**Project Explanation**
UD-Cipher provides a simple interface to encode and decode text. The library uses a mapping of characters to symbols, which can be customized according to your needs. During encoding, random noise symbols can be added to increase the complexity of the encoded text.

This library is great for small projects or learning purposes, but it’s important to remember that it should not be used for sensitive data in production environments due to its simplicity and potential vulnerabilities compared to modern encryption methods.

License
This project is licensed under the MIT License. See the LICENSE file for more
details.