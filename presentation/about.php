<?php 
    ob_start();
?>



<?php
$contenu_page = ob_get_clean();
require_once('layout.php');
?>
