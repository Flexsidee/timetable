<?php include'header.php'; ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Lecturers Details</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="records" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr class="table-info">
                                                    <th>#</th>
                                                    <th>Surname</th>
                                                    <th>Bank Name</th>
                                                    <th>Account Number</th>
                                                    <th>Email</th>
                                                    <th>Telephone Number</th>
                                                    <th>Save</th>
                                                    <th>Delete Record</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                    $sn=0;
                                                    $sql =mysqli_query($db, "select * from Lecturer order by surname");
                                                    while($lecturer = $sql -> fetch_assoc()){
                                                        // $address= mysqli_fetch_assoc(mysqli_query($db, "select * from adress where address_id=". $lecturer['address_id']));
                                                        $sn++;
                                                ?>
                                                <tr>
                                                    <form action="actions/edit_lecturer_p.php" method="POST">
                                                        <input type="hidden" name="lecturer_id"
                                                            value="<?php echo $lecturer['lecturer_id']; ?>">
                                                        <td><?php echo $sn; ?></td>

                                                        <td>
                                                            <input type="text" class="form-control" name="sname"
                                                                value="<?php echo $lecturer['surname']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="bank_name"
                                                                value="<?php echo $lecturer['bank_name']; ?>" >
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="acct_number"
                                                                value="<?php echo $lecturer['acct_number']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="email" value="<?php echo $lecturer['email']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="tel" value="<?php echo $lecturer['tel']; ?>">
                                                        </td>
                                                        <!-- <td>
                                                            <select class="form-control" id="row-1-office"
                                                                name="address">
                                                                <option value="<?php #echo $address['address_id']; ?>">
                                                                    <?php #echo $address['address_name']; ?></option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="row-1-age"
                                                                name="staff_id"
                                                                value="<?php #echo $lecturer['staff_id']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="row-1-age"
                                                                name="fname"
                                                                value="<?php #echo $lecturer['firstname']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="row-1-age"
                                                                name="oname"
                                                                value="<?php #echo $lecturer['othername']; ?>">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="row-1-age"
                                                                name="gender" value="<?php 
                                                            // if($lecturer['gender']=="M"){
                                                            //     echo "Male";
                                                            // }else{
                                                            //     echo "Female";
                                                            // }
                                                         ?>">
                                                        </td> -->
                                                        <td><input type="submit" value="save" class="btn-primary"></td>
                                                        <td><input type="button"
                                                                id="<?php echo $lecturer['lecturer_id']; ?>"
                                                                onclick="del(<?php echo $lecturer['lecturer_id']; ?>)"
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
<script type="text/javascript">
    function del(id) {
        var info = 'id=' + id;
        if (confirm("Are you sure you want to delete this record?")) {
            var html = $.ajax({
                type: "GET",
                url: "actions/edit_lecturer_p.php",
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