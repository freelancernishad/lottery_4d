<?php
session_start();
unset($_SESSION['adminId']);
 echo '<script type="text/javascript">window.location.href="../index.php"</script>';
 ?>