<?php

session.start();
session.unset();
session.destroy();

header("location: ../index.php");
exit();