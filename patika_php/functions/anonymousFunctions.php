<?php
// anonymous functions are ending with ;

$sum= function()
{
    return 2+2;
};

//call function here
echo $sum();
echo '<br>';
//anon func which gets values
$sumofTwoValues = function($n1, $n2)
{
    return $n1+$n2;
};

echo $sumofTwoValues(5,4);

$arr=[2,4,6,8];

//anonymous function in callback function
$arr=array_map(function($e){
    return 2*$e;
},$arr);

echo '<pre>';
print_r($arr);

$transaction=[
    'summary'=>function($n1,$n2){ return $n1+$n2;},
    'substract'=>function($n1,$n2){return $n1-$n2;},
    'product'=>function($n1,$n2){ return $n1*$n2;},
    'divide'=>function($n1,$n2){return $n1/$n2;}
];

echo $transaction['divide'](67,2);

?>