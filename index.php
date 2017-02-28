<! DOCTYPE html >
<html>
<head>
</head>
<body>
<p>
    <?php echo "Hello World "."''Hello . World'' \n"; ?>
    <?php  echo 5*7;?>
</p>
<?php
$Sname1="John";
$Fname1="Jack";

$Sname2="Mark";
$Fname2="Alvin";

$Sname3="Colin";
$Fname3="Berg";

$Sname4="Sarah";
$Fname4="Callum";

echo "<table>";
    echo "<tr>".$Sname1."<td>".$Fname1."</td></tr>";
echo "<tr>".$Sname2."<td>".$Fname2."</td></tr>";
echo "<tr>".$Sname3."<td>".$Fname3."</td></tr>";
echo "<tr>".$Sname4."<td>".$Fname4."</td></tr>";
echo "</table>";
?>
</body>
</html>