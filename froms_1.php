<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
</form>

<html>
<body>

Welcome <?php echo $_GET["fname"] ; ?>

</body>
</html>