<?php

session_start();

session_destroy();

header("Location:registerFrom.php");
exit();

