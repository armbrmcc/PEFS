<!--
    * v_assessor_management
    * display for assessor management by add or delete information
    * @input  -
    * @output -
    * @author Thitima Popila
    * Create date 2565-01-25   
    * Update date 
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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

    <!-- JavaScript -->
    <script>

    </script>

    <script type="text/javascript">
    function showhide() {
        var choices = document.getElementById('selectBoxx').value;
        var x = 'pstats',
            y = 'jdk';
        if (choices == 2) {
            x = 'jdk';
            y = 'pstats';
        }
        document.getElementById(y).style.display = 'none';
        document.getElementById(x).style.display = 'block';
    }
    </script>

    <!-- End JavaScript -->


    <div class="container-fluid py-4">
        <div class="card-header">
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


                        <!-- ช่องดำเนินการค้นหา -->
                        <!-- Navbar -->
                        <!-- <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
                            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl"
                                id="navbarBlur" navbar-scroll="true">
                                <div class="container-fluid py-1 px-3">
                                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                            <div class="input-group">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Search here...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav> -->
                        <!-- End Navbar -->




                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- <div class="table-responsive p-0"> -->
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
                                        
                                            <!-- Button trigger modal -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                            <button type="button"
                                                class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                <i class="fas fa-edit me-2"></i>Edit</button></a>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete</button>
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
                                            <!-- Button trigger modal -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                            <button type="button"
                                                class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                <i class="fas fa-edit me-2"></i>Edit</button></a>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete</button>
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
                                            <!-- Button trigger modal -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                            <button type="button"
                                                class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                <i class="fas fa-edit me-2"></i>Edit</button></a>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete</button>
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
                                            <!-- Button trigger modal -->
                                            <a href="<?php echo site_url() . 'Assessor_management/Assessor_management/show_assessor_management_detail'; ?>">
                                            <button type="button"
                                                class="btn btn-link text-warning text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                <i class="fas fa-edit me-2"></i>Edit</button></a>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#ModalDeleteGroup">
                                                <i class="far fa-trash-alt me-2"></i>Delete</button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <!-- </div> -->
                        </div>
                </div>

            </div>
        </div>
    </div>





</body>

</html>

<!-- Modal Add Group-->
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
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Level</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">T2</option>
                            <option value="2">T3</option>
                            <option value="3">T4</option>
                            <option value="4">T5</option>
                            <option value="5">T6</option>
                        </select>


                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn bg-gradient-success">Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Delete Group-->
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
                    <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn bg-gradient-success">Confirm</button>
            </div>
        </div>
    </div>
</div>