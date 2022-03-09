<!--
    /*
    * v_evaluation_form_round_2
    * display for Evaluation Form 2 Round (แบบฟอร์มการประเมิน 2 รอบ)
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @input -
    * @output -
    * @Create date : 2565-01-26   
    * @Update date : 2565-01-27
    */
-->

<!-- CSS -->
<style>
table {
    width: 100%;
}

#card_radius {
    margin-top: 15px;
    margin-bottom: 15px;
    border-radius: 20px;
    min-height: 300px;
    width: auto;
}

/* กำหนดเส้นตารางแบบฟอร์ม */
thead,
tbody,
tfoot,
tr,
td,
th {
    border-color: inherit;
    border-style: solid;
    border-width: 1px;
}

#center_th td {
    text-align: center;
    font-weight: bold;
}

#gray {
    background-color: #E3E3E3;
}

#img {
    display: block;
    margin-left: 150px;
}

/* จัดตำแหน่งชื่อบริษัท */
.center_com {
    padding: 70px;
}

#set_id {
    width: 10px;
}

#set_button {
    font-size: 16px;
}
</style>
<!-- End CSS -->

<!-- Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
    /*
    * alart_evaluation
    * alert การยืนยันการประเมิน
    * @input -
    * @output alert ยืนยันการประเมิน
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-07
    */
    function alart_evaluation() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Evaluation Confirm?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    icon: 'success',
                    title: 'Success',
                    confirmButtonColor: '#3CBF34',
                    confirmButtonText: 'OK',
                }).then((result) => {
                    window.location.href =
                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>";
                })
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancel',
                    '',
                    'error'
                )
            }
        })
    }

    /*
    * calculete
    * คำนวณคะแนนต่างๆ
    * @input  -
    * @output -
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-07
    */
    $(document).ready(function() {
        /*
        * total_calculete
        * คืนค่าคะแนนรวม
        * @input  form
        * @output -
        * @author Phatchara Khongthandee and Ponprapai Atsawanurak
        * @Create Date 2565-03-07
        */
        $("select").change(function() {
            var toplem = 0;
            var i = 0;
            $("select[name='form[]']").each(function() {

                var w = document.getElementById("weight_list_" + i).value;
                var s = w * parseInt($(this).val());
                toplem = toplem + s;
                i = i + 1;
            })

            $("input[name=total]").val(toplem);
        });

        /*
        * total_calculate_weight
        * คืนค่าคะแนนรวมแบบเปอเซ็น
        * @input  form
        * @output -
        * @author Phatchara Khongthandee and Ponprapai Atsawanurak
        * @Create Date 2565-03-07
        */
        $("select").change(function() {
            var toplem = 0;
            var i = 0;
            var weight = $("#weight-per").val();
            $("select[name='form[]']").each(function() {
                var w = document.getElementById("weight_list_" + i).value;
                var s = w * parseInt($(this).val());
                toplem = toplem + s;
                i = i + 1;

            })

            toplem = Math.round(toplem / weight * 100);
            var a = '%'
            $("input[name=total_weight]").val(toplem + a);

        });


        //คืนค่าคะแนนรวมแบบรายการ
        calculate_weight();

    })

    /*
    * calculate_weight
    * คืนค่าคะแนนรวมแบบรายการ
    * @input  form, count_index
    * @output -
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create Date 2565-03-07
    */
    function calculate_weight() {
    var count = document.getElementById("count_index").value;
        for (i = 0; i < count; i++) {
            var h = document.getElementById("form_" + i).value;
            var w = document.getElementById("weight_list_" + i).value;
            $("#show_weight_" + i).html(h * w);
            $("#point_list_" + i).val(h * w);
        }
    }
</script>
<!-- End Javascript -->

