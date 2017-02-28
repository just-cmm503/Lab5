<! DOCTYPE html >
<html>
<head>
</head>
<body>
<p>
    <?php echo "Hello World " . "''Hello . World'' \n"; ?>
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

echo "<table>";
echo "<tr><td>    Surname    </td><td>    FirstName  </td></tr> \r\n";
echo "<tr><td>" . $Sname1 . "</td><td>" . $Fname1 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname2 . "</td><td>" . $Fname2 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname3 . "</td><td>" . $Fname3 . "</td></tr> \r\n";
echo "<tr><td>" . $Sname4 . "</td><td>" . $Fname4 . "</td></tr> \r\n";
echo "</table>";
?>
</body>
</html>