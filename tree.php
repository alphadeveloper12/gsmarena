<?php
// /* First method to create an associate array. */
// $student_one = array("Maths"=>95, "Physics"=>90,  
//                   "Chemistry"=>96, "English"=>93,  
//                   "Computer"=>98); 
    
// /* Second method to create an associate array. */
// $student_two["Maths"] = 95; 
// $student_two["Physics"] = 90; 
// $student_two["Chemistry"] = 96; 
// $student_two["English"] = 93; 
// $student_two["Computer"] = 98; 
    
// /* Accessing the elements directly */
// echo "Marks for student one is:<br>"; 
// echo "Maths:" . $student_two["Maths"], "<br>"; 
// echo "Physics:" . $student_two["Physics"], "<br>"; 
// echo "Chemistry:" . $student_two["Chemistry"], "<br>"; 
// echo "English:" . $student_one["English"], "<br>"; 
// echo "Computer:" . $student_one["Computer"], "<br>";
// /* Creating an associative array */
// $student_one = array("Maths"=>95, "Physics"=>90,"Chemistry"=>96, "English"=>93,"Computer"=>98); 
    
    
// /* Looping through an array using foreach */
// echo "Looping using foreach: <br>"; 
// foreach ($student_one as $subject => $marks){ 
//     echo "Student one got ".$marks." in ".$subject."<br>"; 
// } 
   
// /* Looping through an array using for */
// echo "<br>Looping using for: <br>"; 
// $subject=array_keys($student_one);
// $marks=count($student_one);
// for($i=0;i<$marks;$i++){
//     echo $subject[$i] .' '. $student_one[$subject[$i]]. "</br>";
// }

// PHP program to create 
// multidimensional array
  
// Creating multidimensional
// array
$myarray = array(
      
    // Default key for each will
    // start from 0
    array("Ankit", "Ram", "Shyam"),
    array("Unnao", "Trichy", "Kanpur")
);
      
// Display the array information
print_r($myarray);

echo "</br>";
  
// PHP program to creating two 
// dimensional associative array
$marks = array(
      
    // Ankit will act as key
    "Ankit" => array(
          
        // Subject and marks are
        // the key value pair
        "C" => 95,
        "DCO" => 85,
        "FOL" => 74,
    ),
          
    // Ram will act as key
    "Ram" => array(
          
        // Subject and marks are
        // the key value pair
        "C" => 78,
        "DCO" => 98,
        "FOL" => 46,
    ),
      
    // Anoop will act as key
    "Anoop" => array(
          
        // Subject and marks are
        // the key value pair
        "C" => 88,
        "DCO" => 46,
        "FOL" => 99,
    ),
);
  
echo "Display Marks: <br>";
      echo "<pre>";
print_r($marks);
// PHP program to creating three
// dimensional array
  
// Create three nested array
$myarray = array(
    array(
        array(1, 2),
        array(3, 4),
    ),
    array(
        array(5, 6),
        array(7, 8),
    ),
);
      
// Display the array information
echo "<pre>";

print_r($myarray);
// PHP code to create 
// multidimensional array
  
// Creating multidimensional
// associative array
$marks = array(
      
    // Ankit will act as key
    "Ankit" => array(
          
        // Subject and marks are 
        // the key value pair
        "C" => 95,
        "DCO" => 85,
        "FOL" => 74,
    ),
          
    // Ram will act as key
    "Ram" => array(
          
        // Subject and marks are 
        // the key value pair
        "C" => 78,
        "DCO" => 98,
        "FOL" => 46,
    ),
      
    // Anoop will act as key
    "Anoop" => array(
          
        // Subject and marks are
        // the key value pair
        "C" => 88,
        "DCO" => 46,
        "FOL" => 99,
    ),
);
  
// Accessing the array element 
// using dimensions 
      
// It will display the marks of
// Ankit in C subject
echo $marks['Ankit']['C'] . "<br>"; 
      
// Accessing array elements using for each loop
foreach($marks as $mark) {
    echo $mark['C']. " ".$mark['DCO']." ".$mark['FOL']."<br>"; 
}
$languages = array();
  
$languages['Python'] = array(
    "first_release" => "1991", 
    "latest_release" => "3.8.0", 
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py", 
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);
  
$languages['PHP'] = array(
    "first_release" => "1995", 
    "latest_release" => "7.3.11", 
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php", 
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine
             under Zend Engine License)"
    )
);
echo "<pre>";
  
print_r($languages);
print_r($languages['PHP']['description']);
// echo $languages['Python']['latest_release'];
foreach ($languages as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $sub_key => $sub_val) {
                  
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if (is_array($sub_val)) {
            echo $sub_key . " : <br>";
            foreach ($sub_val as $k => $v) {
                echo "\t" .$k . " = " . $v . "<br>";
            }
        } else {
            echo $sub_key . " = " . $sub_val . "<br>";
        }
    }
}
  
   
?>