<!--
    /*
    * v_result_evaluation
    * display for Result Evaluation  (ผลคะแนนแบบฟอร์มการประเมิน)
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @input -
    * @output -
    * @Create date : 2565-01-26 
    * @Update date : 2564-08-28
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

.table tbody tr:last-child td {
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

<!-- html -->
<!-- Result -->
<div class="container">
    <div class="card" id="border-radius">
        <div class="card-header">
            <h2>Result (ผลคะแนนการประเมิน)</h2>
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
                    <h4>Siam DENSO Manufacturing Co., Ltd.</h4>
                </div>
            </div>
            <!-- icon file present nominee -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- <a href="" target="_blank"> -->
                    <button type="button" class="btn bg-gradient md-0" style="background-color: #596CFF; float: right"
                        id="set_button">
                        <i class="far fa-file-pdf text-white"></i> &nbsp; <h7 class="text-white">Present Nominee</h7>
                    </button>
                    </a>
                </div>
            </div>
            <!-- ชื่อกรรมการ และวันประเมิน -->
            <div class="row">
                <div class="col-sm-6">
                    <h6>Assessor Name :&nbsp; Cherprang Areekul</h6>
                </div>
                <div class="col-sm-6">
                    <h6>Date : 16/01/2022</h6>
                </div>
            </div>

            <!-- Start table data form evaluation -->
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
                    <!-- End table data form evaluation -->
                    <br>

                    <!-- Start table evaluation form -->
                    <div class="table-responsive">
                        <form action="" method="post" enctype="multipart/form-data" name="evaluation">
                            <table class="table table-bordered table-sm">
                                <tbody>
                                    <tr id="center_th">
                                        <td rowspan="2">ITems</td>
                                        <td rowspan="2">Points for observation</td>
                                        <td>% weight</td>
                                        <td>Rating(B)</td>
                                        <td>Score</td>
                                    </tr>
                                    <tr id="center_th">
                                        <td>(A)</td>
                                        <td>[Fill score 1-5]</td>
                                        <td>(AxB)</td>
                                    </tr>
                                    <tr>
                                        <!--แสดง Item -->
                                        <td style="text-align: center; width: 50px;">
                                            Awareness of the issue<br>
                                            ตระหนักในปัญหา
                                        </td>
                                        <!-- แสดง Disription    -->
                                        <td>
                                            Is aware of the issues of the business <br>
                                            in their area of responsibility; understands <br>
                                            ตระหนักในปัญหาของงานที่รับผิดชอบ เข้าใจสิ่งแวดล้อม <br>
                                            หรือสภาพปัญหาของแผนกตนเอง
                                        </td>
                                        <!-- แสดง % Weight -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            15
                                        </td>
                                        <!-- แสดง point -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            5
                                        </td>
                                        <!-- แสดง Score -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            75
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--แสดง Item -->
                                        <td style="text-align: center; width: 50px;">
                                            Analytical ability<br>
                                            ความสามารถเชิงวิเคราะห์
                                        </td>
                                        <!-- แสดง Disription    -->
                                        <td>
                                            Can logically analyze issues in order to solve them and extract <br>
                                            the problems appropriately based on the analysis. <br>
                                            สามารถวิเคราะห์ปัญหาได้อย่างมีเหตุผลเพื่อแก้ไขและขจัดปัญหาออกไป <br>
                                            ได้อย่างเหมาะสมโดยใช้หลักการวิเคราะห์
                                        </td>
                                        <!-- แสดง % Weight -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            15
                                        </td>
                                        <!-- แสดง point -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            5
                                        </td>
                                        <!-- แสดง Score -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            75
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--แสดง Item -->
                                        <td style="text-align: center; width: 50px;">
                                            Problem solving ability<br>
                                            ความสามารถในการแก้ปัญหา
                                        </td>
                                        <!-- แสดง Disription    -->
                                        <td>
                                            Figures out new solutions or mechanisms for solving <br>
                                            the issues by combining existing facts with information. <br>
                                            หาหนทางใหม่ๆ หรือกลวิธีในการแก้ไขปัญหา โดยการรวบรวมข้อเท็จจริง <br>
                                            และข้อมูล
                                        </td>
                                        <!-- แสดง % Weight -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            15
                                        </td>
                                        <!-- แสดง point -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            5
                                        </td>
                                        <!-- แสดง Score -->
                                        <td style="vertical-align:middle;text-align: center;">
                                            75
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- แสดง total -->
                                        <td colspan="2" align='right'><b>Total</b></td>
                                        <td align='center'>100</td>
                                        <!-- แสดง point รวม -->
                                        <td align='center'>
                                            15
                                        </td align='center'>
                                        <!-- แสดงเปอร์เซ็นคะแนน -->
                                        <td align='center'>
                                            100%
                                        </td>
                                    </tr>
                            </table>
                            <!-- End table evaluation form -->
                            <br>

                            <!-- Comment -->
                            <div class="form-group">
                                <label for="comment"><b style="font-size: 15px;">Comment :</b></label>
                                <textarea class="form-control" rows="5" id="comment" type="text" name="comment"
                                    style="width: 550px;" required>มีความเชี่ยวชาญ สามารถแก้ปัญหางานได้ดี</textarea>
                            </div>
                            <br>
                            <!-- Q/A -->
                            <div class="form-group">
                                <label for="QnA"><b style="font-size: 15px;">Q/A :</b></label>
                                <textarea class="form-control" rows="5" id="QnA" type="text" name="QnA"
                                    style="width: 550px;"
                                    required>เข้าใจในมุมมองกว้าง และกล้าตัดสินใจ ตอบได้ตรงประเด็น</textarea>
                            </div>
                            <br>

                            <!-- Back button -->
                            <a href="<?php echo base_url() . 'Result/Result/show_result_detail/' ?>">
                                <center><button type="button" class="btn btn-secondary btn-lg canter">Back</button>
                                </center>
                            </a>
                    </div>
                </form>
                <!-- End form evaluation -->
            </div>
        </div>
        <!-- End class card-body -->
    </div>
    <!-- End class card -->
</div>
<!-- End class container -->
<!-- End html -->