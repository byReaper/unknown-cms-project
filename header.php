<?php
    // Datenbankverbindung aufbauen
    $db = mysqli_connect("localhost", "root", "loofti88", "site");
    session_start();
    
?>
<html lang="de-de">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
	<head>
		<title>::</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
                text-decoration: none;
            }
            header {
                width: 100%;
                height: 60px;
                background-color: #222222;
            }
            nav ul  {
                float: right;
                margin-top: 20px;
                margin-right: 60px;
            }
            nav ul li  {
                list-style: none;
                float: left;
                margin-right: 20px;
            }
            nav ul li a {
                color: white;
                font-size: 16px;
            }
            nav ul form  {
                float: left;
            }
            nav ul form input  {
                float: left;
                border: none;
                margin-right: 6px;
                border-radius: 5px;
                height: 22px;
                width: 120px;
                padding-left: 5px;
            }
            nav ul form button {
                float: left;
                border: none;
                margin-right: 20px;
                background-color: white;
                color: black;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                height: 22px;
                width: 90px;
            }
        </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	
	<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="register.php">Registrieren</a></li>
                <?php
                    if (isset($_SESSION['id'])) {
                        echo "<font style='color: white;'>Du bist mit der ID: ".$_SESSION['id']." eingeloggt!</font>";
                        echo "<form action='includes/logout.inc.php'>
                            <button>Ausloggen</button>
                        </form>";
                    } else {
                        echo "<form action='includes/login.inc.php' method='POST'>
                            <input type='text' name='uid' placeholder='Username'>  
                            <input type='password' name='pwd' placeholder='Passwort'>
                            <button type='submit'>Einloggen</button>
                        </form>";
                    }
                    
                ?>
            </ul>
        </nav>    
    </header>