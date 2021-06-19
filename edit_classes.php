<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Class Population</h5>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive dt-responsive">
                            <table class="table table-striped table-bordered table-hover nowrap">
                                <thead>
                                    <tr class="table-danger">
                                        <th>#</th>
                                        <th>Deparment</th>
                                        <th>Level</th>
                                        <th>Population</th>
                                        <th>Save</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                                $sn=0;
                                                $sql =mysqli_query($db, "select * from class order by department_id");
                                                while($classes = $sql -> fetch_assoc()){ 
                                                    $dept=mysqli_fetch_assoc(mysqli_query($db, "select * from department where department_id=".$classes['department_id']." order by department_name"));
                                                    $level=mysqli_fetch_assoc(mysqli_query($db, "select * from level where level_id=".$classes['level_id'])); 
                                                    $sn++;
                                            ?>
                                    <tr>
                                        <form action="actions/edit_classes_p.php" method="post">
                                            <input type="hidden" value="<?php echo $classes['class_id']; ?>"
                                                name="class_id">
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $dept['department_name']; ?></td>
                                            <td><?php echo $level['level_name']; ?></td>
                                            <td>
                                                <input type="text" name="population"
                                                    value="<?php echo $classes['population']; ?>">
                                            </td>
                                            <td>
                                                <input type="submit" value="save" class="btn btn-primary">
                                            </td>
                                            <td>
                                                <input type="button" value="Del" class="btn btn-danger"
                                                    id="<?php echo $classes['class_id']; ?>"
                                                    onclick="del(<?php echo $classes['class_id']; ?>)">
                                            </td>
                                        </form>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Deparment</th>
                                        <th>Level</th>
                                        <th>Population</th>
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
                url: "actions/edit_classes_p.php",
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