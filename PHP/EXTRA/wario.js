

   let selectedimage = ""; //images i think?
   let coin = "../../IMG/warioGame/Coin.png"; //image
   let Lose = "../../IMG/warioGame/Wario-wins.png"; //this was the losing image now i remember
   let Win = "../../IMG/warioGame/Wario-loses.png"; //yes this was the win image
   let LoseSound = "../../SOUNDFILES/rotten-day.wav"; //sound
   let WinSound = "../../SOUNDFILES/rotten-day.wav"; //sound
   let takebutton = document.querySelector(".takeButton"); //this takes coins
   let restartbutton = document.querySelector(".restartButton"); //this restarts the game
   let tekstvak = new TextField(); //textarea
   let aantal = 23; //ammount of coins
   let grabber; //this grabs something i think
   let Errortext = ""; //this text is invisible until an error actually takes place
   let humantext = "This will tell how many coins you took last round"; //explains itself
   let computertext = "This will tell how many coins Wario took last round"; //explains itself
   let winorlose = ""; //think this was for if you win?..
   let Botchoices = [3]; //an array with choices the bot can have
   let converter; //this converts the actual number of coins with the ammount of images needed on screen
   let PlayerTurn = true; //this decides wether or not it's your turn

        takebutton.addEventListener("click", Subtractionlistener);
        tekstvak.addEventListener(Subtractionlistener);
        restartbutton.addEventListener("click", Resetlistener);

        add(tekstvak);

        //Botchoices = new String[3]; (not sure if this is needed)
        restartbutton.style.color = "red"; //this has a red color

    public void paint(Graphics g) { //alright just gotta check my js work to see how i connect things from html to js
    //LoseSound.play();
    g.drawString("" + humantext, 105,55);
    g.drawString("" + Errortext, 105,55);
    g.drawString("" + computertext, 105, 70);
    g.drawString("" + winorlose, 105, 300);
    g.drawString("The rules are simple: don't be the one that grabs the last coin!", 50,40);
    g.drawString("The total of remaining coins = " + aantal, 105, 85);
    let j = 1;
    let k = 1;
    for ( let i = 1; i <= aantal; i++) {
    k++;
    g.drawImage(coin, (40 * k + 20), (50 * j + 50 ), 40, 50, this);
    if (i % 5 === 0) {
    j++;
    k = 1;
    }
}
g.drawImage(selectedimage, 100,100,150,150, this); //surprises me that drawimage is an actual thing in js
}


function Subtractionlistener() { //ah yes actionlisteners... lemme figure out the way to do them in js...

    // De menselijke speler's input
    grabber = tekstvak;
    converter = parseInt(grabber);
    for (let fakeloop = 0; fakeloop === 0; fakeloop++) { //think this may be useless idk tho
    PlayerTurn = true;
    if (aantal <= 0) {
    break;
}
if (converter === 1 || converter === 2 || converter === 3) {
    if (aantal === 1) {
        converter = 1;
    }
    aantal = aantal - converter;
    humantext = "You took " + converter + " coin(s)";
    Errortext = "";
    tekstvak = "";
}

else {
    humantext = "";
    Errortext = "Use the numbers 1, 2 or 3";
    computertext = "";
    break; //well i think break is fixable with a () (no it's not)
}
if (aantal === 0) {
    LoseSound.play();
    selectedimage = Lose;
    winorlose = "Wario won better luck next time! <br> Press the red restart button to try again!";
    break;
}
System.out.println(aantal); //this shouldn't be hard to fix
// Wario's beurt

PlayerTurn = false;
let random = Math.floor(Math.random() * (Botchoices.length) + 1);
if (aantal === 1) {
    aantal = aantal - 1;
    computertext = "Wario took 1 coin";
    System.out.println(aantal);
}
else if (aantal === 2 || aantal === 3 || aantal === 4) {
    computertext = "Wario took " + "" + (aantal - 1) + " coin";
    aantal = 1;
    System.out.println(aantal);
}
else if (aantal === 6 || aantal === 7 || aantal === 8) {
    computertext = "Wario took " + "" + (aantal - 5) + " coins";
    aantal = 5;
    System.out.println(aantal);
}
else if (aantal === 10 || aantal === 11 || aantal === 12) {
    computertext = "Wario took " + "" + (aantal - 9) + " coins";
    aantal = 9;
    System.out.println(aantal);
}
else if (aantal === 14 || aantal === 15 || aantal === 16) {
    computertext = "Wario took " + "" + (aantal - 13) + " coins";
    aantal = 13;
    System.out.println(aantal);
}
else if (aantal === 18 || aantal === 19 || aantal === 20) {
    computertext = "Wario took " + "" + (aantal - 17) + " coins";
    aantal = 17;
    System.out.println(aantal);
}
else if (aantal === 22) {
    computertext = "Wario took " + "" + (aantal - 21) + " coins";
    aantal = 21;
    System.out.println(aantal);
}
else if (!PlayerTurn) {
    aantal = aantal - (random + 1);
    computertext = "Wario took " + "" + (random + 1) + " coin(s)";
    System.out.println(aantal);
}

PlayerTurn = true;
if (aantal < 0) {
    aantal = 0;
    break;
}
repaint(); //i think repaint() isn't needed?.. i'll have to look at my JS work quickly

if (aantal === 0 && PlayerTurn) {
    WinSound.play();
    selectedimage = Win;
    winorlose = "Congratulations you won! <br> Press the red restart button to play again!";
    break;
}
}
}

function Resetlistener() { //probably needs an actionlistener idk

    aantal = 23;
    computertext = "";
    humantext = "";
    Errortext = "";
    winorlose = "";
    selectedimage = null;
}
