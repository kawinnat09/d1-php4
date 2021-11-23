<?php

//Returning a value
function cube($name,$n)
{
    echo $name; //calling
    return $n * $n * $n; //return
}

//Returning multiple values
function week()
{
    $day1= "Monday";
    $day2= "Tuesday";
    return array($day1, $day2);
}

function countries($name,$id){
    return $name.$id;
}

echo cube("Cube: ",3);
$weeks = week();
echo"<br />";
echo $weeks[0]," ",$weeks[1];
echo"<br />";
echo countries("Thailand",66);
?>