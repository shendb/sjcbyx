<?php
require("db.php");
error_reporting(E_ALL ^ E_NOTICE);

function alertMessage($msg, $url)
{
    echo "<script>alert('{$msg}');</script>";
    echo "<script>window.location='{$url}';</script>";
}
