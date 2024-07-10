<?php 

/*
* Given a name S. Print "Hello, (name)" without parentheses.
* task 1
*/

$s = "Hosny"; 

print("Hello , $s");
echo "<br>" ;
echo "########################";
echo "<br>";

?>

<?php 

/*
* task 2
* Given two numbers X and Y. Print the summation and multiplication and
* subtraction of these 2 numbers.
*/

$x = 5;
$y = 10; 
$sum = $x + $y; 
$multiplication = $x * $y;
$sub = $x - $y;

echo"$x + $y = $sum <br>";
echo"$x * $y = $multiplication <br>";
echo"$x - $y = $sub <br>";
echo "<br>" ;
echo "########################";
echo "<br>";
?>


<?php 

/*
* task 3
* Given four numbers A, B, C and D. Print the result of the following
* equation : X = (A * B) -(C * D).
*/
[$A, $B , $C ,$D] = [1 , 2 ,3 ,5];
$X = ($A * $B) -($C * $D); 

echo "Difference = $X";

echo "<br>" ;
echo "########################";
echo "<br>";
?>


<?php 

/*
* task 4
* Given two numbers N and M. Print the summation of their last digits.
*/
$N = 11230; 
$M = 12316; 

$last_from_N = $N % 10; 
$last_from_M = $M % 10;


echo $last_from_N + $last_from_M; 
echo "<br>" ;
echo "########################";
echo "<br>";
?>


<?php 

/*
* task 5
* Given a number X. Print "EVEN" if the first digit of X is even number. Otherwise print "ODD".
*/
$X = 345; 
$arr = str_split($X);

if ($arr[0] % 2 == 0) {
    echo "ODD";
} else {
    echo "EVEN";
}
echo "<br>" ;
echo "########################";
echo "<br>";
?>

<?php 

/*
* task 6
* Given a number X. Print "EVEN" if the first digit of X is even number. Otherwise print "ODD".
*/
$a = 10; 
$b = 15;
$k = 20; 

if ($a % $k == 0 && $b % $k == 0){
    echo "both";
} else if ($a % $k == 0 ) {
    echo "memo";
} else if ($b % $k == 0) {
    echo "momo";
}else {
    echo "No one";
}

echo "<br>" ;
echo "########################";
echo "<br>";
?>

<?php 

/*
* task 7
* A number of two digits is lucky if one of its digits is divisible by the other.
*/
$a = 32; 
$arr = str_split($a); 
$first_digit = $arr[0]; 
$last_digit = $arr[1];

if ($first_digit % $last_digit == 0 || $last_digit % $first_digit == 0){
    echo "yes";
} else {
    echo "no";
}

echo "<br>" ;
echo "########################";
echo "<br>";
?>