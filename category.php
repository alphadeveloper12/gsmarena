<?php
include("db.php");
$res=mysqli_query($conn,"select * from category");
$arr=[];
while($row=mysqli_fetch_assoc($res)){
    $arr[$row['id']]['name']=$row['name'];
    $arr[$row['id']]['parent_id']=$row['parent_id'];

}
buildTreeView($arr,0);
function buildTreeView($arr,$parent,$level= 0,$prelevel= -1){
    foreach($arr as $id=>$data){
        if($parent==$data['parent_id']){
            if($level>$prelevel){
                echo "<ol>";
            }
           
            echo "<li>".$data['name'];
            if($level>$prelevel){
                $prelevel=$level;
    
            }
            if($level==$prelevel){
                echo "</li>";
            }
            $level++;
            buildTreeView($arr,$id,$level,$prelevel);
            $level--;

        }
       
    }
    if($level==$prelevel){
        echo "</li></ol>";
    }

}

?>