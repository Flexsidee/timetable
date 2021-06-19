<?php include'header.php'; ?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Departments</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered table-hover nowrap" >
                                    <thead>
                                        <tr class="table-primary">
                                            <th>#</th>
                                            <th>Department Name</th>
                                            <th>Department Code</th>
                                            <th>Save</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sn=0;
                                            $sql =mysqli_query($db, "select * from department order by department_name");
                                            while($dept = $sql -> fetch_assoc()){  $sn++;?>
                                        <tr>
                                            <form action="actions/edit_depts_p.php" method="post">
                                                <input type="hidden" name="department_id" value="<?php echo $dept['department_id']; ?>" >
                                                <td><?php echo $sn; ?></td>
                                                <td>
                                                    <input type="text" name="department_name" class="form-control" value="<?php echo $dept['department_name']; ?>" >
                                                </td>
                                                <td>
                                                    <input type="text" value="<?php echo $dept['dept_code']; ?>" name="dept_code" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="submit" value="save" class="btn btn-primary">
                                                </td>
                                                <td>
                                                    <input type="button" value="Del" id="<?php echo $dept['department_id']; ?>" onclick="del(<?php echo $dept['department_id']; ?>)" class="btn btn-danger" style="padding: 10px; margin-left:20px;">
                                                </td>
                                            </form>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>#</th>
                                            <th>Department Name</th>
                                            <th>Department Code</th>
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
                url: "actions/edit_depts_p.php",
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