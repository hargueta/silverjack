<?php

$player1 = array();
$player2 = array();
$player3 = array();
$player4 = array();
$players = array("blossom", "bubbles", "buttercup", "mojojojo");
$playersSize = count($players);

$p1sum = 0;
$p2sum = 0;
$p3sum = 0;
$p4sum = 0;





function displayHand()
{
   //Displays the array of cards per player along with the sum of points



    
    //OUTPUT FOR PLAYER 1
    $randomIndex = rand(1,$playersSize); //GET RANDOM INDEX VALUE TO SELECT PLAYER FROM ARRAY OF PLAYERS
    
    $randomPlayer = $players[$randomIndex]; //PLAYER AT INDEX VALUE IS SELECTED
    
    
    echo "<img src = players/$randomPlayer.png>"; //OUTPUT IMAGE OF SELECTED PLAYER


    array_pop($players($randomPlayer)); //POP USED PLAYER SO NOT TO BE CHOSEN AGAIN
    
    $playerSize--; //DECREMENT SIZE OF ARRAY SINCE AN ELEMENT HAS BEEN POPPED


    print_r($player1); //OUTPUT PLAYER 1'S DECK
    echo(" " + p1sum); //OUTPUT THEIR SUM
    
    echo "<br/>";
    
    
    //OUTPUT FOR PLAYER 2
    
    $randomIndex = rand(1,$playersSize);
    
    $randomPlayer = $players[$randomIndex];
    
    
    echo "<img src = players/$randomPlayer.png>";
    
    array_pop($players($randomPlayer));
    
    $playerSize--;
    
    
    print_r($player2);
    echo(" " + p2sum);
    
    echo "<br/>";
    
    
    //OUTPUT FOR PLAYER 3
    
    $randomIndex = rand(1,$playersSize);
    
    $randomPlayer = $players[$randomIndex];
    
    
    echo "<img src = players/$randomPlayer.png>";
    
    
     array_pop($players($randomPlayer));
    
    $playerSize--;
    
    print_r($player3);
    echo(" " + p3sum);
    
    echo "<br/>";
    
    
    
    //OUTPUT FOR PLAYER 4
    
    $randomIndex = rand(1,$playersSize);
    
    $randomPlayer = $players[$randomIndex];
    
    
    echo "<img src = players/$randomPlayer.png>";
    
    
    array_pop($players($randomPlayer));
    
    $playerSize--;
    
    
    print_r($player4);
    echo(" " + p4sum);
    
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <h1>SilverJack</h1>
        <hr />
        <footer>
            <img src="cards/cards.png" alt="cards" width="200px" />
        </footer>
        <main>
            
        </main>
    </body>
</html>