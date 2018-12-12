<!DOCTYPE html>

<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=mineserv', 'root', '');


?>

<html lang="fr">   
<head>
    
    <meta charset="utf-8">
    <title>Serveurs Minecraft Gratuit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script type="text/javascript">
        //<!--
                function ffalse()
                {
                        return false;
                }
                function ftrue()
                {
                        return true;
                }
                document.onselectstart = new Function ("return false");
                if(window.sidebar)
                {
                        document.onmousedown = ffalse;
                        document.onclick = ftrue;
                }
        //-->
        </script>
        <script type="text/javascript">
            document.getElementById("navbarbutton").style.width = "300px";
        </script>

</head>
<body>
    <script type="text/javascript">
        function showDiv() {
            if (document.getElementById("navbarbutton").style.width == "5vw") {
            
                document.getElementById("navbarbutton").style.width = "10vw";
            }
            else {
                document.getElementById("navbarbutton").style.width = "5vw";
            }
    </script>

    <header>
    
    </header>
    <div id="centre">
        <nav id="navbarbutton">
        <input type="button" onclick="showDiv()">
        </nav>
        <div id="main">
        lol
        </div>
        <p id="demo">lol</p>
    </div>
</body>

</html>