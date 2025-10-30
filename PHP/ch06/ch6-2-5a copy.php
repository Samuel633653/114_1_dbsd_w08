<?php
function welcome(?string $name = null){
    //echo "<p>welcome <BR>";
    //echo $name;
    if(is_null($name)){
        echo"welcome <BR>";
    }
    else{
        echo "welcome $name <BR>";
    }




}
welcome("何昇輔");
welcome(null);
welcome();

?>