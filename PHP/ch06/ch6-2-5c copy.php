<?php
function welcome(?string $name = null): ?string{
    //echo "<p>welcome <BR>";
    //echo $name;
    if(is_null($name)){
        //echo"welcome <BR>";
        return"welcome is null<BR>";
    }
    else{
        //echo "welcome $name <BR>";
        return"welcome $name<BR>";
    }

}
$msg1=welcome("何昇輔");
echo $msg1;
$msg2=welcome("C112181104");
echo $msg2;
$msg3=welcome();
echo $msg3;
?>