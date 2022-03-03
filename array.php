<?php
$new=array(['student'=>array
 ('f_s'=>array
  ('name'=>'umair','Roll'=>'1'),
 's_s'=>array
  ('name'=>'auzar','Roll'=>'3')),
'teacher'=>array
 ('f_t'=>array
  ('name'=>'luqman','ID'=>'67'),
 's_t'=>array
  ('name'=>'rehman','ID'=>'98'))]);

$data = array();
  
$data['student'] = array(
    "First Student" => array(
        "s_name" => "Abuzar", 
        "Roll Number" => "1",
    ),
    "Second Student" => array(
        "s_name" => "Umair", 
        "Roll Number" => "2",
    ), 
    
);
$data['Teacher'] = array(
    "First Teacher" => array(
        "t_name" => "Salman", 
        "ID" => "67",
    ),
    "Second Teacher" => array(
        "t_name" => "Luqman", 
        "ID" => "89",
    ), 
    
);

// echo "<pre>";
// print_r($data);
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  $myarray = array(
    array(
        array("abuzar","1"),
        array("Umair","2")
    ),

    array(
        array(
            array("luqman","67"),
            array("zaman","78")
        )

    )

);    
$myArray1 = array(array(array("umair","1"),array("abuzar","2")),array(array("Luqman","1"),array("Usman","2")));
$data1 = [
    "student" => [
      "first student" =>[
          "name"=>"abuzar",
          "Roll Number"=>"12"
      ],
      "second student" =>[
        "name"=>"umair",
        "Roll Number"=>"22"
            ]
      ],
    "Teacher" => [
        [
            "name"=>"luqman",
            "Roll Number"=>"72"
        ],
        [
          "name"=>"Usman",
          "Roll Number"=>"92"
              ]
        ]
      
    
  ];

  $abuzer['students'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['students'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['students'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['students']['an'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['students'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['students']['an'][] = array('name' => 'Abzuer', 'roll' => 1);

  $abuzer['teacher'][] = array('name' => 'Abzuer', 'roll' => 1);
  $abuzer['teacher'][] = array('name' => 'Abzuer', 'roll' => 1);

echo '<pre>';
print_r($a);die;








echo "<pre>";
print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Array</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student Roll Number</th>

                </tr>
            </thead>
            <tbody>

                <?php
                foreach (array_slice($data,0,1) as $key => $value) {
                       
                       
                    foreach ($value as $key1 => $values){
                        $key1=$index;
                        ?>
                <tr>
                    <td><?php echo $values['s_name'] ?></td>
                    <td><?php echo $values['Roll Number'] ?></td>
                </tr>

                <?php
                     
                    }
                   }
                    ?>


            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th>Teacher Name</th>
                    <th>Teacher ID</th>

                </tr>
            </thead>
            <tbody>
                <?php
                   foreach (array_slice($data,1,2) as $key => $value) {
                       
                       
                    foreach ($value as $key1 => $values){
                        $key1=$index;
                        ?>
                <tr>
                    <td><?php echo $values['t_name'] ?></td>
                    <td><?php echo $values['ID'] ?></td>
                </tr>

                <?php
                     
                    }
                   }
                    ?>
            </tbody>
        </table>
    </div>
    <?php
                foreach (array_slice($data,0,1) as $key => $value) {
                    ?>
    <ul class="list-group">
        <li class="list-group-item">
            <?php echo $key; ?>
            <?php
                       
                       
                    foreach ($value as $key1 => $values){
                        ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <?php echo $key1; ?>
                    <?php
                    foreach ($values as $key2 => $values1){
                    ?>
                    <ul class="list-group">
                        <li class="list-group-item">

                            <?php echo $values1; ?>

                        </li>
                    </ul class="list-group">
            <?php } ?>
                </li>
            </ul class="list-group">
    <?php } ?>
        </li>
    </ul class="list-group">
    
    <?php
                    
    }
                   
?>
<?php
                foreach (array_slice($data,1,2) as $key => $value) {
                    ?>
    <ul class="list-group">
        <li class="list-group-item">
            <?php echo $key; ?>
            <?php
                       
                       
                    foreach ($value as $key1 => $values){
                        ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <?php echo $key1; ?>
                    <?php
                    foreach ($values as $key2 => $values1){
                    ?>
                    <ul class="list-group">
                        <li class="list-group-item">

                            <?php echo $values1; ?>

                        </li>
                    </ul class="list-group">
            <?php } ?>
                </li>
            </ul class="list-group">
    <?php } ?>
        </li>
    </ul class="list-group">
    
    <?php
                    
    }
                   
?>
                    

</body>

</html>