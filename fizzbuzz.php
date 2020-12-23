<!DOCTYPE html>
<html>
<body>

<?php  
$s = "";
for ($x = 1; $x <= 100; $x++) {
  if ($x % 3 === 0 && $x % 5 !== 0 ) {
      $s .= "Fizz" . "</br>";  
  } elseif ($x % 5 === 0 && $x % 3 !== 0) {
      $s .= "Buzz" . "</br>";
  } elseif ( $x % 3 === 0 && $x % 5 === 0) {
      $s .= "Fizz Buzz" . "</br>";
  } else {
      $s .= $x . "</br>";  
  }
}
echo $s;
?>  

</body>
</html>