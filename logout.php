<?php 
include("Lib/condb.php");
include_once("Lib/inc.php");

session_destroy();
echo '<meta http-equiv="refresh" content="0;url=index.php?Node=frm_login">';
exit();
?>