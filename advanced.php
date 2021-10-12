<?php include 'footer.php' ;?>

echo readfile("webdict.txt") ;

$myfile = fopen("webdict.txt", "r");
while(!feof ($myfile)) {
  echo fgetc ($myfile);
}

setcookie ("username", "John", time() + (86400 * 30), "/");

session_start();
$_SESSION ["favcolor"] = "green";

echo $_SESSION["favcolor"] ;