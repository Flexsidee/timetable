<?php include'header.php'; ?>
<script src='fmUpload.js' type="text/javascript"></script>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Combine courses</h4>
                                                        <span>Fill below form to add a lecture</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Lectures</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add Lecture</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-lg-12 col-xl-12">
                                                
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add a Lecture</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="actions/add_lecture_p.php" method="POST">
                                                            <div class="form-group row">
                                                                <label for="" class="col-sm-2 col-form-label">Select Department</label>
                                                                <div class="col-sm-10 m-b-5">
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
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-right">
                                                                <button type="submit" onclick="return add_course()"
                                                                    class="btn btn-primary m-r-10">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <table id="" class="table table-striped table-hover table-bordered nowrap">
                                                    <thead>
                                                        <tr class="table-primary">
                                                            <th>#</th>
                                                            <th>Course</th>
                                                            <th>Course Title</th>
                                                            <th>Department</th>
                                                            <th>Level</th>
                                                            <th>Department Size</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="combined_table">
                                                    </tbody>
                                                </table>   
                                                <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-sm-6 text-left">
                                                                <h5>Total Amount of studetns for the class= <span id="total" class="text text-primary">0000</span></h5>
                                                            </div>
                                                            <div class="col-sm-6 text-right">
                                                                <button type="submit"
                                                                    class="btn btn-primary m-r-10" onclick="return combined_courses()">Combine All</button>
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
    </div>
<?php include'footer.php'; ?>
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
//    i("course").addEventListener('change', function(e){dt.level_id=this.value; getCourses();}, false);
    $(function(e){
//        i("OK");
        //alert("OK");
    })
    function load(){
        i("combined_table").innerHTML=combined.map((cc, inv)=>"<tr><td>"+(inv+1)+"</td><td>"+cc.course_code+"</td><td>"+cc.course_title+"</td><td>"+cc.dept_code+"</td><td>"+cc.level_name+"</td><td>"+cc.population+"</td><td><button onclick='return deleted("+cc.course_id+")' class='btn btn-danger'>Delete<i class='fa-trash'></></button></td></tr>").join(" ");
        total=0;
        combined.map(cc=>{total+= parseInt(cc.population)});
        i('total').innerHTML=total;
    }
    function add_course(){
        course_id = i("course").value;
        if(course_id >0){
            selected_course= load_course.filter(cr=>{return cr.course_id==course_id})[0];
            if(combined.filter(cr=>{return cr.department_id==selected_course.department_id}).length>0){
                alert('Two courses from the same department cannot be added');
            }else{                
                combined.unshift(selected_course);
                load();
            }
           // alert(JSON.stringify(combined));
        }else{
            alert("Invalid couse selected.");
        }
        return false;
    }
    function deleted(course_id){
        combined = combined.filter(cd=>{return cd.course_id != course_id})
        load();
    }
    function combined_courses(){
        //console.log(c)
        sendData('actions/add_lecture_p.php', {data:combined}).then(resp=>{
            if(resp.status== 1){
                alert("The courses were combined successfully");
                 window.location.replace("add_lecture.php");
            }
            console.log(resp);
        }).catch(err=>{alert(err)})
        return false;
    }
</script>
