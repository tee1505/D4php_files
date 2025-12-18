<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "แซ่บๆ\n";
fwrite($myfile, $txt);
$txt = "ก๋วยเตี๋ยว\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "บันทึกข้อมูลเรียบร้อยแล้ว";
?>