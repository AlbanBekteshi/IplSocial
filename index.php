<?php
# Prise du temps actuel au début du script
$time_start = microtime(true);

# Variables globales du site
define('CHEMIN_VUES','views/');

$date = date("j/m/Y");





# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
# Quelle action est demandée ?
switch($action) {

    default: # Par défaut, le contrôleur de l'accueil est sélectionné
        require_once('controllers/MailController.php');
        $controller = new MailController();
        break;
}
# Exécution du contrôleur correspondant à l'action demandée
$controller->run();



?>