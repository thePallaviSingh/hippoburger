<?php
session_start();
?>
<p>
echo "welcome" <?php echo $_SESSION['username'];?>
</p>
