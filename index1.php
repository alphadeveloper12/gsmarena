<?php
include("db.php");

function categoryTree($parent_id = 0, $sub_mark = ''){
    
    $sql= mysqli_query($conn,"SELECT `id`, `name`, `parent_id` FROM `category` WHERE  parent_id = $parent_id ORDER BY name ASC");
    $numrow=mysqli_num_rows($sql);
    if($numrow > 0){
        while($row = mysqli_fetch_assoc($sql)){
            echo '<option value="'.$row['id'].'">'.$sub_mark.$row['name'].'</option>';
            categoryTree($row['id'], $sub_mark.'---');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .select {

        width: 100%;
        min-width: 15ch;
        max-width: 30ch;
        border: 1px solid var(--select-border);
        border-radius: 0.25em;
        padding: 0.25em 0.5em;
        font-size: 1.25rem;
        cursor: pointer;
        line-height: 1.1;
        background-color: #fff;
        background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
    }
    </style>
</head>

<body>
    <label for="standard-select">Select Category</label>
    <div class="select">
        <select name="standard-select">
            <?php categoryTree(); ?>
        </select>
    </div>
</body>

</html>