<?php
include "auth.php";

logout();

header("Location: log in.php");
exit;
?>