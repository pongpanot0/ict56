<?php
session_start();
include("Lib/condb.php");
include_once("Lib/inc.php");
include_once("header.php");
/* include_once("dash.php"); */
include_once("leftmenu.php");


$Node = isset($_GET['Node']) ? $_GET['Node']:"";
include_once(ViewContent($Node));

include_once("footer.php");


?>