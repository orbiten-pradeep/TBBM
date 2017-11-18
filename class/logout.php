<?php
session_start();

// if (!isset($_SESSION['userSession'])) {
//  header("Location: ../index.php");
// } else if (isset($_SESSION['userSession'])!="") {
//  header("Location: ../profile.php");
// }

if (isset($_GET['name'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 unset($_SESSION['email']);
 header("Location: ../index.php");
}
// if (isset($_GET['Adminlogout'])) {
//  session_destroy();
//  unset($_SESSION['userSession']);
//  unset($_SESSION['email']);
//  header("Location: ../admin/index.php");
// }

?>