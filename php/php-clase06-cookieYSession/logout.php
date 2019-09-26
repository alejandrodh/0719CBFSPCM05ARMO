<?php
session_start();

setcookie("usuario", "", -1);
setcookie("PHPSESSID", "", -1, "/");

session_destroy();
