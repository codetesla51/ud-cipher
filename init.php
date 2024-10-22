<?php
$originalLatters = range("A", "Z");
$encrytpionArray = [
    ["A12", "A34", "AXZ", "A99"], // 'A'
    ["B56", "BY7", "B8A", "B45"], // 'B'
    ["C23", "C12", "C56", "C78"], // 'C'
    ["D34", "D99", "DX2", "D12"], // 'D'
    ["E12", "E89", "EX4", "E67"], // 'E'
    ["F34", "F78", "F23", "F56"], // 'F'
    ["G45", "G12", "G78", "GX9"], // 'G'
    ["H12", "H23", "H67", "H89"], // 'H'
    ["I34", "I99", "I12", "I56"], // 'I'
    ["J45", "J67", "J12", "J89"], // 'J'
    ["K23", "K45", "K12", "K78"], // 'K'
    ["L34", "L56", "L78", "L12"], // 'L'
    ["M12", "M99", "MX4", "M45"], // 'M'
    ["N34", "N56", "N78", "N12"], // 'N'
    ["O23", "O89", "OX9", "O12"], // 'O'
    ["P45", "P67", "P12", "P99"], // 'P'
    ["Q12", "Q34", "Q56", "Q78"], // 'Q'
    ["R99", "R45", "RX4", "R67"], // 'R'
    ["S34", "S78", "S23", "S12"], // 'S'
    ["T12", "T56", "TX9", "T99"], // 'T'
    ["U45", "U12", "U78", "U34"], // 'U'
    ["V99", "V56", "VX2", "V67"], // 'V'
    ["W12", "W78", "W34", "W45"], // 'W'
    ["X23", "X67", "X12", "X99"], // 'X'
    ["Y34", "Y45", "Y78", "Y12"], // 'Y'
    ["Z99", "Z23", "Z56", "Z12"], // 'Z'
];

$round_length = 30;

function encryptText($text, $originalLatters, $encrytpionArray, $round_length)
{
    $text = strtoupper($text);
    $encrypted = "";

    // Loop through characters in the text
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i]; // Get the current character
        $index = array_search($char, $originalLatters); // Find its index in the alphabet array

        if ($index !== false) {
            // Replace with a random encrypted version
            $text_encrypted = $encrytpionArray[$index][array_rand($encrytpionArray[$index])];
            $rounds = str_repeat(chr(rand(65, 90)) . rand(0, 9), rand(1, 5)); // Generate random rounds
            $encrypted .= $text_encrypted . $rounds; // Append encrypted text with random rounds
        } else {
            // If character is not a letter (space, number, etc.), just append it
            $encrypted .= $char;
        }
    }

    // Ensure the encrypted text has the minimum length
    while (strlen(trim($encrypted)) < $round_length) {
        $encrypted .= chr(rand(65, 90)) . rand(0, 9) . " "; // Append random alphanumeric characters
    }

    return trim($encrypted); // Trim and return the final encrypted text
}

$text = "Hello";
$actualEncryptedText = encryptText($text, $originalLatters, $encrytpionArray, $round_length);
echo $actualEncryptedText;
