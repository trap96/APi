<?php
ob_start();
?>
<h1>Bienvenue sur un site qui liste les formations H2PROG</h1>
<?php
$content = ob_get_clean();
require_once("template.php");