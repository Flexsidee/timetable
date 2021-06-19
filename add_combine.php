<?php include'header.php'; 
if(isset($_GET['combine_id'])){

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">

                        <div class="col-lg-12 col-xl-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Add a class to the combined list</h5>
                                </div>
                                 <div class="card-block">
                                    <form action="actions/add_combine_p.php" method="POST">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Select Department</label>
                                            <div class="col-sm-10 m-b-5">
                                                <input type="hidden" name="combined_id" value="<?php echo $_GET['combine_id']; ?>">
                                                <input type="hidden" name="course_id" value="" id="sendCourse">
                                                <select name="course" id="department" class="form-control" required>
                                                    <option value="0">Select</option>
                                                        <?php 
                                                            $sql= mysqli_query($db, "select * from department ORDER by department_name ASC");
                                                            while($department= $sql -> fetch_assoc()){
                                                        ?>
                                                    <option value="<?php echo $department['department_id']; ?>">
                                                        <?php echo $department['department_name'];?>
                                                    </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <label for="" class="col-sm-2 col-form-label">Select Level</label>
                                            <div class="col-sm-10 m-b-5">
                                                <select name="course" id="level" class="form-control" required>
                                                    <option value="0">Select</option>
                                                    <?php 
                                                        $sql= mysqli_query($db, "select * from level");
                                                        while($level= $sql -> fetch_assoc()){
                                                    ?>
                                                    <option value="<?php echo $level['level_id']; ?>">
                                                        <?php echo $level['level_name'];?>
                                                    </option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <label for="" class="col-sm-2 col-form-label">Select Course</label>
                                            <div class="col-sm-10 m-b-5">
                                                <select name="course" id="course" class="form-control" required>
                                                    <option value="0">Select</option>

                                                </select>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover nowrap" >
                                        <thead>
                                            <tr class="table-secondary">
                                                <th>Class</th>
                                                <th>Level</th>
                                                <th>Total Class Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql =mysqli_query($db, "select * from vw_lecture_population where combined_id=".$_GET['combine_id']);
                                            $sn= 0;
                                            while($lecture = $sql -> fetch_assoc()){ 
                                                $lects=explode(',', $lecture['combined_list']);
                                                ?>
                                            <tr>
                                                <input type="hidden" name="combined_id" value="<?php echo $lecture['combined_id']; ?>" >
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
                                                <td><?php echo $lecture['combined_population']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        </table>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-12" align="center">
                                                    <button type="submit" onclick="return add()"
                                                        class="btn btn-primary m-r-10">Add the selected course to the list</button>
                                                </div>
                                            </div>
                                        </div>
                                            </form>
                                </div>
                            </div>
                              <button class="btn btn-secondary" onclick="goBack()" style="padding: 10px 40px;">Go Back To Previous Page</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    dt={department_id:0, level_id:0};
    combined= [];
    load_course= [];
    i=elem=>{
        return document.getElementById(elem);
    }
    function getCourses(){
        if(dt.level_id>0 && dt.department_id>0){
            sendData('ajax_courses.php', dt).then(resp=>{
                load_course= resp;
               // console.log(resp);
                i("course").innerHTML="<option value='0'>--Select--</option>"
                i("course").innerHTML+=resp.map(cr=>"<option value='"+cr.course_id+"'>"+  cr.course_code+ ", "+cr.course_title+"</option>").join(" ");
            });
        }
    }
    i("department").addEventListener('change', function(e){dt.department_id=this.value; getCourses();}, false);
    i("level").addEventListener('change', function(e){dt.level_id=this.value; getCourses();}, false);
    function goBack(){
        history.back();
    }
    function add(){
        course_id = i("course").value;
        i("sendCourse").value=course_id;
        if(course_id >0){
            if(confirm("Are you sure you want to add this department from the class?")){
                i("submit").submit();
            }
        }else{
            alert("No couse selected.");
        }
        return false;
    }
</script>
<?php include'footer_view.php'; 
}else{
    header("location: edit_lectures.php");
}?>
