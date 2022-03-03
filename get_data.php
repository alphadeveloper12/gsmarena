<?php
include("gsm_db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <?php
         $result2=mysqli_query($conn,"SELECT * FROM `network`");  
         while($row=mysqli_fetch_assoc($result2)){
           $technolody=$row['technology'];
           $g_2=$row['2g_band']; 
           $g_3=$row['3g_band']; 
           $g_4=$row['4g_band']; 
           $speed=$row['speed']; 
         }
         ?>

        <?php
         $result3=mysqli_query($conn,"SELECT * FROM `launch`");  
         while($row3=mysqli_fetch_assoc($result3)){
           $announced=$row3['announced']; 
           $status=$row3['status']; 
         }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">Network</th>
                <td>Technology</td>
                <td><?php echo $technolody; ?></td>
            </tr>
            <tr>
                <td>2G bands</td>
                <td><?php echo $g_2; ?></td>
            </tr>
            <tr class="tr-toggle">
                <td>3G bands</td>
                <td><?php echo $g_3; ?></td>
            </tr>
            <tr>
                <td>4G bands</td>
                <td> <?php echo $g_4; ?></td>
            </tr>
            <td>Speed</td>
            <td><?php echo $speed; ?></td>
            </tr>
        </table>

        <!-- Launch Table -->
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">LAUNCH</th>
                <td>Announced</td>
                <td><?php echo $announced; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo $status; ?></td>
            </tr>

        </table>
        <!-- Body Table -->
        <?php
         $result4=mysqli_query($conn,"SELECT * FROM `body`");  
         while($row4=mysqli_fetch_assoc($result4)){
           
           $dimensions=$row4['dimensions']; 
           $weight=$row4['weight']; 
           $sim=$row4['sim']; 
         
         }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">BODY </th>
                <td>Dimensions</td>
                <td><?php echo $dimensions; ?></td>
            </tr>
            <tr>
                <td>Weight</td>
                <td><?php echo $weight; ?></td>
            </tr>
            <tr>
                <td>SIM</td>
                <td><?php echo $sim; ?></td>
            </tr>

        </table>
        <!-- Display Table -->
        <?php
         $result5=mysqli_query($conn,"SELECT * FROM `display`");  
         while($row5=mysqli_fetch_assoc($result5)){
           
           $size=$row5['size']; 
           $type=$row5['type']; 

           $resolution=$row5['resolution']; 
           
         
         }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">DISPLAY </th>
                <td>Type</td>
                <td><?php echo $type; ?></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><?php echo $size; ?></td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td><?php echo $resolution; ?></td>
            </tr>

        </table>
        <!-- Plateform table -->
        <?php
         $result6=mysqli_query($conn,"SELECT * FROM `plateform`");  
         while($row6=mysqli_fetch_assoc($result6)){
           
           $OS=$row6['OS']; 
           $chipset=$row6['chipset']; 

           $CPU=$row6['CPU']; 
           $GPU=$row6['GPU']; 

           
         
         }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">PLATFORM </th>
                <td>OS</td>
                <td><?php echo $OS; ?></td>
            </tr>
            <tr>
                <td>Chipset</td>
                <td><?php echo $chipset; ?></td>
            </tr>
            <tr>
                <td>CPU</td>
                <td><?php echo $CPU; ?></td>
            </tr>
            <tr>
                <td>GPU</td>
                <td><?php echo $GPU; ?></td>
            </tr>

        </table>
        <!-- Memory Table -->
        <?php
         $result7=mysqli_query($conn,"SELECT * FROM `memory`");  
         while($row7=mysqli_fetch_assoc($result7)){
           
           $card_slot=$row7['card_slot']; 
           $internal=$row7['internal']; 
            }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">MEMORY </th>
                <td>Card Slot</td>
                <td><?php echo $card_slot; ?></td>
            </tr>
            <tr>
                <td>Internal</td>
                <td><?php echo $internal; ?></td>
            </tr>


        </table>
        <!-- Main camera Table -->
        <?php
         $result8=mysqli_query($conn,"SELECT * FROM `main_camera`");  
         while($row8=mysqli_fetch_assoc($result8)){
           
           $triple=$row8['triple']; 
           $features=$row8['features']; 
           $video=$row8['video']; 

            }
         ?>
        <table cellspacing="0" class="table">
            <tr>
                <th rowspan="15" scope="row">MAIN CAMERA </th>
                <td>Triple</td>
                <td><?php echo $triple; ?></td>
            </tr>
            <tr>
                <td>Features</td>
                <td><?php echo $features; ?></td>
            </tr>
            <tr>
                <td>Video</td>
                <td><?php echo $video; ?></td>
            </tr>
            <!-- Selfie camera table -->
            <?php
         $result9=mysqli_query($conn,"SELECT * FROM `selfie_camera`");  
         while($row9=mysqli_fetch_assoc($result9)){
           
           $single=$row9['single']; 
           $features1=$row9['features']; 
           $video1=$row9['video']; 

            }
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">SELFIE CAMERA </th>
                    <td>Single</td>
                    <td><?php echo $single; ?></td>
                </tr>
                <tr>
                    <td>Features</td>
                    <td><?php echo $features1; ?></td>
                </tr>
                <tr>
                    <td>Video</td>
                    <td><?php echo $video1; ?></td>
                </tr>


            </table>
            <!-- Sound Table -->
            <?php
         $result10=mysqli_query($conn,"SELECT * FROM `sound`");  
         while($row10=mysqli_fetch_assoc($result10)){
           
           $loud_speaker=$row10['loudspeaker']; 
           $jack=$row10['jack']; 
           

            }
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">SOUND</th>
                    <td>Loud Speaker</td>
                    <td><?php echo $loud_speaker; ?></td>
                </tr>
                <tr>
                    <td>Jack</td>
                    <td><?php echo $jack; ?></td>
                </tr>



            </table>
            <!-- Commms table -->
            <?php
         $result11=mysqli_query($conn,"SELECT * FROM `comms`");  
         while($row11=mysqli_fetch_assoc($result11)){
           
           $WLAN=$row11['WLAN']; 
           $bluetooth=$row11['bluetooth']; 
           $GPS=$row11['GPS']; 
           $NFS=$row11['NFS']; 
           $radio=$row11['radio']; 
           $USB=$row11['USB']; 
}
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">Comms</th>
                    <td>WLAN</td>
                    <td><?php echo $WLAN; ?></td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td><?php echo $bluetooth; ?></td>
                </tr>
                <tr>
                    <td>GPS</td>
                    <td><?php echo $GPS; ?></td>
                </tr>
                <tr>
                    <td>NFS</td>
                    <td><?php echo $NFS; ?></td>
                </tr>
                <tr>
                    <td>Radio</td>
                    <td><?php echo $radio; ?></td>
                </tr>
                <tr>
                    <td>USB</td>
                    <td><?php echo $USB; ?></td>
                </tr>


            </table>
            <!-- Features -->
            <?php
         $result12=mysqli_query($conn,"SELECT * FROM `features`");  
         while($row12=mysqli_fetch_assoc($result12)){
           
           $sensors=$row12['sensors']; 
           
}
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">FEATURES</th>
                    <td>Sensors</td>
                    <td><?php echo $sensors; ?></td>
                </tr>



            </table>
            <!-- Battery -->
            <?php
         $result13=mysqli_query($conn,"SELECT * FROM `battery`");  
         while($row13=mysqli_fetch_assoc($result13)){
           
           $type1=$row13['type'];
           $charging=$row13['charging']; 

           
}
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">BATTERY</th>
                    <td>Type</td>
                    <td><?php echo $type1; ?></td>
                </tr>
                <tr>
                    <td>Charging</td>
                    <td><?php echo $charging; ?></td>
                </tr>


            </table>
            <!-- Misc Table -->
            <?php
         $result14=mysqli_query($conn,"SELECT * FROM `misc`");  
         while($row14=mysqli_fetch_assoc($result14)){
           
           $colors=$row14['colors'];
           $models=$row14['models']; 
           $price=$row14['price']; 


           
}
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">MISC</th>
                    <td>Colors</td>
                    <td><?php echo $colors; ?></td>
                </tr>
                <tr>
                    <td>Models</td>
                    <td><?php echo $models; ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><?php echo $price; ?></td>
                </tr>

            </table>
            <!-- Tests Table -->
            <?php
         $result15=mysqli_query($conn,"SELECT * FROM `tests`");  
         while($row15=mysqli_fetch_assoc($result15)){
           
           $performance=$row15['performance'];
           $display=$row15['display'];
           $camera=$row15['camera'];
           $loudspeaker=$row15['loudspeaker'];
           $batterylife=$row15['batterylife'];
      }
         ?>
            <table cellspacing="0" class="table">
                <tr>
                    <th rowspan="15" scope="row">TESTS</th>
                    <td>Performance</td>
                    <td><?php echo $performance; ?></td>
                </tr>
                <tr>
                    <td>Display</td>
                    <td><?php echo $display; ?></td>
                </tr>
                <tr>
                    <td>Camera</td>
                    <td><?php echo $camera; ?></td>
                </tr>
                <tr>
                    <td>loudspeaker</td>
                    <td><?php echo $loudspeaker; ?></td>
                </tr>
                <tr>
                    <td>BatteryLife</td>
                    <td><?php echo $batterylife; ?></td>
                </tr>

            </table>
    </div>
</body>

</html>