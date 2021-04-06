

    selectedimage = ""; //images i think?
    coin; //image
    Lose; //this was the losing image now i remember
    Win; //yes this was the win image
    pad; //url
    LoseSound; //sound
    WinSound; //sound
    Button takebutton; //button
    Button restartbutton; //button
    TextField tekstvak; //textarea
    Label label; //a label (wow genius how didn't i think of that one?)
    int aantal = 23; //ammount of coins
    String grabber; //this grabs something i think
    String Errortext = ""; //this text is invisible until an error actually takes place
    String humantext = "This will tell how many coins you took last round"; //explains itself
    String computertext = "This will tell how many coins Wario took last round"; //explains itself
    String winorlose1 = ""; //think this was for if you win?..
    String winorlose2 = ""; //think this was for if you lose?..
    String[] Botchoices; //an array with choices the bot can have
    int converter; //this converts the actual number of coins with the ammount of images needed on screen
    boolean PlayerTurn; //this decides wether or not it's your turn

    public void init() { //oh jesus christ this is allot to convert into phpstorm/js code, welp first lets get rid of the init

        pad = praktijkopdrachth14.class.getResource("/DevelopingFiles/");
        WinSound = getAudioClip(pad, "rotten-day.wav");
        LoseSound = getAudioClip(pad, "i-win.wav");
        coin = getImage(pad, "Coin.png");
        Lose = getImage(pad, "Wario-Wins.png");
        Win = getImage(pad, "Wario-loses.png");
        takebutton = new Button("Take");
        restartbutton = new Button("Restart");
        tekstvak = new TextField();
        label = new Label("Take 1, 2 or 3 coins");
        takebutton.addActionListener(new Subtractionlistener());
        tekstvak.addActionListener(new Subtractionlistener());
        restartbutton.addActionListener(new Resetlistener());
        add(restartbutton);
        add(takebutton);
        add(tekstvak);
        add(label);
        Botchoices = new String[3];
        restartbutton.setBackground(Color.red);
    }
    public void paint(Graphics g) { //oh lord well i figured this was going to be annoying
    //LoseSound.play();
    resize(400,400);
    g.drawString("" + humantext, 105,55);
    g.drawString("" + Errortext, 105,55);
    g.drawString("" + computertext, 105, 70);
    g.drawString("" + winorlose1, 105, 300);
    g.drawString("" + winorlose2, 105, 315);
    g.drawString("The rules are simple: don't be the one that grabs the last coin!", 50,40);
    g.drawString("The total of remaining coins = " + aantal, 105, 85);
    int j = 1;
    int k = 1;
    for ( int i = 1; i <= aantal; i++) {
    k++;
    g.drawImage(coin, (40 * k + 20), (50 * j + 50 ), 40, 50, this);
    if (i % 5 === 0) {
    j++;
    k = 1;
}
}
g.drawImage(selectedimage, 100,100,150,150, this); //surprises me that drawimage is an actual thing in js
}


class Subtractionlistener implements ActionListener { //ah yes actionlisteners... lemme figure out the way to do them in js...

    // De menselijke speler's input
    grabber = tekstvak.getText();
    converter = Integer.parseInt(grabber);
    for (int fakeloop = 0; fakeloop == 0; fakeloop++) {
    PlayerTurn = true;
    if (aantal <= -1){
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
    repaint();
    break(); //well i think break is fixable with a () (no it's not)
}
if (aantal === 0) {
    LoseSound.play();
    selectedimage = Lose;
    winorlose1 = "Wario won better luck next time!";
    winorlose2 = "Press the red restart button to try again!";
    repaint();
    break;
}
System.out.println(aantal); //this shouldn't be hard to fix
// Wario's beurt

PlayerTurn = false;
random = new Random().nextInt(Botchoices.length);
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
    winorlose1 = "Congratulations you won!";
    winorlose2 = "Press the red restart button to play again!";
    repaint();
    break;
} //why are there like 4 }
}
}
}
class Resetlistener /*implements ActionListener*/ { //probably needs an actionlistener idk

    aantal = 23;
    computertext = "";
    humantext = "";
    Errortext = "";
    winorlose1 = "";
    winorlose2 = "";
    selectedimage = null;
    repaint();
    }
