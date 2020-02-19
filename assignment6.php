<!-- 1. Given the following of pets containing the items ('dog', 'cat', 'fish', 'bird', 'iguana'); display the following text, pulling the animal types from the pets array.

Result: "You can adopt a dog, a cat, or a bird from the animal sanctuary." -->

<?php
$animal = array('dog', 'cat', 'fish', 'bird', 'iguana');
unset($animal[2], $animal[4]);

echo "You can adopt a {$animal[0]}, a {$animal[1]}, or a {$animal[3]} from the animal sanctuary.";

echo '<br>';
echo '<br>';
?>

<!-- #2. Display the state and state capital from the below array $statecaps. Sort the list by the name of the capital.  -->

<?php 
$statecaps = array('Washington' => 'Olympia', 'Oregon' => 'Salem', 'California' => 'Sacramento', 'Alaska' => 'Juneau', 'Hawaii' => 'Honolulu', 'Idaho' => 'Boise', 'Nevada' => 'Carson City', 'Arizona' => 'Phoenix') ;

echo '<ul>';
foreach ($statecaps as $state => $city){
    echo "<li>$state ($city)</li>";   
}
echo '</ul>';

echo '<br>';

?>



<!-- 3. Insert a new item in an array with elements 1, 2, 3, 4, 5, 6
Result: The array should now contain 1,2,3,4, 42, 5, 6      //merge or splice -->
<?php
$numbers = array(1, 2, 3, 4, 5, 6);
$insert = array_merge(array_slice($numbers, 0, 4), array(42), array_slice($numbers, 4));

print_r($insert);

echo '<br>';
echo '<br>';

?>



<!-- 4. Given an array of week’s temperatures containing the items 32, 47, 55, 30, 42, 39, 45, calculate and display the average temperature as well as display the lowest and highest temperature in the week.

Result Average temp this week : 41.4 Lowest temp: 30 Highest temp : 55 -->

<?php

$temp = array(32, 47, 55, 30, 42, 39, 45);
sort($temp);
$lowtemp = $temp[0];
rsort($temp);
$hightemp = $temp[0];

$sum = 0;
for ($i =0; $i<count($temp); $i++){
     $sum += $temp[$i];   
}
$average = round($sum /count ($temp),2);

echo "Average temp this week : {$average} Lowest temp: {$lowtemp} \n Highest temp : {$hightemp}";

?>
