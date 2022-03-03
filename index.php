<?php
include("db.php");
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
if(isset($_REQUEST['submit'])){
    $p_name=$_REQUEST['p_name'];
    $p_desc=$_REQUEST['p_desc'];
    $p_cat=$_REQUEST['p_cat'];
     $p_price=isset($_REQUEST['p_price']);
    $p_sub_cat=isset($_REQUEST['p_sub_cat']);
    $p_sub_sub_cat=isset($_REQUEST['p_sub_sub_cat']);
   
    $sql="INSERT INTO `products` ( `sub_sub_cat_id`, `sub_cat_id`, `cat_id`, `name`, `price`, `description`) VALUES ('".$p_sub_sub_cat."', '".$p_sub_cat."', '".$p_cat."', '".$p_name."', '".$p_price."', '".$p_desc."')";

    $check=mysqli_query($conn,$sql);
    if($check=="1"){
        echo "Form submitted";
        header("location:index.php");

    }
    else{
        echo "Form does not submitted";
        header("location:index.php");

    }



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
    <title>Add Products</title>
    <style>
    #product {
        display: none;
    }

    #cat {
        display: none
    }

    #sub_cat {
        display: none
    }

    #sub_sub_cat {
        display: none
    }
    </style>
</head>

<body>
    <!-- Buttons -->
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <button type="button" class="btn btn-primary" onclick="showDiv()">Product Form</button>
        <button type="button" class="btn btn-secondary" onclick="showDivCat()">Category Form</button>
        <button type="button" class="btn btn-success" onclick="showDivSubCat()">Sub Category Form</button>
        <button type="button" class="btn btn-success" onclick="showDivSubSubCat()"> Sub Sub Category Form</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='button.php'"> View All</button>

    </div>
    <!-- Buttons End -->

    <!-- Product Form -->

    <div class="container " id="product">
        <h2>Product Form</h2>
        <form class="form-horizontal" action="index.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Product Name</label>
                <div class="col-sm-6">
                    <input type="text" name="p_name" class="form-control" id="email" placeholder="Enter Product Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Description</label>
                <div class="col-sm-6">
                    <input type="textarea" name="p_desc" class="form-control" id="email"
                        placeholder="Enter Description">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Price</label>
                <div class="col-sm-6">
                    <input type="textarea" name="p_price" class="form-control" id="email" placeholder="Enter Price">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleSelect">Select Category</label>
                <select class="form-control" id="exampleSelect" name="p_cat">
                    <?php
                    $result=mysqli_query($conn,"select * from category");
                    $numrow=mysqli_num_rows($result);
                    while($row1=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect">Select Sub Category</label>
                <select class="form-control" id="exampleSelect" name="p_sub_cat">
                    <?php
                    $result1=mysqli_query($conn,"select * from sub_cat");
                    $numrow1=mysqli_num_rows($result1);
                    while($row2=mysqli_fetch_array($result1)){
                    ?>
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row2['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect">Select Sub Sub Category</label>
                <select class="form-control" id="exampleSelect" name="p_sub_sub_cat">
                    <?php
                    $result2=mysqli_query($conn,"select * from sub_sub_cat");
                    $numrow2=mysqli_num_rows($result2);
                    while($row3=mysqli_fetch_array($result2)){
                    ?>
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row3['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>




            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Product Form end -->
<?php
if(isset($_REQUEST['submit_cat'])){
    $cat_name=$_REQUEST['cat_name'];
    $sql1="INSERT INTO `category`(`name`) VALUES ('".$cat_name."')";
    $check1=mysqli_query($conn,$sql1);
    if($check1=="1"){
        echo "Form submitted";

    }
    else{
        echo "Form does not submitted";
    }
}
?>
    <!-- category Form -->


    <div class="container" id="cat">
        <form class="form-horizontal" action="index.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">category Name</label>
                <div class="col-sm-6">
                    <input type="text" name="cat_name" class="form-control" id="email"
                        placeholder="Enter category Name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" name="submit_cat" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- category Form End -->
    <?php
    if(isset($_REQUEST['submit_sub_cat'])){
    $sub_cat_name=$_REQUEST['sub_cat_name'];
    $sub_cat_choose=$_REQUEST['sub_cat_choose'];

    $sql2="INSERT INTO `sub_cat`(`name`, `cat_id`) VALUES ('".$sub_cat_name."','".$sub_cat_choose."')";
    $check2=mysqli_query($conn,$sql2);
    if($check2=="1"){
        echo "Form submitted";

    }
    else{
        echo "Form does not submitted";
    }
}
?>
    <!-- Sub Category Form Start -->

    <div class="container" id="sub_cat">
        <form class="form-horizontal" action="index.php" method="post">
            <div class="form-group">
                <label for="exampleSelect">Select Category</label>
                <select class="form-control" id="exampleSelect" name="sub_cat_choose">
                    <?php
                    $result=mysqli_query($conn,"select * from category");
                    $numrow=mysqli_num_rows($result);
                    while($row1=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Sub Category Name</label>
                <div class="col-sm-6">
                    <input type="text" name="sub_cat_name" class="form-control" id="email"
                        placeholder="Enter Sub category Name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" name="submit_sub_cat" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Sub Category form end -->
    <?php
    if(isset($_REQUEST['submit_sub_sub_cat'])){
    echo $main_cat_name=$_REQUEST['main_cat_name'];
    echo $main_sub_name=$_REQUEST['main_sub_name'];
    echo $sub_sub_cat_name=$_REQUEST['sub_sub_cat_name'];


    $sql3="INSERT INTO `sub_sub_cat`(`name`, `sub_cat_id`, `cat_id`) VALUES ('".$sub_sub_cat_name."','".$main_sub_name."','".$main_cat_name."')";
    $check3=mysqli_query($conn,$sql3);
    if($check3=="1"){
        echo "Form submitted";

    }
    else{
        echo "Form does not submitted";
    }
}
?>

    <!-- Sub Sub Category form start -->

    <div class="container" id="sub_sub_cat">
        <form class="form-horizontal" action="index.php" method="post">
            <div class="form-group">
                <label for="exampleSelect">Select Category</label>
                <select class="form-control" id="exampleSelect" name="main_cat_name">
                    <?php
                    $result3=mysqli_query($conn,"select * from category");
                    $numrow3=mysqli_num_rows($result3);
                    while($row3=mysqli_fetch_array($result3)){
                    ?>
                    <option value="<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect">Select Sub Category</label>
                <select class="form-control" id="exampleSelect" name="main_sub_name">
                    <?php
                    $result4=mysqli_query($conn,"select * from sub_cat");
                    $numrow4=mysqli_num_rows($result4);
                    while($row4=mysqli_fetch_array($result4)){
                    ?>
                    <option value="<?php echo $row4['id']; ?>"><?php echo $row4['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">sub Sub Category Name</label>
                <div class="col-sm-6">
                    <input type="text" name="sub_sub_cat_name" class="form-control" id="email"
                        placeholder="Enter Sub Sub category Name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" name="submit_sub_sub_cat" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <!--Sub Sub Category form end  -->
    <!-- java script files -->
    <script>
    function showDiv() {
        document.getElementById('product').style.display = "block";
        document.getElementById('cat').style.display = "none";
        document.getElementById('sub_cat').style.display = "none";
        document.getElementById('sub_sub_cat').style.display = "none";



    }

    function showDivCat() {
        document.getElementById('cat').style.display = "block";
        document.getElementById('product').style.display = "none";
        document.getElementById('sub_cat').style.display = "none";
        document.getElementById('sub_sub_cat').style.display = "none";



    }

    function showDivSubCat() {
        document.getElementById('cat').style.display = "none";
        document.getElementById('product').style.display = "none";
        document.getElementById('sub_cat').style.display = "block";
        document.getElementById('sub_sub_cat').style.display = "none";



    }

    function showDivSubSubCat() {
        document.getElementById('cat').style.display = "none";
        document.getElementById('product').style.display = "none";
        document.getElementById('sub_cat').style.display = "none";
        document.getElementById('sub_sub_cat').style.display = "block";



    }
    </script>

</body>

</html>