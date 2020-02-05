<?php
session_start();
$_SESSION['nama'] = null;
session_unset();
session_destroy();
?>