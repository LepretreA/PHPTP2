<?php function moyenne($T){
$result = array_sum($T)/count($T); 
return $result;
}
 

$Table=array(
    0=>6,
    1=>8,
    2=>15,
    3=>46,
    4=>3,
    5=>5,
    6=>5,
    7=>9,
    8=>2,
    9=>1);
for ($i=0;$i<sizeof($Table);$i++){
    echo $Table[$i];
    echo "<br>";
}
echo "<br>";
$x =  moyenne($Table);
echo "La moyenne du Tableau est :" .$x;

echo "<br>";
echo "<br>";
echo "Let's GO";
?>