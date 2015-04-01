<?php
header("Content-disposition: attachment; filename=index.php");
header("Content-type: php");
readfile("index.php");
