<form action="welcome.php" method="post">
First name: <input type="text" name="fname">
</form>


<html>
<body>

Welcome <?php echo $_POST["fname"] ; ?>

</body>
</html>