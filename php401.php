<?php

//calling by function
function welcome(){
    echo "Hi, welcome to Thailand";
}

//calling by value
function sayHi($name,$age){
    //echo "Hello Week4 <br />";
    echo "$name $age";
}

//calling by Reference
function adder(&$str,&$std1){
    $str = "Call By Reference";
    $std1 = "Jame";
}

//Default argument Value
function lastName($name="Sakaberg"){
    echo "Hello $name<br />";
}

welcome(); //calling by function
echo "<br />";
sayHi("Mark",25); //calling by value
echo "<br />";
sayHi("Jhon",30); //calling by value
echo "<br />";
adder($str,$std1); //calling by Reference
echo $str," ",$std1;;
echo "<br />";
echo lastName();

?>
