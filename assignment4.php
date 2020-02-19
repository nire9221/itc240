<?php 

$meal_cost = 35;
$tip = $meal_cost * 0.15;
$tax = $meal_cost * 0.1;
$total = $meal_cost +$tip + $tax;

echo 'Total Meal Cost : </br></br>';
echo 'Meal Cost : ' .'$'.number_format($meal_cost, 2).'</br>'; 
echo 'Tip : ' .'$'.number_format($tip, 2).'</br>';
echo 'Tax : ' .'$'.number_format($tax, 2).'</br>';
echo 'Total : ' .'$'.number_format($total, 2).'</br></br>';





if ($meal_cost < 20 && $meal_cost > 0){
       echo 'Good price';
    } else if ($meal_cost >= 20 && $meal_cost < 40) {
        echo 'Reasonably priced.';
    } else if ($meal_cost >= 40){
        echo 'This is Pricey.';
    } 
if (!is_numeric($meal_cost)) {
        echo 'Is this even a number?';    
        }        
    


echo '</br></br>';

$num = rand (0,10);

for ($num=0; $num<=10; $num++){
    
    if ($num == rand(5,7)){
             echo $num. ' is your random number</br> ';              
    } else{
         echo $num. ' <br>';
    }
}
        

        

 ?>


