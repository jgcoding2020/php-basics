<?php

/*
   PHP includes files using include and require statements.
   include and include_once are used for non-critical inclusions.
   require and require_once are used for critical inclusions.
*/

// Include
echo "Using include:<br>";
include("included.php");

// Include Once
echo "<br>Using include_once:<br>";
include_once("included.php"); // This won't include again

// Require
echo "<br>Using require:<br>";
require("required.php");

// Require Once
echo "<br>Using require_once:<br>";
require_once("required.php"); // This won't require again

// Demonstrate after inclusion
echo "<br>This code is executed after including files.<br>";

?>
