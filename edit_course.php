<?php include'header.php'; ?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit courses</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered table-hover nowrap" >
                                        <thead>
                                            <tr class="table-info">
                                                <th>#</th>
                                                <th>Course Code</th>
                                                <th>Course Title</th>
                                                <th>Course Unit</th>
                                                <th>Semester</th>
                                                <th>Department</th>
                                                <th>Level</th>
                                                <th>Save</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sn=1;
                                                $sql =mysqli_query($db, "select * from course order by course_code");
                                                while($course = $sql -> fetch_assoc()){
                                                    $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from department where department_id=".$course['department_id']));
                                                    $semester=mysqli_fetch_assoc(mysqli_query($db, "select * from semester where semester_id=".$course['semester_id'])); 
                                                    $level=mysqli_fetch_assoc(mysqli_query($db, "select * from level where level_id=".$course['level_id'])); 
                                            ?>
                                            <tr>
                                                <form action="actions/edit_courses_p.php" method="post">
                                                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>" >
                                                    <td><?php echo $sn++;?></td>
                                                    <td>
                                                        <input type="text" name="course_code" value="<?php echo $course['course_code']; ?>" >
                                                    </td>
                                                    <td>
                                                        <input type="text" name="course_title" value="<?php echo $course['course_title']; ?>" >
                                                    </td>
                                                    <td>
                                                        <input type="text" name="course_unit" value="<?php echo $course['course_unit']; ?>" >
                                                    </td>
                                                    <td><?php echo $semester['semester_name']; ?></td>
                                                    <td><?php echo $dept['department_name']; ?></td>
                                                    <td><?php echo $level['level_name']; ?></td>
                                                    <td>
                                                        <input type="submit" value="save" class="btn btn-primary">
                                                    </td>
                                                    <td>
                                                        <input type="button" value="Del" id="<?php echo $course['course_id']; ?>" onclick="del(<?php echo $course['course_id']; ?>)" class="btn btn-danger" style="padding: 10px; margin-left:20px;">
                                                    </td>
                                                </form>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Course Code</th>
                                                <th>Course Title</th>
                                                <th>Course Unit</th>
                                                <th>Semester</th>
                                                <th>Department</th>
                                                <th>Level</th>
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
                url: "actions/edit_courses_p.php",
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