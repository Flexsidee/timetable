<?php include'header.php'; ?>
<style>
</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="card">
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btnnn" class="table table-hover table-bordered nowrap" style="font-size: 60%; text-align:center;">
                                            <thead>
                                                <th>Days</th>
                                                <th>Level</th>
                                                <th>Department</th>
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
                                        <a class="btn btn-primary" id="printLink" href="print_tt_general.php">Print Timetable</a>
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
<?php include'footer_view.php'; ?>
<script type="text/javascript">
    $(function(e){
      lects=[];
      <?php include'show_days.php'; ?>
      sendData('pull_timetable.php', {}).then(resp=>{
            <?php include'resp.php'; ?>
            
            days.map(dy=>{

//alert(JSON.stringify())
                    resp['dept'].map(dept=>{
                    <?php include'lects_day.php'; ?>

                    
                })


                //            alert(JSON.stringify(resp));
        })


})
</script>
