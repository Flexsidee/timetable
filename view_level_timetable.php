<?php include'header.php'; ?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

    <div class="main-body">
                <div class="row">

                    <div class="col-lg-12 col-xl-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h4>Select Level to view timetable</h4>
                            </div>
                            <div class="card-block">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Select Level</label>
                                        <div class="col-sm-10 m-b-5">
                                                <select name="class" id="class" class="form-control" required>
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
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" id="viewTimetable" 
                                            class="btn btn-primary m-r-10">View timetable</button>
                                    </div>
                                </div>
                            </div>
                        <div id="forTable" class="dt-responsive table-responsive">
                            <table id="basic-btnn" class="table table-striped table-hover table-bordered nowrap" style="font-size: 65%; text-align:center;">
                                <thead>
                                    <th>Days</th>
                                    <th>Level</th>
                                    <th>Dept</th>
                                    <th>8-9</th>
                                    <th>9-10</th>
                                    <th>10-11</th>
                                    <th>11-12</th>
                                    <th>12-1</th>
                                    <th>1-2</th>
                                    <th>2-3</th>
                                    <th>3-4</th>
                                    <th>4-5</th>
                                    <th>5-6</th>
                                </thead>
                                <tbody id='tbody'>

                                </tbody>
                            </table>     
                            <a class="btn btn-primary" id="printLink">Print Timetable</a>
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
    //$("#Table").style.display= "none";
    i("forTable").style.display= "none";
    $('#viewTimetable').click(function(){
        i("forTable").style.display= "block";
        var  levelId=$("#class").val();
        $('#printLink').attr('href', 'print_tt_level.php?levelId=' + $("#class").val());
 //alert(JSON.stringify())
show(levelId);
})
    $(function(e){
      sendData('pull_timetable.php', {}).then(resp=>{
        <?php include'resp.php'; ?>
                depts=resp['dept'];
        })
    })
    function show(levelId){
        cl=depts.filter(dept=>{return dept.level_id==levelId});
        i('tbody').innerHTML='';
        days.map(dy=>{
                    cl.map(dept=>{
                        <?php include'lects_day.php'; ?>
                    
                })

    }
    </script>
    