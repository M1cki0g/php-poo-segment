<?php
include 'segment.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
$seg1 = new extr(24, 12);
$seg1->aff();
$seg1->aff();
echo $seg1->getLongueur() . "<br>";
if ($seg1->appart(10))
    echo "Segment appartient ";
else
    echo "Segment n'appartient pas ";
?>