<!-- Evaluation form -->
<div class="container">
    <div class="card" id="border-radius">
        <div class="card-header">
            <h2>Evaluation (แบบฟอร์มการประเมิน)</h2>
        </div>
        <div class="card-body">
            <!-- Logo บริษัท -->
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url() . 'assests\template\soft-ui-dashboard-main/assets/img/denso_1.png' ?>"
                        width="150" height="150">
                </div>
                <!-- ชื่อบริษัท -->
                <div class="col-sm-8 center_com">
                    <h4><?php echo $obj_nominee[0]->Company_name ?></h4>
                </div>
            </div>
            <!-- icon file present nominee -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- <a href="" target="_blank"> -->
                    <button type="button" class="btn btn-primary" style="background-color: indigo; float: right"
                        id="set_button">
                        <i class="far fa-file-pdf text-white"></i> &nbsp; Present Nominee
                    </button>
                    </a>
                </div>
            </div>
            <!-- ชื่อกรรมการ และวันประเมิน -->
            <div class="row">
                <div class="col-sm-6">
                    <h6>Assessor Name : <?php echo $obj_assessor[0]->Empname_eng. ' ' . $obj_assessor[0]->Empsurname_eng?></h6>
                </div>
                <div class="col-sm-6">
                    <?php $newDate = date("d/m/Y", strtotime($arr_nominee[0]->grp_date)); ?>
                    <h6>Date : <?php echo $newDate ?></h6>
                </div>
            </div>

            <div class="table-responsive">
                <!-- Start form evaluation -->
                <form action="" method="post" enctype="multipart/form-data" name="evaluation">
                    <!-- Start table data Nominee -->
                    <table class="table table-bordered table-sm">
                        <tr id="Manage">
                            <th colspan="5" id="gray">
                                <center><b>Stretch Assignment Evaluation Form (<?php echo $obj_promote[0]->Position_name?>) </b>
                        </tr>
                        <tbody>
                            <tr id="Manage">
                                <!-- ชื่อ-นามสกุล Nominee -->
                                <th width="50px" id="gray">Name - Surname</th>
                                <td colspan="2">
                                    <?php echo $obj_nominee[0]->Empname_eng. ' ' . $obj_nominee[0]->Empsurname_eng?> 
                                </td>
                                <!-- ตำแหน่ง Nominee -->
                                <th width="40px" id="gray">Position</th>
                                <td>
                                    <?php echo $obj_nominee[0]->Position_name?>
                                </td>
                            </tr>

                            <tr id="Manage">
                                <!-- แผนก Promote to -->
                                <th width="40px" id="gray">Promote to</th>
                                <td colspan="2">
                                    <?php echo $obj_promote[0]->Position_name?>
                                </td>
                                <!-- แผนก Nominee -->
                                <th width="40px" id="gray">Department/Section</th>
                                <td>
                                    <?php echo $obj_nominee[0]->Department?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End table data Nominee -->
                    <br>

                    <!-- Start table Evaluation form -->
                    <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tbody>
                                    <tr id="center_th">
                                        <td rowspan="2" width="300px" id="width_col" style="vertical-align:middle;text-align: center;">ITems</td>
                                        <td rowspan="2" width="800px" id="width_col" style="vertical-align:middle;text-align: center;">Points for observation</td>
                                        <td colspan="4" style="vertical-align:middle;text-align: center;">Rating [Fill score 1-5]</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="vertical-align:middle;text-align: center;">1st round</td>
                                        <td colspan="2" style="vertical-align:middle;text-align: center;">Final round</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; width: 50px;">
                                            Business I<br>
                                            ビジネスⅠ
                                        </td>
                                        <td colspan="2">
                                            Has the ability to explain and impart knowledge <br>
                                            and skills of the business in their area of <br>
                                            responsibility to their more colleagues and enhance <br>
                                            the total power of the Organization.
                                        </td>
                                        <td colspan="2" style="vertical-align:middle;text-align: center;">
                                            <select class="form-control" name="form[]" id="form" required>
                                                <option value="0">please selected</option>
                                                <option value=1>1</option>
                                                <option value=2>2</option>
                                                <option value=3>3</option>
                                                <option value=4>4</option>
                                                <option value=5>5</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <td rowspan="2">
                                        5 ： Exceed expected level for Next level
                                        <br>4 ： Absolutely satisfies expected level for Next level
                                        <br> 3 ： Meet expected level for Manager level
                                        <br>2 ： Partially lower that expected level for Next level
                                        <br>1 ： Do Not satisfy expected level for Next level
                                    </td>
                                    <td>Total</td>
                                    </tr>
                                    <tr>
                                        <td>Judgement</td>
                                        <td colspan="4"></td>

                                    </tr>

                                    <!-- -->
                            </table>
                            <br>
                            <!-- comment -->
                            <div class="form-group">
                                <label for="comment"><b style="font-size: 15px;">Comment :</b></label>
                                <textarea class="form-control" rows="5" id="comment" type="text" name="comment"
                                    required></textarea>
                            </div>
                            <br>
                            <!-- Q/A -->
                            <div class="form-group">
                                <label for="QnA"><b style="font-size: 15px;">Q/A :</b></label>
                                <textarea class="form-control" rows="5" id="QnA" type="text" name="QnA"
                                    required></textarea>
                            </div>
                            <!-- Confirm -->
                            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#Modal_confirm">Confirm</button>
                    </div>
                    <!-- End table Evaluation form -->
                </form>
                <!-- End form evaluation -->
            </div>
        </div>
        <!-- End card body -->
    </div>
    <!-- End card -->
</div>
<!-- End Evaluation form -->
