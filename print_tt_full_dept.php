<style>
    table{
        width: 100%;
    }
    table,tr,td,th{
        border: 2px black solid; 
        border-collapse: collapse;
        font-weight: bold;
        font-size: 80%;
        text-align: center;
    }
    td,th{
        padding: 10px;
    }
</style>
<div class="pcoded-content">
<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">

                    <div class="col-lg-12 col-xl-12">
                        
                        <div id="forTable" class="dt-responsive table-responsive">
                            <table>
                                <thead style="font-size: 120%">
                                    <th style="border: 2px black solid;">Days</th>
                                    <th style="border: 2px black solid;">Levels..</th>
                                    <th style="border: 2px black solid;">Dept</th>
                                    <th style="border: 2px black solid;">8-9</th>
                                    <th style="border: 2px black solid;">9-10</th>
                                    <th style="border: 2px black solid;">10-11</th>
                                    <th style="border: 2px black solid;">11-12</th>
                                    <th style="border: 2px black solid;">12-1</th>
                                    <th style="border: 2px black solid;">1-2</th>
                                    <th style="border: 2px black solid;">2-3</th>
                                    <th style="border: 2px black solid;">3-4</th>
                                    <th style="border: 2px black solid;">4-5</th>
                                    <th style="border: 2px black solid;">5-6</th>
                                </thead>
                                <tbody id='tbody'>

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
    //$("#Table").style.display= "none";
    i("forTable").style.display= "none";
      sendData('pull_timetable.php', {}).then(resp=>{
        <?php include'resp.php'; ?>
                depts=resp['dept'];
        }).finally(obj=>{
            show(<?php echo $_GET['deptId'] ?>);
    })
    function show(deptId){
        i("forTable").style.display= "block";
        cl=depts.filter(dept=>{return dept.department_id==deptId});
        i('tbody').innerHTML='';
        days.map(dy=>{
                    cl.map(dept=>{
                    <?php include'lects_day.php'; ?>
                })
        print()
        window.location.replace("view_full_dept_timetable.php");
    }
    </script>
    