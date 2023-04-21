
<?php 


if (!isset($_SESSION)) {
  session_start();
}
require dirname(__FILE__) . "/app/controllers/config.php";
require RACINE . "/controllers/routage.php";

require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_GET["action"])) {
	$action = $_GET["action"];
} else {
	$action = "default";
}

$fichier = redirigeVers($action);
require RACINE . "/controllers/" . $fichier;

?>

