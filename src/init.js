class SymbolMapper {
    constructor(mapping) {
        this.mapping = mapping;
    }

    getSymbolsForChar(char) {
        return this.mapping[char] || null;
    }

    getReversedMapping() {
        const reversedMapping = {};
        for (const char in this.mapping) {
            this.mapping[char].forEach(symbol => {
                reversedMapping[symbol] = char;
            });
        }
        return reversedMapping;
    }
}

class NoiseGenerator {
    constructor(noiseSymbols) {
        this.noiseSymbols = noiseSymbols;
    }

    addNoise() {
        const randomIndex = Math.floor(
            Math.random() * this.noiseSymbols.length
        );
        return this.noiseSymbols[randomIndex];
    }

    isNoise(symbol) {
        return this.noiseSymbols.includes(symbol);
    }
}

class UDC {
    constructor(symbolMapper, noiseGenerator) {
        this.symbolMapper = symbolMapper;
        this.noiseGenerator = noiseGenerator;
    }

    encryptText(text) {
        let encrypted = "";
        const noiseFrequency = Math.floor(Math.random() * 3) + 1;

        text.toUpperCase()
            .split("")
            .forEach(char => {
                const symbols = this.symbolMapper.getSymbolsForChar(char);

                if (symbols) {
                    encrypted +=
                        symbols[Math.floor(Math.random() * symbols.length)] +
                        " ";
                    if (Math.floor(Math.random() * noiseFrequency) === 1) {
                        encrypted += this.noiseGenerator.addNoise() + " ";
                    }
                } else {
                    encrypted += "? ";
                }
            });

        return encrypted.trim();
    }

    decryptText(encryptedText) {
        const reversedMapping = this.symbolMapper.getReversedMapping();
        let decrypted = "";

        encryptedText.split(" ").forEach(code => {
            if (reversedMapping[code]) {
                decrypted += reversedMapping[code];
            } else if (!this.noiseGenerator.isNoise(code)) {
                decrypted += "?";
            }
        });

        return decrypted;
    }

    output(text, addNewLine = true) {
        console.log(text);
        if (addNewLine) {
            console.log("\n");
        }
    }
}

