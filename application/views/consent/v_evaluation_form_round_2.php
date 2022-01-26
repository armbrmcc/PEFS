<!--
    /*
    * v_evaluation_form_round_2
    * display for Evaluation Form 
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @input -
    * @output -
    * @Create date : 2565-01-26   
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

<!-- Evaluation form -->
<div class="container">
    <div class="card" id="border-radius">
        <div class="card-header">
            <h1 style="color:red">Evaluation (แบบฟอร์มการประเมิน)</h1>
        </div>
        <div class="card-body">
            <!-- Logo บริษัท -->
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url() . 'assests\template\soft-ui-dashboard-main/assets/img/denso_1.png' ?>" width="150" height="150">
                </div>
                <!-- ชื่อบริษัท -->
                <div class="col-sm-8 center_com">
                    <h4>Siam DENSO Manufacturing Co., Ltd.</h4>
                </div>
            </div>
            <!-- icon file present nominee -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- <a href="" target="_blank"> -->
                    <button type="button" class="btn btn-primary" style="background-color: info; float: right"
                        id="set_button">
                        <i class="far fa-file-pdf text-white"></i> &nbsp; Present Nominee
                    </button>
                    </a>
                </div>
            </div>
            <!-- ชื่อกรรมการ และวันประเมิน -->
            <div class="row">
                <div class="col-sm-6">
                    <h5>Assessor Name :&nbsp; Cherprang Areekul</h5>
                </div>
                <div class="col-sm-6">
                    <h5>Date : 16/01/2022</h5>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post" enctype="multipart/form-data" name="evaluation">
                    <table class="table table-bordered table-sm">
                        <tr id="Manage">
                            <th colspan="5" id="gray">
                                <center><b>Stretch Assignment Evaluation Form (Promote to T2) </b>
                        </tr>
                        <tbody>
                            <tr id="Manage">
                                <!-- ชื่อ-นามสกุล Nominee -->
                                <th width="50px" id="gray">Name - Surname</th>
                                <td colspan="2">
                                    Milin Dokthian
                                </td>
                                <!-- ตำแหน่ง Nominee -->
                                <th width="40px" id="gray">Position</th>
                                <td>
                                    Senior Staff
                                </td>
                            </tr>

                            <tr id="Manage">
                                <!-- แผนก Promote to -->
                                <th width="40px" id="gray">Promote to</th>
                                <td colspan="2">Supervisor</td>
                                <!-- แผนก Nominee -->
                                <th width="40px" id="gray">Department/Section</th>
                                <td>
                                    Accountant
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>


                    <div class="table-responsive">
                        <form action="" method="post" enctype="multipart/form-data" name="evaluation">
                            <table class="table table-bordered table-sm">
                                <tbody>
                                    <tr id="center_th">
                                        <td rowspan="2" colspan="1">ITems</td>
                                        <td rowspan="2" colspan="2">Points for observation</td>
                                        <td colspan="4">Rating [Fill score 1-5]</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align='center'>1st round</td>
                                        <td colspan="2" align='center'>Final round</td>
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
                                    </tr>
                                    <td rowspan="2">
                                        5 ： Exceed expected level for Manager level
                                        <br>4 ： Absolutely satisfies expected level for Manager level
                                        <br> 3 ： Meet expected level for Manager level
                                        <br>2 ： Partially lower that expected level for Manager level
                                        <br>1 ： Do Not satisfy expected level for Manager level
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
            </div>
        </div>
    </div>

    <!-- Modal ยืนยันการประเมิน -->
    <!-- <div class="modal fade" data-backdrop="static" id="Modal_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" id="img">
                    <!-- icon -->
    <!-- <img src=<?php echo base_url() . "argon/assets/img/brand/danger.png" ?> width="150" height="150">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <div class="modal-title" id="ModalLabel">
                        <h1><b>Evaluation Confirm</b></h1>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-lg float-right" data-dismiss="modal">Cancel</button>

                    <!-- Modal Confirm Evaluation -->
    <!-- <button type="button" class="btn btn-success btn-lg float-right" id="btn_success" data-toggle="modal" data-target="#successModal">
                        Confirm
                    </button>
                </div>

            </div>
        </div>
    </div> -->
    <!-- End Modal Confirm Evaluation -->