<?php
session_start();

session_destroy();

header("Location: 3D Form.html");
exit();
?>