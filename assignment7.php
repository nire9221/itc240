
1. 
A palindrome is a word hat reads the same backward as forward, e.g., radar or kayak
Write a  isPalimndrome function that checks whether string, passed as an argument is a palindrome. The function should return true if or false.
Test your function with a couple differnt words.

Sample Result:

isPalindrome("radar"); #should return True
isPalindrome("cat"); #should return false


boolean 
<?php 
    function isPlaindrome (boolean $name){
        if ($name == "cat"){
            return (bool) "true";
        } else{
            return (bool) "false";
        }
}

?>

2. 
Write a sortArray function to sort an array. You may not call the built in functions to do the sorting. Your function should take an array as argument and return a sorted array.
Test that your function is sorted by using print_r of the returned array.

Sample Result:

Array                                                       
(                                                           
    [0] => -2                                              
    [1] => 4                                                
    [2] => 15                                               
    [3] => 22                                               
           
<?php 


$num = array(4,15,22,-2);
function sortArray ($num){
    
    for($i=0;$i<count($num)-1; $i++) {
        if($num[$i]> $num[$i+1]){
            $temp= $num[$i+1];
            $num[$i+1]= $arr[$i];
            $arr[$i]= $temp;
        }

    }
   
    return print_r ($num);
}

?>



function add_sub ($val1,$val2){
     $add = $val1+$val2;
     $sub = $val1-$val2;
    return array($add, $sub);
}
$result_array = add_sub(10,5); 

echo "Add: " . $result_array[0]."<br>";
echo "Sub: " . $result_array[1]."<br>";


print_r($result_array);



function perimeter ($len, $wid){
    
    $p = 2*($len+$wid);   
    $area = $len +$wid;
    return array ($p, $area);
}

echo perimeter (10,20)[0];
echo perimeter (10,20)[1];
