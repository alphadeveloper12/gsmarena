<?php
include("simple_html_dom.php");
include("gsm_db.php");
class scrap{
    function Brand(){
$html = file_get_html('https://www.gsmarena.com/makers.php3');
foreach($html->find('table a') as $link) {
    $data[]=$link->href ;
}

// echo "<pre>";
// print_r($data);
   
        
        foreach($data as $row=>$value){
            $name=strstr($value,'-',true);
            $dup=mysqli_query($conn,"SELECT * FROM `Brands` WHERE name='$name'");
            if(mysqli_num_rows($dup)>0){
                echo '<script>alert("Brands alraedy in database")</script>';
                break;
                
            }
            else{
            
            $sql="INSERT INTO `Brands`(`name`) VALUES ('".$name."')";
            $result=mysqli_query($conn,$sql);
            }
              
        }
        if($result){
            echo "Brands saved successfully </br>";
            }
        else{
            echo "Brands are not saved </br>";
            }

        }

// // //////////////////////////////////////////// Models Scraping////////////////////////////////////////////////////////////////////////////////////////////
function Models(){
$html1 = file_get_html('https://www.gsmarena.com/acer-phones-59.php');
        foreach($html1->find('div.makers a') as $link1) {
            $data1[]=$link1->href;
        }
        foreach($html1->find('div.makers a img') as $link2) {
            $data2[]=$link2->src ;
        }
        $model_names=count($data1);
        $model_img=count($data2);
        if($model_names==$model_img){
            for($x=0;$x<$model_names;$x++){
                $str[] = "('{$data1[$x]}','{$data2[$x]},38')";
                $md=$data1[$x];
                $img=$data2[$x];
                $model_name=strstr($md,'-',true);
                $dup1=mysqli_query($conn,"SELECT * FROM `models` WHERE name='$model'");
                if(mysqli_num_rows($dup)>0){
                    
                echo '<script>alert("Models alraedy in database")</script>';
                break;

                }
                else{

                $sql1="INSERT INTO `models`(`name`, `image`, `brand_id`) VALUES ('".$model_name."','".$img."','1')";
                $result2=mysqli_query($conn,$sql1);
                }
                
            }
            if($result2){
                echo "Models saved successfully </br>";
            }
            else{
                echo "Models are not saved </br>";
            }
            
        }
    }
// //////////////////////////// specification scraping//////////////////////////////////////////
    function heading(){        
$html2 = file_get_html('https://www.gsmarena.com/huawei_p50_pocket-11280.php');

// For Headings

foreach($html2->find('div#specs-list table tr th') as $link6) {
    $data5[]=$link6->innertext ;
   
}
}
// ////////////////////////For Sub Headings /////////////////////
function sub_heading(){
$html5 = file_get_html('https://www.gsmarena.com/huawei_p50_pocket-11280.php');

foreach($html5->find('div#specs-list table tr td.ttl a') as $link8) {
    
    
    $data6[]=$link8->innertext ;
    
} 
}

// ///////////////////////////For Data/////////////////////////

function data(){
$html6 = file_get_html('https://www.gsmarena.com/huawei_p50_pocket-11280.php');

foreach($html6->find('div#specs-list table tr td.nfo') as $link9) {
    
    
    $data9[]=$link9->innertext ;
    
} 


// echo "<pre>";
// print_r($data9);
$network_data=array_slice($data9,0,8);
$launch_data=array_slice($data9,8,2);
$body_data=array_slice($data9,10,3);
$display_data=array_slice($data9,13,4);
$plateform_data=array_slice($data9,17,4);
$memory_data=array_slice($data9,21,2);
$main_camera_data=array_slice($data9,23,3);
$selfie_camera_data=array_slice($data9,26,3);
$sound_data=array_slice($data9,29,2);
$comms_data=array_slice($data9,31,6);
$feature_data=array_slice($data9,37,2);
$battery_data=array_slice($data9,39,2);
$misc_data=array_slice($data9,41,3);
$tests_data=array_slice($data9,44,5);


///////////////////////// network///////////////////

function network(){
$two_g=array_slice($network_data,1,2);
$three_g=array_slice($network_data,3,2);
$four_g=array_slice($network_data,5,2);
$g_2= implode(",", $two_g);
$g_3= implode(",", $three_g);
$g_4= implode(",", $four_g);


$i=0;

foreach($network_data as $value){
    ${'network'.$i} = $value;
    $i++;
    }
    echo "<pre>";
    print_r($two_g);
    echo $g_2;

   
$network_sql="INSERT INTO `network`(`model_id`, `technology`, `2g_band`, `3g_band`, `4g_band`, `speed`) VALUES ('2','".$network0."','".$g_2."','".$g_2."','".$g_2."','".$network7."')";
$network_result=mysqli_query($conn,$network_sql);
    
if($network_result){
    echo "network submited successfully";
}
else{
    echo "network not submited";

}
}

// ////////////////////////////////launch////////////////////////////
function launch(){
$j=0;
foreach($launch_data as $value1){
    ${'launch'.$j} = $value1;
    $j++;
    }
    
    $launch_sql="INSERT INTO `launch`(`model_id`, `announced`, `status`) VALUES ('2','".$launch0."','".$launch1."')";
    $launch_result=mysqli_query($conn,$launch_sql);
        
    if($launch_result){
        echo "launch_result submited successfully";
    }
    else{
        echo "launch_result not submited";
    
    }
}
    /////////////////////// body////////////////////////
function body(){
    $k=0;
    foreach($body_data as $value2){
        ${'body'.$k} = $value2;
        $k++;
        }
        
        $body_sql="INSERT INTO `body`(`model_id`, `dimensions`, `weight`, `sim`) VALUES ('2','".$body0."','".$body1."','".$body2."')";
        $body_result=mysqli_query($conn,$body_sql);
            
        if($body_result){
            echo "body_result submited successfully";
        }
        else{
            echo "body_result not submited";
        
        }

    }
    /////////////////// Display///////////////////
function display(){
 $l=0;
    foreach($display_data as $value3){
        ${'display'.$l} = $value3;
        $l++;
        }
       
        $display_sql="INSERT INTO `display`(`model_id`, `type`, `size`, `resolution`) VALUES ('2','".$display0."','".$display1."','".$display2."')";
        $display_result=mysqli_query($conn,$display_sql);
            
        if($display_result){
            echo "display_result submited successfully";
        }
        else{
            echo "display_result not submited";
        
        }
    }

    //////////////////////// PlateForm//////////////////////////
function plateform(){
    $m=0;
        foreach($plateform_data as $value4){
            ${'plateform'.$m} = $value4;
            $m++;
            }
            
            $plateform_sql="INSERT INTO `plateform`(`model_id`, `OS`, `chipset`, `CPU`, `GPU`) VALUES ('2','".$plateform0."','".$plateform1."','".$plateform2."','".$plateform3."')";
            $plateform_result=mysqli_query($conn,$plateform_sql);
                
            if($plateform_result){
                echo "plateform_result submited successfully";
            }
            else{
                echo "plateform_result not submited";
            
            }
        }

    ////////////////////////// Memory/////////////////////////////

function memory(){
    $n=0;
    foreach($memory_data as $value5){
        ${'memory'.$n} = $value5;
        $n++;
        }
        
        $memory_sql="INSERT INTO `memory`(`model_id`, `card_slot`, `internal`) VALUES ('2','".$memory0."','".$memory1."')";
        $memory_result=mysqli_query($conn,$memory_sql);
            
        if($memory_result){
            echo "memory_result submited successfully";
        }
        else{
            echo "memory_result not submited";
        
        }

    }
    // /////////////////////////Main Camera////////////////////////
function main_camera(){
    $o=0;
    foreach($main_camera_data as $value6){
        ${'main_camera'.$o} = $value6;
        $o++;
        }
       
        $main_camera_sql="INSERT INTO `main_camera`(`model_id`, `triple`, `features`, `video`) VALUES ('2','".$main_camera0."','".$main_camera1."','".$main_camera2."')";
        $main_camera_result=mysqli_query($conn,$main_camera_sql);
            
        if($main_camera_result){
            echo "main_camera_result submited successfully";
        }
        else{
            echo "main_camera_result not submited";
        
        }
    }
        //////////////////////// Selfie Camera/////////////////////////
function selfie_camera(){
        $p=0;
        foreach($selfie_camera_data as $value7){
            ${'selfie_camera'.$p} = $value7;
            $p++;
            }
           
            $selfie_camera_sql="INSERT INTO `selfie_camera`(`model_id`, `single`, `features`, `video`) VALUES ('2','".$selfie_camera0."','".$selfie_camera1."','".$selfie_camera2."')";
            $selfie_camera_result=mysqli_query($conn,$selfie_camera_sql);
                
            if($selfie_camera_result){
                echo "selfie_camera_result submited successfully";
            }
            else{
                echo "selfie_camera_result not submited";
            
            }
        }
        //////////////////////// Sound//////////////////////////////
function sound(){
        $q=0;
        foreach($sound_data as $value8){
            ${'sound'.$q} = $value8;
            $q++;
            }
            
            $sound_sql="INSERT INTO `sound`(`model_id`, `loudspeaker`, `jack`) VALUES ('2','".$sound0."','".$sound1."')";
            $sound_result=mysqli_query($conn,$sound_sql);
                
            if($sound_result){
                echo "sound_result submited successfully";
            }
            else{
                echo "sound_result not submited";
            
            }

        }
        ///////////////////////////// Comms/////////////////////////////
function comms(){
        $r=0;
        foreach($comms_data as $value9){
            ${'comms'.$r} = $value9;
            $r++;
            }
            
            $comms_sql="INSERT INTO `comms`(`model_id`, `WLAN`, `bluetooth`, `GPS`, `NFC`, `radio`, `USB`) VALUES ('2','".$comms0."','".$comms1."','".$comms2."','".$comms3."','".$comms4."','".$comms5."')";
            $comms_result=mysqli_query($conn,$comms_sql);
                
            if($comms_result){
                echo "comms_result submited successfully";
            }
            else{
                echo "comms_result not submited";
            
            }

        }
        // ///////////////////////////Features/////////////////////////////////
function features(){
        $s=0;
        foreach($feature_data as $value10){
            ${'feature'.$s} = $value10;
            $s++;
            }
            $f_4= implode(",", $feature_data);
          
            $feature_sql="INSERT INTO `features`(`model_id`, `sensors`) VALUES ('2','".$f_4."')";
            $feature_result=mysqli_query($conn,$feature_sql);
                
            if($feature_result){
                echo "feature_result submited successfully";
            }
            else{
                echo "feature_result not submited";
            
            }
        }
            //////////////////////////// Battery/////////////////////////////////////
function battery(){
            $t=0;
            foreach($battery_data as $value11){
                ${'battery'.$t} = $value11;
                $t++;
                }
                
                $batter_sql="INSERT INTO `battery`(`model_id`, `type`, `charging`) VALUES ('2','".$battery0."','".$battery1."')";
                $batter_result=mysqli_query($conn,$batter_sql);
                    
                if($batter_result){
                    echo "batter_result submited successfully";
                }
                else{
                    echo "batter_result not submited";
                
                }
            }
                //////////////////////////// Misc/////////////////////////////////////
function misc(){
                $u=0;
                foreach($misc_data as $value12){
                    ${'misc'.$u} = $value12;
                    $u++;
                    }
                   
                    $misc_sql="INSERT INTO `misc`(`model_id`, `colors`, `models`, `price`) VALUES ('2','".$misc0."','".$misc1."','".$misc2."')";
                    $misc_result=mysqli_query($conn,$misc_sql);
                        
                    if($misc_result){
                        echo "misc_result submited successfully";
                    }
                    else{
                        echo "misc_result not submited";
                    
                    }
                }

                // ////////////////////////////////Tests//////////////////////////////////
function test(){                
                $v=0;
                foreach($tests_data as $value13){
                    ${'tests'.$v} = $value13;
                    $v++;
                    }
                   
                    $test_sql="INSERT INTO `tests`(`model_id`, `performance`, `display`, `camera`, `loudspeaker`, `batterylife`) VALUES ('2','".$tests0."','".$tests1."','".$tests2."','".$tests3."','".$tests4."')";
                    $test_result=mysqli_query($conn,$test_sql);
                        
                    if($test_result){
                        echo "test_result submited successfully";
                    }
                    else{
                        echo "test_result not submited";
                    
                    }
                }
            }

            


// /////////////////////////////////////////////// For whole data//////////////////////////////////////////////////////////////////////////////////////////////

function specifications(){


        $network=$html2->find('div#specs-list table',0)->plaintext;
        $launch=$html2->find('div#specs-list table',1)->plaintext;
        $body=$html2->find('div#specs-list table',2)->plaintext;
        $display=$html2->find('div#specs-list table',3)->plaintext;
        $plateform=$html2->find('div#specs-list table',4)->plaintext;
        $memory=$html2->find('div#specs-list table',5)->plaintext;
        $main_camera=$html2->find('div#specs-list table',6)->plaintext;
        $nselfie_camera=$html2->find('div#specs-list table',7)->plaintext;
        $sound=$html2->find('div#specs-list table',8)->plaintext;
        $comms=$html2->find('div#specs-list table',9)->plaintext;
        $features=$html2->find('div#specs-list table',10)->plaintext;
        $battery=$html2->find('div#specs-list table',11)->plaintext;
        $misc=$html2->find('div#specs-list table',12)->plaintext;

        echo $sql2="INSERT INTO `specifications`(`model_id`, 
        `name`, `network`, 
        `launch`, `body`, `display`, 
        `plateform`, `memory`, 
        `main_camera`, `selfie_camera`, 
        `sound`, `comms`, `features`, 
        `battery`, `misc`) 
        VALUES ('2','Huawei P50 Pocket','".$network."','".$launch."','".$body."','".$display."','".$plateform."','".$memory."','".$main_camera."','".$nselfie_camera."','".$sound."','".$comms."','".$features."','".$battery."','".$misc."')";
        $result3=mysqli_query($conn,$sql2);

        if($result3){
            echo "specifications saved successfully </br>";
        }
        else{
            echo "specifications  are not saved </br>";
        }
    }
} 
    $call=new scrap();
    $call->data();   
?>