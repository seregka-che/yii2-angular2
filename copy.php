<?php
$src = "vendor/razmik/angular2/dist/*";  // source folder or file
$dest = "./";   // destination folder or file        

shell_exec("cp -r $src $dest");

echo "Copy files completed!"; //output when done
?>