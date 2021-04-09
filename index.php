<?php

$str = "Alooo burda ne oluyor acaba?";

$patternNotionOne = "/o+/";

echo preg_match($patternNotionOne,$str).'<br>';

echo preg_replace($patternNotionOne,"sd",$str).'<br>';