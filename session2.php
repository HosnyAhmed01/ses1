<?php 
// Task 1 
$N = 6; 
echo "<h1>Task 1</h1>";
echo "<p>Given a number N. Print numbers from 1 to N in separate lines.</p>";

echo "<div style='font-size : 24px; color : red;'>";
for ($i = 1; $i <= $N; $i++){ 
    echo "<div>$i</div>";
}
echo "</div>";

// Task 2
echo "<h1>Task 2</h1>";
echo "<p>Given a number N. Print all even numbers between 1 and N inclusive in separate lines.</p>";
$E = 4; 
if ($E == 1 ) { // ($E == 0 || $E == -1) added if the range is (-infinity<N>infinity)
   echo "<div style='font-size : 24px; color : blue;'>-1</div>";
} else {
    for ($i = 1; $i <= $E; $i++){ 
        if ($i % 2 == 0) {
            echo "<div style='font-size : 24px; color : blue;'>$i</div>";
        }
    }
}

// Task 3
echo "<h1>Task 3</h1>";
echo "<p>Given a number N, and N numbers, find maximum number in these N numbers.</p>";
// solution with sorting

/*
$O = [13 , 6 , 2 , 18]; 
sort($O);
echo $O[count($O) - 1];
*/
$O = [13 , 6 , 20 , 18]; 
$max = 0; 
foreach ($O as $i) {
    if ($i > $max) {
        $max = $i;
    }
}
echo "<div style='font-size : 24px; color : green;'>$max</div>";

// Task 4
echo "<h1>Task 4</h1>";
echo "<p>Given a number X. Determine if the number is prime or not ?</p>";
$X = 18;

for ($i = 2; $i <= $X; $i++) {
    if ($X % $i == 0 && $i < $X) {
        echo "<div style='font-size : 24px; color : green;'>$X is not a prime number</div>";
        break;
    }
    if ($i == $X) {
        echo "<div style='font-size : 24px; color : green;'>$X is a prime number</div>";
    }
}

// Task 5
echo "<h1>Task 5</h1>";
echo "<p>Is number plandormic?</p>";
$Y = 132321;
$arr = str_split($Y); 

$reverseArr = array_reverse($arr);
$reverseStr = implode('', $reverseArr);

if ($Y == $reverseStr) { 
    echo "<div style='font-size : 24px; color : green;'>$Y is a palindrome</div>";
} else {
    echo "<div style='font-size : 24px; color : green;'>$Y is not a palindrome</div>";
}

// Task 6
echo "<h1>Task 6</h1>";
echo "<p>Given a number N. Print all the divisors of N in ascending order.</p>";
$Z = 10;
for ($i = 1; $i <= $Z; $i++) {
    if ($Z % $i == 0){
        echo "<div>$i</div>";
    }
}

// Task 7
echo "<h1>Task 7</h1>";
echo "<p>Given two numbers A and B. Print all lucky numbers between A and B</p>";
$A = 1;
$B = 10; 
for($i = $A; $i <= $B; $i++) { 
    $arr_of_X = str_split($i); 
    for ($y = 0; $y < count($arr_of_X); $y++) {
        if ($arr_of_X[$y] != 7 && $arr_of_X[$y] != 4) {
            break; 
        }
    }
    if ($y == count($arr_of_X)) {
        echo "<div style='font-size : 24px; color : green;'>$i</div>";
    }
}

// Task 8
echo "<h1>Task 8</h1>";
echo "<p>Given a number N. Print a left angled triangle that has N rows.</p>";
$rows = 20; 

for ($i=1; $i <= $rows; $i++) {
    for ($y =1; $y <= $i; $y++) {
        echo "*";
    }
    echo "<br>";
}
