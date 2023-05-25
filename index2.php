<?php echo "Hello world!"; 
$A = 5;
$B = 6;
$i = 0;
while ($i < 10)
{
    echo $i;
    $i++;
}
$i = 0;
echo "<br>do...while";
do
{
    echo $i;
    $i++;

} while ($i < 10);

echo "<br>for loop:";
for ($i = 0; $i < 10; $i++)
{
    echo $i;
}

$i = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<br>for each: ";
foreach($i as $j){
    echo $j;
}

$variavel = array(1,2,3,4,5);
echo "<br>variavel: ";
print_r($variavel);
echo "<br>variavel: ";
foreach($variavel as $v)
{
    echo $v;
}

$var = array("A" => "ABACAXI", "B" => "BOLA", "C" => "CACHORRO");
$var2 = array("ABACAXI", "BOLA", "CACHORRO");
echo "<br> $var2[1]";
echo "<br> vars: ";
foreach($var as $v)
{
    echo $v;
    echo " \n";
}
echo "<br> print_r das var: ";
echo print_r($var);
// if ($B % 2 == 1)
// {
//     echo "número ímpar";
// }
// else
// {
//     echo "número par";
// }
?>