// Example usage:
const symbolMapping = {
    A: ["𑁄𑀲𓋆𑁼", "𑀦𑌶𑁛𐬌", "𑁋𓁋𑀐𓅐", "𓂇𓅕𐬛𐬰"],
    B: ["𑁭𑌦𓈉𑁜", "𐬓𑁒𓍯𓀍", "𓈉𐬯𑁠𑅕", "𑁷𓋣𑌨𓌪"],
    C: ["𓏭𓄿𐬀𑌳", "𐬢𑁦𓇽𓂷", "𑀘𐬢𑁈𑁠", "𓍗𑁖𓈏𐬮"],
    D: ["𑁉𑌕𓍣𑀪", "𓅯𐬎𑌒𐍈", "𐬴𐬙𓍋𓈚", "𑀦𓍋𐬏𐬳"],
    E: ["𐬉𑁇𓉌𐌅", "𓂋𑅕𑀜𐬋", "𓄭𑌶𓆕𐬇", "𑁊𑅛𑀒𐦗"],
    F: ["𓆶𑍗𓈅𑀸", "𑀮𑌽𓇽𐬓", "𐬗𑀓𐌈𑀧", "𑍇𐬅𓄖𐬺"],
    G: ["𐬤𓌱𑀲𑌋", "𑌖𑀡𓋦𓇻", "𑁢𑍞𑀐𓊍", "𐍈𓁗𑁝𐬅"],
    H: ["𑁠𐬨𓊨𓍖", "𐬝𑌂𑍊𐦘", "𐬙𐬦𐌁𓋚", "𐭁𑉅𐬠𓏉"],
    I: ["𓃉𐬚𑀢𑍍", "𐍁𐬚𓉖𐬎", "𑁏𓀂𑀔𐮷", "𓆀𐬸𐬰𐦅"],
    J: ["𑅙𑀁𐬚𑁳", "𓍜𑁐𓋗𐬓", "𐬏𐬲𑀱𓏁", "𓏱𑈃𐬡𐬱"],
    K: ["𑌅𑅒𓅔𐬉", "𐬌𐍈𐌷𑀙", "𑉊𑍟𐌞𐭠", "𓋦𑌶𐬮𑅑"],
    L: ["𑀤𑌼𑍑𓅜", "𐬞𐬰𑀅𓋎", "𑀔𐬗𓋤𑁶", "𑀼𐬊𑌆𓉎"],
    M: ["𐬥𓏗𓆢𑁮", "𑀡𐬣𐬪𓆤", "𐌌𐍊𑁯𐬔", "𑌭𑄌𐬟𑅕"],
    N: ["𑄝𑅌𐬩𐌳", "𓅋𐩁𓉞𐌔", "𐬔𑅣𑁣𓈚", "𑀯𑅍𑀦𓅗"],
    O: ["𑌕𐬄𓄝𑄋", "𐬴𓈃𑌭𓇈", "𑀷𐬟𐦒𐌶", "𑄧𑀌𓌵𑁈"],
    P: ["𐬋𐬵𑅃𐬥", "𑍔𓅭𑌈𑇠", "𐌍𑀡𐍂𓄇", "𐦠𓍗𑌦𐍂"],
    Q: ["𑀯𐌗𓅱𑁚", "𓌏𐩕𑀬𐏃", "𑍅𐌙𓀦𑍞", "𑁞𐌒𓍖𑁣"],
    R: ["𓌔𑌞𐌌𓍏", "𑍛𑀖𑌷𐬘", "𐬪𐌋𑌧𓏧", "𑌃𑌕𐬉𑌢"],
    S: ["𐬴𓏦𑀚𓋉", "𑍇𐌱𐍗𓉔", "𐬚𐬦𑁹𐩘", "𑀣𐩗𐬒𑈪"],
    T: ["𑌌𑀭𓄐𓌒", "𐌴𐬮𑌆𓇉", "𐌅𑀵𐬬𐌍", "𐬘𐬄𓈖𐬳"],
    U: ["𑌕𐌈𓁔𓈌", "𐬯𐌦𑀩𑇤", "𑍄𐬦𑀊𑌌", "𓍟𐬉𐩏𓉏"],
    V: ["𑍞𐌄𓈝𓊖", "𓈚𑌔𐬟𐬩", "𐌑𑌤𓊖𐩚", "𐍙𐬌𑀬𑇩"],
    W: ["𑌭𐬰𑉄𓏱", "𑌰𑀖𑌉𐬟", "𐌆𐌡𓈎𐨣", "𐌀𐌈𐬅𑁮"],
    X: ["𑁇𐬳𓂸𐬓", "𑌬𐌊𓉇𐌷", "𓊔𑌒𓋑𑌷", "𓎱𐬥𐦣𑇸"],
    Y: ["𑀨𑍖𑀃𑀝", "𑄟𐬳𐬦𑌦", "𑍇𐌄𑁣𐩞", "𓆥𑄎𐌒𓃨"],
    Z: ["𑉖𐬀𐍢𐬞", "𑀊𑌗𐌌𐬠", "𐩉𓇃𐌇𑁮", "𑀲𑀌𓌘"],
    0: ["𑍅𓂂𓁱𒊹", "𓅠𑁦𓉅𒄭", "𓉛𑉧𑁫𒄖", "𓁘𑁹𑅴𓂢"],
    1: ["𒅑𐬋𒆙𑁅", "𓁇𑁒𓏇𓄜", "𐬗𒉾𑁡𑌄", "𑉏𑅒𑅝𓆘"],
    2: ["𓊉𓁆𓅇𓁑", "𐬖𑁸𑀢𐬶", "𓀖𑀞𑌵𑁘", "𑌢𓆡𐬋𓁓"],
    3: ["𐬰𑅲𓅤𓋂", "𓋌𑁾𑁧𐍯", "𓅱𑁹𓋉𓁆", "𐬟𓁂𐬞𑌢"],
    4: ["𑁨𓁉𑁻𓊲", "𐬱𑀁𑌠𐬣", "𓁧𓋎𑌄𑀂", "𓀲𑁼𑁕𓊇"],
    5: ["𓊇𑁶𓋜𐬄", "𐬜𑁽𐬟𑁇", "𓅋𐬗𓁔𑌇", "𓅦𑌡𐬋𑁦"],
    6: ["♗⚠🜛⧻", "⚁⧼♖𐇭", "♛⚘⫧⚵", "⧟🜤⚙♝"],
    7: ["⚒♛⚿⫸", "⏂⚰𖧆♜", "⧢⚡𑄢⚇", "🜌⚟♕⚛"],
    8: ["𑍅𓂂𓁱𒊹", "𓅠𑁦𓉅𒄭", "𓉛𑉧𑁫𒄖", "𓁘𑁹𑅴𓂢"],
    9: ["𒅑𐬋𒆙𑁅", "𓁇𑁒𓏇𓄜", "𐬗𒉾𑁡𑌄", "𑉏𑅒𑅝𓆘"],
    ":": ["𓊉𓁆𓅇𓁑", "𐬖𑁸𑀢𐬶", "𓀖𑀞𑌵𑁘", "𑌢𓆡𐬋𓁓"],
    ";": ["𐬰𑅲𓅤𓋂", "𓋌𑁾𑁧𐍯", "𓅱𑁹𓋉𓁆", "𐬟𓁂𐬞𑌢"],
    "[": ["𑁨𓁉𑁻𓊲", "𐬱𑀁𑌠𐬣", "𓁧𓋎𑌄𑀂", "𓀲𑁼𑁕𓊇"],
    "]": ["𓊇𑁶𓋜𐬄", "𐬜𑁽𐬟𑁇", "𓅋𐬗𓁔𑌇", "𓅦𑌡𐬋𑁦"],
    " ": ["𓁄𓀲𓋆𑁼", "𑀦𑌶𑁛𐬌", "𑁋𓁋𑀐𓅐", "𓂇𓅕𐬛𐬰"],
    "-": ["𓁶𑁒𓂧𓋅", "𐬎𑌵𐬙𑁎", "𑁉𑁤𑁖𑌁", "𓋆𓁾𐬢𐬎"],
    ",": ["𑅭𐬏𐬀𓁂", "𓋃𑌶𑁭𑁓", "𑁪𐬧𑁝𓅜", "𓊖𑌕𓅱𑌶"],
    ".": ["𑀞𐬍𑁑𓋉", "𐬦𑁼𑀌𓅛", "𓋂𑁴𑁙𓋊", "𑁰𑁏𓋅𑌛"],
    "!": ["𑁽𐬀𑌱𐬨", "𓋍𑁁𑀎𑀥", "𓊃𑁗𑌢𓅞", "𐬎𑁌𓁄𓋉"],
    "?": ["𑌳𓅙𐬄𑌠", "𐬄𓋑𐬀𓂌", "𓊘𑁮𓋃𑀽", "𑁰𑅬𑁶𓋂"]
};

const noiseSymbols = [
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
    "⚽"
];
const symbolMapper = new SymbolMapper(symbolMapping);
const noiseGenerator = new NoiseGenerator(noiseSymbols);
const textEncryptor = new UDC(symbolMapper, noiseGenerator);

const encrypted = textEncryptor.encryptText("ABC");
textEncryptor.output("Encrypted text: " + encrypted);

const decrypted = textEncryptor.decryptText(encrypted);
textEncryptor.output("Decrypted text: " + decrypted);
