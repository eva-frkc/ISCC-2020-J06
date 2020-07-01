<?php

$str1="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";
$str1caractères = strlen($str1);
echo "<p>La balise <strong>str1</strong> contient {$str1caractères} caractères</p>";

$mots = str_word_count($str1);
echo "<p>La balise <strong>str1</strong> contient {$mots} mots.</p>";

$minuscule = strtolower($str1);
echo "<p>$minuscule</p>";

$majuscule = strtoupper($str1);
echo "<p>$majuscule</p>";

$mélange = str_shuffle($str1);
echo "<p>$mélange</p>";

$remplace = str_replace("la",'LA',$str1);
echo "<p>$remplace</p>";

print_r(str_word_count($str1,2));

$supprime = substr($str1,0,128);
echo "<p>$supprime</p>";

?>
