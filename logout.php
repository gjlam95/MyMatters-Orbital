<?php
include ("dbconnect.php");

session_unset();
session_destroy();

?>

<script type="text/javascript">
alert("You are logged out!");
window.location="index.php";
</script>
