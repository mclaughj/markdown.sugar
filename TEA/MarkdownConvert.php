#!/usr/bin/php
<?php
require $_ENV['E_SUGARPATH'] . "/TEA/markdown.php";

$input = $_ENV['E_SELECTED_TEXT'];

echo Markdown($input);
?>