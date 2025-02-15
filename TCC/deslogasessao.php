<?php
require("sessao.php");
session_destroy();
header("Location: index.html");
?>