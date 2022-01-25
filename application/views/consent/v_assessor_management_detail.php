<!--
    * v_assessor_management_detail
    * display for assessor management by add or delete information
    * @input  -
    * @output -
    * @author Apinya Phadungkit
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
        padding: 8px;
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

    <!-- End JavaScript -->


    <div class="container-fluid py-4">
        <div class="card-header">
            <h2>Assessor Management (จัดการกรรมการ)</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">

                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h4>Promote to T2 : General Manager</h4>
                            </div>
                            <div class="col-6 text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn bg-gradient-info btn-block mb-3"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalMessage">
                                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Assessor
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="card-body px-0 pt-0 pb-2">
                        <!-- <div class="table-responsive p-0"> -->
                        <table class="table align-items-center" id="list_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Employee</th>
                                    <th>Assessor Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
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
                                            <h6 class="text-xs text-secondary mb-0">00025</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">Natticha Chantaravareelrkha</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">AM</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">Accountant</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
                                            <h6 class="text-xs text-secondary mb-0">00026</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">Natruja Chutiwansopon</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">AM</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-xs text-secondary mb-0">Accountant</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                            href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-12 text-end">
                    <a class="btn bg-gradient-success mb-0" href="javascript:;">Confirm</a>
                </div>
            </div>
        </div>
    </div>





</body>

</html>


<!-- Modal -->
<div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Assessor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Enter ID Assessor</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name">
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