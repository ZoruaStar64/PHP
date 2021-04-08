
   let selectedimage = document.querySelector(".winOrLoseImage")
    selectedimage.innerHTML = "<img style='width: 300px' src='../../IMG/warioGame/Wario.png'>"; //the win/lose image
   let coin = "<img style='width: 50px' src='../../IMG/warioGame/Coin.png'>" //image
   let Lose = "<img style='width: 300px' src='../../IMG/warioGame/Wario-Wins.png'>"; //this was the losing image now i remember
   let Win = "<img style='width: 300px' src='../../IMG/warioGame/Wario-loses.png'>"; //yes this was the win image

   let LoseSound = "<source src='../../SOUNDFILES/i-win.wav'>"; //sound
   let WinSound = "<source src='../../SOUNDFILES/rotten-day.wav'>"; //sound

   let restartbutton = document.querySelector(".restartButton"); //this restarts the game

   let aantal = 23; //ammount of coins

   let grabber = 0; //this grabs something i think

   let converter = ""; //convert de grabber zodat de tekst goed werkt

   let Errortext = document.querySelector(".errorText");
       Errortext.innerHTML = ""; //this text is invisible until an error actually takes place

   let humantext = document.querySelector(".humanText");
       humantext.innerHTML = "This will tell how many coins you took last round"; //explains itself

   let computertext = document.querySelector(".computerText");
       computertext.innerHTML = "This will tell how many coins Wario took last round"; //explains itself

   let winorlose = document.querySelector(".winOrLose");
       winorlose.innerHTML = ""; //changes depending on wether you win or lose

   let totalOfCoins = document.querySelector(".totalOfCoins")
       totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;

   let Botchoices = [3]; //an array with choices the bot can have

    let coins = ""
for ( let i = 1; i <= aantal; i++) {
    coins += coin;
    if (i % 3 === 0) {
        coins = coins + "<br>"
    }
}
document.querySelector(".coins").innerHTML = coins


   let PlayerTurn = true; //this decides wether or not it's your turn

    let takeOne = document.getElementById("takeOne")
    takeOne.addEventListener('click', SubtractionOne);

    let takeTwo = document.getElementById("takeTwo")
    takeTwo.addEventListener('click', SubtractionTwo);

    let takeThree = document.getElementById("takeThree")
    takeThree.addEventListener('click', SubtractionThree);

        restartbutton.addEventListener('click', Resetlistener);

/*
function didYouWinOrlose() {
    coins = "";

    if (aantal <= 0 && !PlayerTurn) {

        WinSound.play();
        selectedimage = Win;
        winorlose.innerHTML = "Congratulations you won! <br> Press the red restart button to play again!";
    }
    else if (aantal <= 0 && PlayerTurn) {

        document.querySelector(".coins").innerHTML = coins
        /!*LoseSound;*!/
        selectedimage = Lose;
        winorlose.innerHTML = "Wario won better luck next time! <br> Press the red restart button to try again!";
    }
}*/

//g.drawImage(selectedimage, 100,100,150,150, this); //surprises me that drawimage is an actual thing in js
function SubtractionOne() {
    grabber = 1;
    Subtractionlistener();
}

function SubtractionTwo() {
    grabber = 2;
    Subtractionlistener();
}

function SubtractionThree() {
    grabber = 3;
    Subtractionlistener();
}

function Subtractionlistener() {
console.log(grabber)
    // De menselijke speler's input
    coins = "";

    for (let fakeloop = 0; fakeloop === 0; fakeloop++) { //think this may be useless idk tho
    PlayerTurn = true;
    if (aantal <= 0) {
    break;
}
if (grabber === 1 || grabber === 2 || grabber === 3) {
    if (aantal === 1) {
        grabber = 1;
    }
    aantal = aantal - grabber;
    humantext.innerHTML = "You took " + grabber + " coin(s)";
    Errortext.innerHTML = "";
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
}

else {
    humantext.innerHTML = "";
    Errortext.innerHTML = "Use the numbers 1, 2 or 3";
    computertext.innerHTML = "";
    break;
}
if (aantal <= 0) {
    coins = "";
    for ( let i = 1; i <= aantal; i++) {
        coins += coin;
        if (i % 3 === 0) {
            coins = coins + "<br>"
        }
    }
    document.querySelector(".coins").innerHTML = coins
    /*LoseSound;*/
    selectedimage.innerHTML = Lose;
    winorlose.innerHTML = "Wario won better luck next time! <br> Press the red restart button to try again!";
    break;
}
console.log(aantal); //this shouldn't be hard to fix
// Wario's beurt

PlayerTurn = false;
let random = Math.floor(Math.random() * (Botchoices.length) + 1);
if (aantal === 1) {
    aantal = aantal - 1;
    computertext.innerHTML = "Wario took 1 coin";
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
    /*didYouWinOrlose();*/
}
else if (aantal === 2 || aantal === 3 || aantal === 4) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 1) + " coin";
    aantal = 1;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (aantal === 6 || aantal === 7 || aantal === 8) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 5) + " coins";
    aantal = 5;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (aantal === 10 || aantal === 11 || aantal === 12) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 9) + " coins";
    aantal = 9;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (aantal === 14 || aantal === 15 || aantal === 16) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 13) + " coins";
    aantal = 13;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (aantal === 18 || aantal === 19 || aantal === 20) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 17) + " coins";
    aantal = 17;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (aantal === 22) {
    computertext.innerHTML = "Wario took " + "" + (aantal - 21) + " coins";
    aantal = 21;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}
else if (!PlayerTurn) {
    aantal = aantal - (random + 1);
    computertext.innerHTML = "Wario took " + "" + (random + 1) + " coin(s)";
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    console.log(aantal);
}

        for ( let i = 1; i <= aantal; i++) {
            coins += coin;
            if (i % 3 === 0) {
                coins = coins + "<br>"
            }
        }
        document.querySelector(".coins").innerHTML = coins

        if (aantal <= 0 && !PlayerTurn) {
            coins = "";
            WinSound.play();
            selectedimage.innerHTML = Win;
            winorlose.innerHTML = "Congratulations you won! <br> Press the red restart button to play again!";
            break;
        }

PlayerTurn = true;
if (aantal < 0) {
    aantal = 0;
    break;
}
}
}

function Resetlistener() {
    coins = "";
    aantal = 23;
    totalOfCoins.innerHTML = "The total of remaining coins = " + aantal;
    for ( let i = 1; i <= aantal; i++) {
        coins += coin;
        if (i % 3 === 0) {
            coins = coins + "<br>"
        }
    }
    document.querySelector(".coins").innerHTML = coins
    computertext.innerHTML = "This will tell how many coins Wario took last round";
    humantext.innerHTML = "This will tell how many coins you took last round";
    Errortext.innerHTML = "";
    winorlose.innerHTML = "";
    selectedimage = "";
}
