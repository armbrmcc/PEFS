<!--
    * v_group_management_add_group
    * display for group management
    * @input  -
    * @output -
    * @author Jirayut Saifah
    * Create date 2565-01-27   
    * Update date 
-->
<!-- Data table -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<!-- Data table -->
<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="sweetalert2.all.min.js"></script>
<!-- sweet alert -->
<script>
document.getElementById("date").innerHTML = Date();
</script>
<?php
date_default_timezone_set("Asia/Bangkok");
?>
<div class="container-fluid py-4">
    <div class="card-header">
        <h2>Group Management (การเพิ่มการกลุ่มประเมิน)</h2>
    </div>
    <div class="col-12">
        <div class="card mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6 style="font-size:20px;">Group</h6>
                            <div class="row">
                                <div class="col">
                                    <label for="year" style="font-size:20px;">Level:
                                        <select id="year" name="year">
                                            <option>please select</option>
                                            <option value="2017">T6</option>
                                            <option value="2018">T5</option>
                                            <option value="2019">T4</option>
                                            <option value="2020">T3</option>
                                            <option value="2021">T2</option>

                                        </select>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="year" style="font-size:20px;">Year:
                                        <select id="year" name="year">
                                            <option>2021</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </label>
                                </div>


                            </div>
                            <div>
                                <label for="year" style="font-size:20px;">Position</label>
                                <ul style="font-size:20px;">
                                    <li>Supervisor</li>
                                    <li>Senior Specialist</li>
                                    <li>Senior Staff</li>
                                </ul>
                            </div>
                            <div>
                                <label for="year" style="font-size:20px;">Type Evaluation</label><br>
                                <input type="text" style="font-size:20px;" disabled
                                    value="Type 1: (1 round evaluation)">
                            </div>
                            <div>
                                <label for="year" style="font-size:20px;">Date Round 1 :</label><br>
                                <input type="date" id="date" style="font-size:20px;"
                                    value="<?php echo date('Y-m-d') ?>"><br>

                            </div><br><br>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 style="font-size:20px;">Assessor</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="assessor_table" class="table align-items-center justify-content-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th style="text-align:center">
                                            <input type="checkbox" onclick="select_all(this);">
                                            All
                                        </th>
                                        <th style="text-align:center">Employee ID</th>
                                        <th style="text-align:center">Assessor Name</th>
                                        <th style="text-align:center">Position</th>
                                        <th style="text-align:center">Department</th>

                                    </tr>
                                </thead>
                                <tbody id="select_data">
                                    <tr id="emp_id_1">
                                        <td style="text-align:center">1</td>
                                        <td style="text-align:center"><input type="checkbox" name="checkbox1"></input>
                                        </td>
                                        <td style="text-align:center">00020</td>
                                        <td style="text-align:center">Cherprang Areekul</td>
                                        <td style="text-align:center">AGM</td>
                                        <td style="text-align:center">Accountant</td>
                                    </tr>
                                    <tr id="emp_id_2">
                                        <td style="text-align:center">2</td>
                                        <td style="text-align:center"><input type="checkbox" name="checkbox1"></input>
                                        </td>
                                        <td style="text-align:center">00021</td>
                                        <td style="text-align:center">Weeraya Zhang</td>
                                        <td style="text-align:center">AGM</td>
                                        <td style="text-align:center">Accountant</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 style="font-size:20px;">Nominee</h6>
                    </div>
                    <div>

                        <button class="btn btn-primary float-right" style="position: absolute; right: 0;"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            Add Group</button>
                        <br><br>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Nominee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="emp_id" style="font-size:20px;">Employee ID</label><br>
                                        <input type="number" style="font-size:20px;"><br>
                                        <label for="emp_id" style="font-size:20px;">Name</label><br>
                                        <input type="number" style="font-size:20px;"><br>
                                        <label for="year" style="font-size:20px;">Promote to
                                            <br> <select id="year" name="year">
                                                <option>please select</option>
                                                <option value="2017">General Manager</option>

                                            </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancle</button>
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="nominee_table" class="table align-items-center justify-content-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th style="text-align:center">Employee ID</th>
                                        <th style="text-align:center">Nominee Name</th>
                                        <th style="text-align:center">Position</th>
                                        <th style="text-align:center">Department</th>
                                        <th style="text-align:center">Promote to</th>
                                        <th style="text-align:center">Action</th>

                                    </tr>
                                </thead>
                                <tbody id="select_data">
                                    <tr id="emp_id_1">
                                        <td style="text-align:center">1</td>
                                        <td style="text-align:center">00030</td>
                                        <td style="text-align:center">Jirayut Saifah</td>
                                        <td style="text-align:center">Officer Level</td>
                                        <td style="text-align:center">Accountant</td>
                                        <td style="text-align:center">Senior Manager</td>
                                        <td style="text-align:center"> <button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-12 text-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn bg-gradient-success mb-0" data-bs-toggle="modal"
                data-bs-target="#ModalConfirmAssessor" onclick="alert()">Submit
            </button>
        </div>
    </div>




    <script>
    $(document).ready(function() {
        $("#nominee_table").DataTable();
        $("#assessor_table").DataTable();
    });
    </script>
    <script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })

    function select_all(source) {
        var check = document.querySelectorAll('input[name="checkbox1"]');
        for (var i = 0; i < check.length; i++) {
            if (check[i] != source) {
                check[i].checked = source.checked
            }
        }
    }
    </script>
    <script>
    function alert() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Confirm Add Group?',
            text: "เมื่อคุณบันทึกแล้วยังสามารถแก้ไขได้ในภายหลัง",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonText: 'cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                    'Saved!',
                    'Your data has been Saved.',
                    'success'
                )


                window.location.href = "show_group_management";

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your data is not saved.:)',
                    'error'
                )
            }
        })
    }
    </script>