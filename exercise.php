<?php
 $color = array('white', 'green', 'red', 'blue', 'black');
 echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]. " carpet, the ".$color[1]. " lawn, the ".$color[4]. " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

 foreach($color as $i){
     echo $i. "<br>"; 
 }
 sort($color);
 echo "<ul>";
 foreach($color as $j){
    echo "<li>$j</li>"; 
}
echo "</ul>";
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// asort($ceu);
// foreach($ceu as $country=>$capital){
//     echo "The capital of $country is $capital"."<br>";
// }
$x = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($x);
unset($x[3]);
print_r($x);
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
// echo reset($color);
$original = array( '1','2','3','4','5' );
foreach($original as $x){
    echo "$x ";
}
$inserted='$';
array_splice($original,3,0,$inserted);
foreach($original as $x){
    echo "$x ";
}
$sophia=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($sophia);
foreach($sophia as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
ksort($sophia);
foreach($sophia as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
arsort($sophia);
foreach($sophia as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
krsort($sophia);
foreach($sophia as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


















?>