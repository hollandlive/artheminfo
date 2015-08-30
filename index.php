<?php
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    'Two' => 2,
    'Three' => 3,
    'Four' => 4,
    'Five' => 5,
    'Six' => 6,
    'Seven' => 7,

    
    
    );
$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

shuffle($deck);

$card = array_shift($deck);

echo $card['face'] . ' of ' . $card['suit'];
?>

