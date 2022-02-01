<!--
    * v_assessor_management
    * display for assessor management by add or delete information
    * @input  -
    * @output -
    * @author Thitima Popila
    * Create date 2565-01-25   
    * Update date 2565-02-01
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- CSS -->
    <style>
        #list_table td,
        #list_table th {
            padding: 12px;
            text-align: center;
        }

        #list_table tr:nth-child(even) {
            background-color: #e9ecef;
        }

        #list_table tr:hover {
            background-color: #adb5bd;
        }

        #card_radius {
            border-radius: 20px;
            width: auto;
            min-height: 300px;
        }

        #list_table {
            width: 98%;
            margin-top: 20px;
            margin-left: 10px;
        }

        .button_size {
            /* width: 5px; */
            height: 40px;
            font-size: 12px;
            text-align: center;
        }
    </style>
    <!-- End CSS -->

    <!-- Start Conten Assessor Management -->
    <div class="container-fluid py-4">
        <div class="card-header">
            <!-- Title page -->
            <h2>Assessor Management (จัดการกรรมการ)</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">

                    <!-- ปุ่มดำเนินการเพิ่ม -->
                    <main class="main-content position-relative max-height-vh-100 h-100 ">
                        <!-- Navbar -->
                        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl"
                            id="navbarBlur" navbar-scroll="true">
                            <div class="container-fluid py-1 px-3">
                                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                        <div class="input-group">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-info btn-block mb-3"
                                                data-bs-toggle="modal" data-bs-target="#ModalAddGroup">
                                                <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Group
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    <!-- ปุ่มดำเนินการเพิ่ม  -->

                        <!-- Start content in table -->
                        <div class="card-body px-0 pt-0 pb-2">
                            <table class="table align-items-center" id="list_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Group</th>
                                        <th>Group Name</th>
                                        <th>Promote</th>
                                        <th>Type Evaluation </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T2</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">GM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. General Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Type 2</h6>
                                                <p class="text-xs text-secondary mb-0">(2 Round evalution)</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- Start button trigger modal edit -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                                <!-- ปุ่มดำเนินการแก้ไข -->
                                                <button type="button"
                                                    class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                    <i class="fas fa-edit me-2"></i>Edit
                                                </button>
                                            </a>
                                            <!-- End button trigger modal edit-->

                                            <!-- Start button trigger modal delete -->
                                            <!-- ปุ่มดำเนินการลบ -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete
                                            </button>
                                            <!-- End button trigger modal delete -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">2</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T3</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">AGM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Assistant General Manager
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Type 2</h6>
                                                <p class="text-xs text-secondary mb-0">(2 Round evalution)</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- Start button trigger modal edit -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                                <!-- ปุ่มดำเนินการแก้ไข -->
                                                <button type="button"
                                                    class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                    <i class="fas fa-edit me-2"></i>Edit
                                                </button>
                                            </a>
                                            <!-- End button trigger modal edit-->

                                            <!-- Start button trigger modal delete -->
                                            <!-- ปุ่มดำเนินการลบ -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete
                                            </button>
                                            <!-- End button trigger modal delete -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">3</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T3</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">MGR</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Type 1</h6>
                                                <p class="text-xs text-secondary mb-0">(1 Round evalution)</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- Start button trigger modal edit -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                                <!-- ปุ่มดำเนินการแก้ไข -->
                                                <button type="button"
                                                    class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                    <i class="fas fa-edit me-2"></i>Edit
                                                </button>
                                            </a>
                                            <!-- End button trigger modal edit-->

                                            <!-- Start button trigger modal delete -->
                                            <!-- ปุ่มดำเนินการลบ -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete
                                            </button>
                                            <!-- End button trigger modal delete -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">4</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T5</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Assistant Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Type 1</h6>
                                                <p class="text-xs text-secondary mb-0">(1 Round evalution)</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                           <!-- Start button trigger modal edit -->
                                           <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                                <!-- ปุ่มดำเนินการแก้ไข -->
                                                <button type="button"
                                                    class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                    <i class="fas fa-edit me-2"></i>Edit
                                                </button>
                                            </a>
                                            <!-- End button trigger modal edit-->

                                            <!-- Start button trigger modal delete -->
                                            <!-- ปุ่มดำเนินการลบ -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete
                                            </button>
                                            <!-- End button trigger modal delete -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End content in table -->
                </div>
                <!-- End div card -->
            </div>
            <!-- End div col-12 -->
        </div>
        <!-- End div row -->
    </div>
     <!-- End Conten Assessor Management -->
</body>
</html>

<!-- Start modal add group assessor -->
<div class="modal fade" id="ModalAddGroup" tabindex="-1" role="dialog" aria-labelledby="ModalAddGroupTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAddGroupLabel">Add Group</h5>&nbsp;
                <i class="fas fa-user-plus fa-1x"></i>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Group Name</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Input Group Name....">
                    </div>
                    <div class="form-group">
                        <!-- Group name -->
                        <label for="recipient-name" class="col-form-label">Level</label>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>Choose level please...</option>
                            <option value="1">T2</option>
                            <option value="2">T3</option>
                            <option value="3">T4</option>
                            <option value="4">T5</option>
                            <option value="5">T6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!-- Position to promote -->
                        <label for="recipient-name" class="col-form-label">Select Position To Promote</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Senior Specialist</label>
                            <br>
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Supervisor</label>
                            <br>
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked">Senior staff</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Type evaluation -->
                        <label for="recipient-name" class="col-form-label">Type Evaluation</label>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>Choose type please...</option>
                            <option value="1">Type 1 (1 Round Evaluation)</option>
                            <option value="2">Type 2 (2 Round Evaluation)</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- ปุ่มปิด modal -->
                <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management'; ?>">
                    <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                </a>
                <!-- ปุ่มบันทึก -->
                <a href="<?php echo site_url() . ''; ?>">
                    <button type="button" class="btn bg-gradient-success">Submit</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End modal add group assessor -->

<!-- Start modal delete group assessor -->
<div class="modal fade" id="ModalDeleteGroup" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteGroupTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="col-12 text-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <div>
                        <i class="fas fa-exclamation-triangle fa-8x" style="color:#FBD418"></i>
                    </div>
                    <h4 class="text-gradient text-danger mt-4">Confirm Delete Group?</h4>
                </div>
            </div>
            <div class="modal-footer">
                <!-- ปุ่มยกเลิกการลบ -->
                <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management'; ?>">
                    <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Cancel</button>
                </a>
                <!-- ปุ่มยืนยันการลบ -->
                <a href="<?php echo site_url() . ''; ?>">
                    <button type="button" class="btn bg-gradient-success">Confirm</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End modal delete group assessor -->

<!-- JavaScript -->
    <!-- Data Table -->
    <script>
        $(document).ready(function() {
            $("#list_table").DataTable();
        });
    </script>
    <!-- End Data Table -->
<!-- End  JavaScript -->
