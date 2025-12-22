<?php
session_start();
session_unset();//katmsah dakxi li kayn f wast session
session_destroy();//mn ba3d hadi katmsah session

header("location: login.php");
?>
