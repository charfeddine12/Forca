<?php
/**
 * Created by PhpStorm.
 * User: Anouer
 * Date: 09/03/16
 * Time: 17:26
 */ ?>
<link rel="icon" href="images/ficon.ico">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
<noscript>
    <link rel="stylesheet" href="css/skel-noscript.css" />
    <link rel="stylesheet" href="css/style-desktop.css" />
    <link rel="stylesheet" href="css/style.css" />
</noscript>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/stylelog.css">
<link rel="stylesheet" media="screen" href="css/styleins.css" >
<div id="wrapper">

    <div id="main">
        <article id="me" class="panel">
            <div id="container">
                <form name="login"action="php/logincheck.php" method="post">
                    <label for="name">Login:</label>
                    <input type="name" name="username">
                    <label for="username">Mot de passe:</label>
                    <p><a href="php/missedpass.php">Mot de passe oublier?</a>
                        <input type="password" name="password">
                    <div id="lower">
                        <input type="checkbox"><label class="check" for="checkbox">Garder ma session ouverte</label>
                        <input type="submit" value="Connexion">
                    </div>
                </form>
            </div>