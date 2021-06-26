<?php 
//echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'},{day:3,day_name:'Thursday'}];";
//echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'}];";

include'db_conn.php';
$no_of_days= mysqli_fetch_array(mysqli_query($db, "SELECT MAX(day) AS max FROM lecture_schedule"));
if($no_of_days['max'] == 1){
    echo "days=[{day:1,day_name:'Saturday'}];";
}else if($no_of_days['max'] == 2){
    echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'}];";
}else if($no_of_days['max'] == 3){
    echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'},{day:3,day_name:'Thursday'}];";
}else if($no_of_days['max'] == 4){
    echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'},{day:3,day_name:'Thursday'},{day:4,day_name:'Wednesday'}];";
}else if($no_of_days['max'] == 5){
    echo "days=[{day:1,day_name:'Saturday'},{day:2,day_name:'Friday'},{day:3,day_name:'Thursday'},{day:4,day_name:'Wednesday']},{day:5,day_name:'Tuesday'}];";
}
?>