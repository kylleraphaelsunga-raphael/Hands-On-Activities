<?php
// Basic song info
$title = "Mundo";
$artist = "IV of Spades";
$mood = "Sentimental";

// Arrays of nouns, verbs, adjectives
$nouns = ["<u>salita</u>", "<u>tahanan</u>", "<u>mundo</u>", "<u>sinta</u>", "<u>tala</u>"];
$verbs = ["<b>lumisan</b>", "<b>kumapit</b>", "<b>sumama</b>", "<b>pagmasdan</b>"];
$adjectives = ["<i>maliligaw</i>", "<i>nahihirapan</i>"];

// Song sections
$verse1 = [
    "Sa'n darating ang mga " . $nouns[0] . ",",
    "Na nanggagaling sa aming dalawa?",
    "Kung " . $verbs[0] . " ka, 'wag naman sana,",
    "Ika'y " . $verbs[1] . " na nang hindi makawala."
];

$chorus = [
    "Aking " . $nouns[3] . ",",
    "Ikaw na ang " . $nouns[1] . " at " . $nouns[2] . ".",
    "Sa pagbalik, mananatili na sa piling mo.",
    "Mundo'y magiging ikaw."
];

$verse2 = [
    "'Wag mag-alala kung " . $adjectives[1] . " ka,",
    "Halika na, " . $verbs[2] . " ka,",
    $verbs[3] . " ang mga " . $nouns[4] . "."
];

$verse3 = [
    "Limutin na ang " . $nouns[2],
    "Nang magkasama tayo",
    "Sunod sa bawat galaw",
    "Hindi na " . $adjectives[0]
];

$ending = [
    "Limutin na ang " . $nouns[2],
    "Nang magkasama tayo",
    "Sunod sa bawat galaw",
    "Hindi na " . $adjectives[0],
    $nouns[2] . "'y magiging ikaw"
];

// Numeric variables
$verseExcess = 8;
$verseCount = count($verse1) + count($verse2) + count($verse3) + $verseExcess;

// Type Juggling
$repeatChorus = "4"; // string used as number

// Operators and Expressions
$chorusLines = count($chorus) * $repeatChorus; // type juggling
$lineCount = 12;
$summary = "Total lines: " . $lineCount;

$totalLines = count($verse1) + count($verse2) + count($verse3);
$summary = "Total lines in verses without repeat: " . $totalLines;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mundo Lyrics</title>
    <style>
    body {
        font-family: system-ui, sans-serif;
        background-color: orange;
        color: #222;
        margin: 2rem auto;
        max-width: 700px;
        padding: 0 1rem;
        text-align: center;
    }

    .container {
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    header {
        text-align: center;
        margin-bottom: 2rem;
    }

    header img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 10px 18px black;
    }

    h1, h2, h3, h4 {
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 0.5rem;
    }

    h1 {
        font-size: 2rem;
        border-bottom: 1px solid #ccc;
        padding-bottom: 0.3rem;
    }

    h2 {
        font-size: 1.5rem;
        color: #555;
    }

    h3 {
        font-size: 1.2rem;
        color: #444;
    }

    h4 {
        font-size: 1rem;
        color: #666;
        font-style: italic;
    }

    p {
        margin: 0.4rem 0;
    }

</style>
</head>
<body>
    <div class = "container">
        <header>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfgAYjOc0RHxc0Aocsinlz-L6z8gXk4LHLZw&s" alt="MUNDO">
        </header>

        <h1><?= $title ?></h1>
        <h2>by: <?= $artist ?></h2>
        <h4>Mood of the Song: <?= $mood ?></h4>
        <h4>Nouns: Underline | Verbs: Bold | Adjectives: Italic</h4><br/>

        <h3>Verse 1</h3>
        <p><?= $verse1[0] ?></p>
        <p><?= $verse1[1] ?></p>
        <p><?= $verse1[2] ?></p>
        <p><?= $verse1[3] ?></p><br/>

        <h3>Chorus</h3>
        <p><?= $chorus[0] ?> <?= $chorus[1] ?></p>
        <p><?= $chorus[2] ?></p>
        <p><?= $chorus[3] ?></p><br/>

        <h3>Verse 2</h3>
        <p><?= $verse2[0] ?></p>
        <p><?= $verse2[1] ?></p>
        <p><?= $verse2[2] ?></p><br/>

        <h3>Chorus</h3>
        <p><?= $chorus[0] ?> <?= $chorus[1] ?></p>
        <p><?= $chorus[2] ?></p>
        <p><?= $chorus[3] ?></p><br/>

        <h3>Verse 3</h3>
        <p><?= $verse3[0] ?></p>
        <p><?= $verse3[1] ?></p>
        <p><?= $verse3[2] ?></p><br/>

        <?php
        for ($i = 0; $i < 9; $i++) {
            echo "<p>$verse3[3]</p>";}
        ?><br/>

        <h3>Chorus</h3>
        <p><?= $chorus[0] ?> <?= $chorus[1] ?></p>
        <p>(<?= $chorus[3] ?>)</p>
        <p><?= $chorus[2] ?></p>
        <p>(<?= $chorus[3] ?>)</p><br/>

        <p><?= $chorus[0] ?> (limutin na ang mundo)</p>
        <p><?= $chorus[1] ?> (nang magkasama tayo)</p>
        <p>(<?= $chorus[3] ?>)</p>
        <p><?= $chorus[2] ?></p>
        <p>(sunod sa bawat galaw, hindi na maliligaw)</p>
        <p>(<?= $chorus[3] ?>)</p><br/>

        <h3>Ending</h3>
        <p><?= $ending[0] ?></p>
        <p><?= $ending[1] ?></p>
        <p><?= $ending[2] ?></p>
        <p><?= $ending[3] ?></p>
        <p><?= $ending[4] ?></p><br/>

        <h3>Summary</h3>
        <p>Total Count of Verses (with extra): <?= $verseCount ?></p>
        <p>Total Chorus Lines (repeated <?= $repeatChorus ?>x): <?= $chorusLines ?></p>
        <p><?= $summary ?></p>
    </div>
</body>
</html>