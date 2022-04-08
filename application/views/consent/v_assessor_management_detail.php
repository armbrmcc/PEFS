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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


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
        // $(document).ready(function() {
        //     $("#btn_success").click(function() {
        //         // $("#ModalConfirmAssessor").hide();
        //         $("#ModalConfirmAssessor").hide();
        //     });

        // });

        // $(document).ready(function() {
        //     $("#btn_success").click(function() {
        //         $('#ModalConfirmAssessor').modal('hide');
        //         // $("#ModalConfirmAssessor").hide();
        //         $('#ModalConfirmAssessor').on('hide.bs.modal', function(e) {
        //             e.stopPropagation();
        //         })

        //     });
        // });


        // $('#btn_success').on("click", function (e) {
        //     $('#ModalConfirmAssessorSuccess').modal('show');
        // });


        // $('#btn_success').click(function() {
        //     $('#ModalConfirmAssessorSuccess').modal('show');
        // });


        //Data Table
        $(document).ready(function() {
            $("#list_table").DataTable();
        });
    </script>

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
                                <!-- Select Year -->
                                <div>
                                    <label for="year" style="position: absolute; right: 0;font-size:16px;">Select Year:
                                        <select id="year" name="year">
                                            <option>2021</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </label><br><br>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#ModalAddAssessor">
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
                                <?php
                                for ($i = 0; $i < count($arr_ass); $i++) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0"><?php echo $i + 1 ?></h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_ass[$i]->ase_emp_id ?></h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_ass[$i]->Empname_eng . '  ' . $arr_ass[$i]->Empsurname_eng ?></h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_ass[$i]->Pos_shortName ?></h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_ass[$i]->Position_name ?></h6>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                                                <i class="far fa-trash-alt me-2"></i>Delete</button>
                                        </td>
                                    </tr>
                                    <!-- Modal Add Assessor-->
<div class="modal fade" id="ModalAddAssessor" tabindex="-1" role="dialog" aria-labelledby="ModalAddAssessorTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAddAssessorLabel">Add Assessor</h5>&nbsp;
                <i class="fas fa-user-plus fa-1x"></i>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url() . 'Assessor_Management/Assessor_Management/add_assessor'; ?>" method="post" enctype="multipart/form-data">
                    <input class="form-control" type="text" id="ase_year" name="ase_year" value="<?php echo $arr_ass[$i]->ase_year ?>" hidden>
                    <div class="mb-3">
                        <label for="focusedinput" class="col-form-label">Employee ID</label>
                        <input type="text" class="form-control" name="ase_emp_id" id="ase_emp_id_modal" placeholder="Employee ID.." onkeyup="get_Emp()" required>
                    </div>
                    <div class="mb-3">
                        <label for="focusedinput" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="showname_modal" disabled name="assessor_name">
                    </div>
                    <input class="form-control" type="text" id="group_id" name="group_id" value="<?php echo $arr_ass[$i]->ase_gro_id ?>" hidden>

                    <button type="submit" class="btn btn-success float-right">Submit</button>
                    <button type="button" class="btn btn-danger float-right" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-12 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-success mb-0" data-bs-toggle="modal" data-bs-target="#ModalConfirmAssessor">Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>





</body>

</html>





<!-- Modal Delete Assessor-->
<div class="modal fade" id="ModalDeleteAssessor" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteAssessorTitle" aria-hidden="true">
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
                    <h4 class="text-gradient text-danger mt-4">Confirm Delete Assessor?</h4>
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

<!-- Modal Confirm Create Group Assessor -->
<div class="modal fade" id="ModalConfirmAssessor" tabindex="-1" role="dialog" aria-labelledby="ModalConfirmAssessorTitle" aria-hidden="true">
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
                        <i class="fas fa-users fa-8x" style="color:#2AA6F4"></i>
                    </div>
                    <br>
                    <h4>Confirm Create Group Assessor</h4>
                    <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Cancel</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#ModalConfirmAssessorSuccess" id="btn_success">Confirm
                </button>

                <!-- <button type="button" class="btn bg-gradient-success" data-bs-dismiss="modal" id="btn_success">Confirm
                </button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirm Create Group Assessor Success-->
<div class="modal fade" id="ModalConfirmAssessorSuccess" tabindex="-1" role="dialog" aria-labelledby="ModalConfirmAssessorSuccessTitle" aria-hidden="true">
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
                        <i class="fas fa-check-circle fa-8x" style="color:#80F04F"></i>
                    </div>
                    <br>
                    <h4>Success</h4>
                    <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-success" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    function get_Emp() {
        ase_emp_id = document.getElementById('ase_emp_id_modal').value;
        var empname = "";
        console.log(ase_emp_id)
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Assessor_Management/Assessor_Management/search_by_employee_id",
            data: {
                "ase_emp_id": ase_emp_id
            },
            dataType: "JSON",
            success: function(data, status) {
                console.log(data);
                if (data.length == 0) {
                    document.getElementById("showname_modal").value = "ไม่มีข้อมูล";
                } else {
                    empname = data[0].Empname_eng + " " + data[0].Empsurname_eng;
                    document.getElementById("showname_modal").value = empname;
                    console.log(999)
                    console.log(empname)
                }
            }
        });
    }
</script>