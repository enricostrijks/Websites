<!DOCTYPE html>
<html>

    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1180px)" href="css/tablet.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 350px) and (max-device-width: 640px)" href="css/mobile.css" />
    <script src="js/script.js"></script>
    <head>

    </head>
<body>

<div id="header">
    <ul>
        <li>Contact</a></li>
        <li><a href="over.php">Over</a></li>
        <li><a href="index.php">Home</a></li>
    </ul>
</div><br><br><br><br><br><br><br>
<center><h1>Contact Formulier Enrico Strijks</h1></center><br>
<center>
<form action="send.php" method="POST">
<p>Naam</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Bericht</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Verstuur"><input type="reset" value="Reset">
</form></center>

<div id="opener">
    <img src="./img/wave1.png">
</div>

</body>
</html>