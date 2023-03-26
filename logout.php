<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['type']);
 echo '<script type="text/javascript">window.location.href="index.php"</script>';
 ?>