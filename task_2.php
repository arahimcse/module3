<?php 
/**
 * Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
 * 
 */
function removeEvenNumbers($arr) {
    $result = array();
    foreach ($arr as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    return $result;
}
$numbers = [1,2,3,4,5,6,7,8,9,10];
$oddNumbers = removeEvenNumbers($numbers);
print_r($oddNumbers);