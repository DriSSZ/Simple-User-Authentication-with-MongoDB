<?php
ob_start();
error_reporting(E_ALL);
try
{
  $m    = new Mongo();
  $db   = $m->emu;
  $coll = $db->users;
}
catch (MongoConnectionException $e)
{
  die('Error connecting to MongoDB');
} 
catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
include_once("functions.php");
session_start();
session_register("login");
session_register("password");
session_register("loggedIn");
?>
<?//var_dump($_SESSION);var_dump($_POST);?>
