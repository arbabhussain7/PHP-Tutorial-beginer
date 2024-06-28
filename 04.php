<?php


echo" Now We explain String Function  <br><br>";


$name = "Arbab Hussain ";
echo $name;
echo "<br>";

echo strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strpos($name , "Hussain");
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_replace("Hussain","Ahmed",$name);
echo "<br>";
echo str_repeat($name,5);

