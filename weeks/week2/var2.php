<?php
$name = 'Olga';
$first_name = 'Olga';
$last_name = 'Smith';
echo '<br>';
$name = 'Olga';
$name .= '-Smith';

echo $name;
echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'Olga\'s favorite color is ' . $color . ' ';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x += 5;
echo $x;
echo '<br>';

$x = 100;
$x /= 10;
echo $x;
echo '<br>';

echo '<h3>Our product, quantity and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;

echo '<h3>We would like our amount to reflect 2 decimal places -- we are thinking about floats and a new function - number_format()</h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total <b>' . $total_friendly . '</b> dollars';
