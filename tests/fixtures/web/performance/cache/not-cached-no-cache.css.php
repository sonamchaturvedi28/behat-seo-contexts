<?php

header('Expires: '. gmdate("D, d M Y H:i:s", time() + 3600).' GMT');
header("Pragma: cache");
header("Cache-Control: no-cache");
?>

body {
    background-color: #fff
}

h1 {
    color: green
}

p {
    color: #000
}