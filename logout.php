<?
session_start(include "session.php");
session_unset();
session_destroy();

header("location: pagalpanti.php");
exit();
?>