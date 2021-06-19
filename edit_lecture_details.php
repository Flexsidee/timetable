<?php include'header.php'; ?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">

                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Lecture name and duration of class</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered table-hover nowrap" id="basic-btn">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>#</th>
                                                <th>Class</th>
                                                <th>level</th>
                                                <th>Lecturer</th>
                                                <th>Duration (in hours)</th>
                                                <th>Class Size</th>
                                                <th>Save</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $sql =mysqli_query($db, "select * from vw_lecture_details_full order by combined_count desc");
                                                $sn= 0;
                                                while($lecture = $sql -> fetch_assoc()){ 
                                                    $lects=explode(',', $lecture['combined_list']);
                                                    $sn++;
                                                    ?>
                                                <tr>
                                                    <form action="actions/edit_lecture_details_p.php" method="post">
                                                        <input type="hidden" name="ldid" value="<?php echo $lecture['LDID']; ?>" >
                                                        <td><?php echo $sn; ?></td>
                                                        <td><?php 
                                                            $view= " ";
                                                            foreach($lects as $val){
                                                                $course=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where course_id=(select course_id from lecture where lecture_id=".$val.")"));   
                                                                $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where department_id=".$course['department_id'])); 
                                                                $level=mysqli_fetch_assoc(mysqli_query($db, "select * from vw_full_course where level_id=".$course['level_id'])); 
                                                                $view.=$course['course_code'].'('.$dept['dept_code'].'), ';
                                                            }
                                                            
                                                        echo substr($view, 0, -2);
                                                        ?></td>
                                                        <td><?php echo $level['level_name']; ?></td>
                                                        <td>
                                                            <select name="lecturer">
                                                                <option value="">--Select--</option>
                                                                <?php 
                                                                    $lecturer_sql= mysqli_query($db, "select * from lecturer order by surname");
                                                                    while($lecturer = $lecturer_sql -> fetch_assoc()){
                                                                ?>
                                                                <option value="<?php echo $lecturer['lecturer_id']; ?>">
                                                                <?php echo $lecturer['surname']; ?>
                                                                </option>
                                                                <?php } ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="duration" value="<?php echo $lecture['duration']; ?>" >
                                                        </td>
                                                        <td><?php echo $lecture['combined_population']; ?></td>
                                                        <td>
                                                            <input type="submit" value="save" class="btn btn-primary">
                                                        </td>
                                                        <td>
                                                            <input type="button" value="Del" id="<?php echo $lecture['LDID']; ?>" onclick="del(<?php echo $lecture['LDID']; ?>)" class="btn btn-danger" style="padding: 10px; margin-left:20px;">
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Class</th>
                                                <th>level</th>
                                                <th>Lecturer</th>
                                                <th>Duration (in hours)</th>
                                                <th>Class Size</th>
                                                <th>Save</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
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
</div>
<script type="text/javascript">
    function del(id) {
        var info = 'id=' + id;
        if (confirm("Are you sure you want to delete this record?")) {
            var html = $.ajax({
                type: "GET",
                url: "actions/edit_lecture_details_p.php",
                data: info,
                async: false,
                success: function () {
                    window.location.reload(true);
                }
            }).responseText;
        }
    }
</script>
<?php include'footer_view.php'; ?>