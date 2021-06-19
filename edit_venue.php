<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit venues</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-striped table-bordered table-hover nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Venue Name</th>
                                                    <th>Student Capacity</th>
                                                    <th>Laboratory</th>
                                                    <th>Save </th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                            $sn=0;
                                            $sql =mysqli_query($db, "select * from venue order by venue_name");
                                            while($venue = $sql -> fetch_assoc()){
                                                $sn++; 
                                            ?>
                                                <tr>
                                                    <form action="actions/edit_venues_p.php" method="POST">
                                                        <input type="hidden" name="venue_id"
                                                            value="<?php echo $venue['venue_id']; ?>">
                                                        <td><?php echo $sn; ?></td>
                                                        <td>
                                                            <input type="text" name="venue_name" class="form-control"
                                                                value="<?php echo $venue['venue_name']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="capacity" class="form-control"
                                                                value="<?php echo $venue['capacity']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="exclusive" class="form-control"
                                                                value="<?php echo $venue['exclusive']; ?>">
                                                        </td>
                                                        <td><input type="submit" value="save" class="btn-primary"></td>
                                                        <td><input type="button" id="<?php echo $venue['venue_id']; ?>"
                                                                onclick="del(<?php echo $venue['venue_id']; ?>)"
                                                                value="Del"
                                                                class="btn btn-danger waves-effect waves-light"
                                                                style="padding: 5px; margin-left:20px;"></td>
                                                    </form>
                                                </tr>
                                                <?php } ?>
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
</div>
<script type="text/javascript">
    function del(id) {
        var info = 'id=' + id;
        if (confirm("Are you sure you want to delete this record?")) {
            var html = $.ajax({
                type: "GET",
                url: "actions/edit_venues_p.php",
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