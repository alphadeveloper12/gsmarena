<?php
include("db.php");
function catgeory_view($id=0) 
{
  global $con;
  $select_category="SELECT * FROM category WHERE parent_id=$id order by id";
  $result_category=mysqli_query($conn,$select_category);
  $output="";
  if($result_category)
  {
    $row_count=mysqli_num_rows($result_category);
    if($row_count>0)
    {
      $output.="<ul class='list-group'>";
      while($row_data=mysqli_fetch_array($result_category))
      {
            $output.="<li class='list-group-item'>".$row_data['name']."".catgeory_view($row_data['id'])."</li>"; 
      }
      $output.="</ul>";    
    }
    else 
    {
        $output.="<ul class='space'></ul>";
    }
  }
  return $output;
}
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
    <title>Document</title>
</head>

<body>
    <ul class="list-group">
        <?php
            $select_category="SELECT * FROM category WHERE parent_id=0";
            $result_category=mysqli_query($conn,$select_category);
            $output="";
            if($result_category)
            {
              $row_count=mysqli_num_rows($result_category);
              if($row_count>0)
              {
                while($row_data=mysqli_fetch_array($result_category))
                {
                    $output.= "<li class='list-group-item'  >".$row_data['name']."".catgeory_view($row_data['id'])."</li>";
                    
                }
              }
            }
            echo $output;
            ?>

    </ul>
</body>

</html>