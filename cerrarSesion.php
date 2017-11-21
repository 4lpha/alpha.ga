<?php
/**
 * Created by PhpStorm.
 * User: stark
 * Date: 5/11/17
 * Time: 04:31 AM
 */

session_start();
error_reporting(0);

if($_SESSION["user"] == null || $_SESSION["user"] == ""){
    echo "no";
    die();
}

session_destroy();
header("location:index.html");