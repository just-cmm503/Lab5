<! DOCTYPE html >
<html>
<head>
</head>
<body>
<p>
    <?php echo "Hello World  <br> \r\n" . "''Hello . World''  <br> \r\n"; ?>
    <?php echo 5 * 7; ?>
</p>
<?php
$Sname1 = "John";
$Fname1 = "Jack";

$Sname2 = "Mark";
$Fname2 = "Alvin";

$Sname3 = "Colin";
$Fname3 = "Berg";

$Sname4 = "Sarah";
$Fname4 = "Callum";

echo "<table border='hairline'> \r\n";
echo "<tr><td>    Surname    </td><td>    FirstName  </td></tr> \r\n";
echo "<tr><td>" . $Sname1 . "</td><td>" . $Fname1 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname2 . "</td><td>" . $Fname2 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname3 . "</td><td>" . $Fname3 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname4 . "</td><td>" . $Fname4 . "</td></tr> \r\n";
echo "</table>";

if($name1="John"){print "Weldon one <br> \r\n";} else {"Nice try 1 <br> \r\n";}
if($name1="Mark"){print "Weldon two <br> \r\n";} else {"Nice try 2 <br> \r\n";}
if($name1="Colin"){print "Weldon three <br> \r\n";} else {"Nice try 3 <br> \r\n";}

for ($i = 1; $i < 10; $i ++) { echo "<p>Hello!</p>"; }


?>
</body>
</html>