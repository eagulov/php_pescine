<?php
session_start();
if ($_SESSION[player] === 'player1')
	$_SESSION[player] = 'player2';
else
	$_SESSION[player] = 'player1';
echo "<center><h1>C'est a $_SESSION[player] de jouer</h1></center>";
require "Classes/Vessel.class.php";
require "Classes/Player.class.php";
require "Classes/Game.class.php";
require "Classes/Map.class.php";
if (!$_SESSION[player2X])
{
  $_SESSION[player2X] = 19;
  $_SESSION[player2Y] = 19;
}
$map = new Map(array('x' => 20, 'y' => 20));
$map->showMap();

 ?>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/format.css">
 </head>
 <body>
 </br>
 </br>
   <center><div class=button>
 	<a href=move.php?dir=Up><button>UP</button></a>
 	<a href=move.php?dir=Down><button>Down</button></a>
</br>
 	<a href=move.php?dir=Left><button>Left</button></a>
 	<a href=move.php?dir=Right><button>Right</button></a>
</br>
  <a href=restart.php><button>Restart</button></a>
</div></center>
 </body>
