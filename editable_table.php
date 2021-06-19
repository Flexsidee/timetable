<?php include'header.php'; ?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Editable Table</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Editable Table</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="page-body">
                        <!-- the table below should not be deleted, else, the next table wont work -->
                        <table  id="example-1"></table>

                        <div class="card">
                            <div class="card-header">
                                <h5>Edit With Button</h5>
                                <span>Click on buttons to perform actions</span>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example-2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First</th>
                                                <th>Last</th>
                                                <th>Nickname</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td class="tabledit-view-mode"><span
                                                        class="tabledit-span">Mark</span>
                                                    <input class="tabledit-input form-control input-sm"
                                                        type="text" name="First" value="Mark">
                                                </td>
                                                <td class="tabledit-view-mode"><span
                                                        class="tabledit-span">Otto</span>
                                                    <input class="tabledit-input form-control input-sm"
                                                        type="text" name="Last" value="Otto">
                                                </td>
                                                <td class="tabledit-view-mode"><span
                                                        class="tabledit-span">@mdo</span>
                                                    <select class="tabledit-input form-control input-sm"
                                                        name="Nickname" disabled=""
                                                        style="display:none;">
                                                        <option value="1">@mdo</option>
                                                        <option value="2">@fat</option>
                                                        <option value="3">@twitter</option>
                                                    </select>
                                                </td>
                                            </tr>
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
<?php include'footer_edit.php'; ?>