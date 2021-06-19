<?php 
    include'db_conn.php'; 
    $out['status']=1;
    $out['LSID']=$_POST['period']['lecture']['LSID'];
    $out['from']=$_POST['period']['from'];
    $out['to']=$_POST['period']['to'];
    $out['day']=$_POST['period']['day'];
    $sql= "update lecture_schedule set start_time=".$out['from'].", end_time=".$out['to'].", day=".$out['day']." where LSID =".$out['LSID'];
    mysqli_query($db, $sql);
    $out['sql']=$sql;
    $out['err']=mysqli_error($db);
    echo json_encode($out);

?>