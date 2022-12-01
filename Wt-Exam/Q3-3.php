<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "I am Parag More, Roll no. 33s from batch 2 & currently pursuing MCA from MPSTME.\n";
fwrite($myfile, $txt);
$txt = "I am Parag More, Roll no. 33s from batch 2 & currently pursuing MCA from MPSTME.\n";
fclose($myfile);
?>

</body>
</html>

