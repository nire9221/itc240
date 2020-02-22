
<?php 
function isPlaindrome ($name){
    if ($name == "cat"){
        echo "TRUE";
        return true;
        }else{
        echo "FALSE";
        return false;
        }
}

isPlaindrome ("cat");
isPlaindrome ("dog");
isPlaindrome ("horse");

//echo filter_var(isPlaindrome ("cat"), FILTER_VALIDATE_BOOLEAN);

?>



<?php 

$num = array(4,15,22,-2);
function sortArray($num){
    
    for($i=0; $i<count($num); $i++)
    {
        for($j=$i+1; $j<count($num); $j++)
        {
            if($num[$i]> $num[$j]){
                $temp= $num[$i];
                $num[$i]= $num[$j];
                $num[$j]= $temp;
            }
        }

    } return $num;
}

print_r(sortArray($num));

?>

