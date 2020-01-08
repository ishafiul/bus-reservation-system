<?php
include 'include/dbcon.inc.php';
session_start();
?>
<?php echo $_SESSION['name']; ?>
<h1><a href="index.php?logout='1'" name="logout" class="nav-link ">logout</a></h1>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: index.php");
}
?>
