<?php include'header.php'; ?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="row">

<div class="col-lg-12 col-xl-12">
    <div id="forTable" class="dt-responsive table-responsive">
        <table id="basic-btn" class="table table-striped table-hover table-bordered nowrap" style="font-size: 100%; font-weight:bold;">
            <thead>
                <th>#</th>
                <th>Surname</th>
                <th>Bank Name</th>
                <th>Account Number</th>
                <th>Telephone</th>
                <th>Class</th>
            </thead>
            <tbody >
                <?php 
                    $sn =0;
                    $query= mysqli_query($db, "select * from vw_lecture_schedule_full order by lecturer_id asc");
                    while($lecture = $query -> fetch_assoc()){
                        $lects= explode(',', $lecture['combined_list']);
                        $sn++;
                ?>
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $lecture['surname']; ?></td>
                    <td><?php 
                            if(empty($lecture['bank_name'])){
                                echo "N/A";
                            }else{
                                echo $lecture['bank_name'];
                            }
                        ?></td>
                    <td><?php 
                            if(empty($lecture['acct_number'])){
                                echo "N/A";
                            }else{
                                echo $lecture['acct_number'];
                            }
                        ?></td>
                    <td><?php 
                        if(empty($lecture['tel'])){
                            echo "N/A";
                        }else{
                            echo $lecture['tel']; 
                        }
                    ?></td>
                    <td>
                        <?php 
                            $view= " ";
                            foreach($lects as $val){
                                $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                                $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
                            }
                                echo substr($view, 0, -2);  
                        ?>
                    </td>
                </tr>
                <?php } ?>
                <tfoot>
                    <th>#</th>
                    <th>Surname</th>
                    <th>Bank Name</th>
                    <th>Account Number</th>
                    <th>Telephone</th>
                    <th>Class</th>
                </tfoot>
            </tbody>
        </table>     
    </div>                           
    
</div>

</div>

</div>
</div>

    
</div>
</div>
</div>
</div>
</div>
</div>
<?php include'footer_view.php' ?>

<script>
    <?php include'show_days.php'; ?>
    lects=[];
    depts=[]
    i = elem => {
        return document.getElementById(elem);
    }
    $('#viewTimetable').click(function(){
        var  lecturerID=$("#class").val();
        i("class").value=lecturerID;
        $('#printLink').attr('href', 'print_tt_lecturer.php?lecturerId=' + lecturerID);
    })
    </script>
    