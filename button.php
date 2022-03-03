<?php
include("db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>View Products</title>

</head>

<body>

    <?php
        

        $result=mysqli_query($conn,"select * from category where parent_id = 0 ");  
        while($row=mysqli_fetch_assoc($result)){
            $main_parent=$row['id']
            ?>
            
            <ul>
                <li>
                    <?php echo $row['name'];  
                    $result1=mysqli_query($conn,"select * from category where parent_id = '".$main_parent."'");  
                    while($row1=mysqli_fetch_assoc($result1)){
                       $sub_parent=$row1['id'];
                      
                         
                    ?>
                    <ul>
                        <li>
                        <?php echo $row1['name'];
                        $result2=mysqli_query($conn,"select * from category where parent_id='".$sub_parent."'");  
                        while($row2=mysqli_fetch_assoc($result2)){
                           
                                ?>
                                <ul>
                                    <li>
                                     <?php echo $row2['name'];?>

                                    </li>
                                </ul>
                                <?php


                        
                    }

                        ?>
                        </li>
                    </ul>
                    <?php
                    
                    }
                    ?>
                </li>
            </ul>

            
        <?php
        }
       
                    

?>
</body>

</html>
  