<?php
session_start();
session_unset();
session_destroy();

header("location:login.php?mes=<p class='text-danger fs-5'>You logged out</p>");


?>