<!--
    /*
    * v_result_evaluation_round2 
    * display for Result evaluation form 2 Round (แบบฟอร์มการประเมิน 2 รอบ) ซึ่งมีการประเมินแล้วทั้ง 2 รอบ
    * @author Thitima Popila and Ponprapai Atsawanurak
    * @input -
    * @output -
    * @Create date : 2565-04-13   
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

/* จัดระยะห่างระหว่างปุ่ม */
.btn {
    margin-right: 1rem;
    margin-left: 1rem;
}

#width_col {
    white-space: initial !important;
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

<!-- Evaluation form -->
<div class="container-fluid py-4">
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
            <!-- ชื่อกรรมการ และวันประเมิน -->
            <div class="row">
                <div class="col-sm-6">
                    <h6>Assessor Name :
                        <?php echo $obj_assessor[0]->Empname_eng. ' ' . $obj_assessor[0]->Empsurname_eng?></h6>
                </div>
                <div class="col-sm-6">
                    <?php $newDate = date("d/m/Y", strtotime($arr_nominee[0]->grp_date)); ?>
                    <h6>Date : <?php echo $newDate ?></h6>
                </div>
            </div>

            <div class="table-responsive">
                <!-- Start form evaluation -->
                <form action="action=<?php echo site_url() ?>Evaluation/Evaluation/insert_evaluation_form" method="post"
                    enctype="multipart/form-data" name="evaluation">
                    <!-- Start table data Nominee -->
                    <table class="table table-bordered table-sm">
                        <tr id="Manage">
                            <th colspan="5" id="gray">
                                <center><b>Stretch Assignment Evaluation Form
                                        (<?php echo $obj_promote[0]->Position_name?>) </b>
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
                                    <td rowspan="2" width="300px" id="width_col"
                                        style="vertical-align:middle;text-align: center;">ITems</td>
                                    <td rowspan="2" width="800px" id="width_col"
                                        style="vertical-align:middle;text-align: center;">Points for observation</td>
                                    <td colspan="4" style="vertical-align:middle;text-align: center;">Rating [Fill score
                                        1-5]</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="vertical-align:middle;text-align: center;">1st round</td>
                                    <td colspan="2" style="vertical-align:middle;text-align: center;">Final round</td>
                                </tr>
                                <!--เริ่ม ตารางหัวข้อลงคะแนน-->
                                <?php 
                                    $count_discription = 0;  //จำนวนหัวข้อย่อยจริงๆเป็นของอันเก่าไม่ต้องทำแต่ขี้เกียจแก้
                                    $count_itm = 1; //จำนวนหัวข้อหลัก
                                    $weight = 0; //ค่าน้ำหนักหัวข้อการประเมิน
                                    $total_round_1 = 0; //ผลวรมครั้งที่ 1
                                    $total_round_2 = 0; //ผลรวมครั้งที่ 2
                                ?>

                                <?php
                                    for ($i = 0; $i < count($arr_form); $i++) {   //ลูปตามหัวข้อหลัก
                                ?>
                                <?php if ($i != 0) {
                                            if ($arr_form[$i]->itm_id != $arr_form[$i - 1]->itm_id) {
                                                $count_itm++;
                                            }
                                        }
                                        $weight =  $weight + 5;
                                        $total_round_1 += $arr_point_round1[$i]->ptf_point;
                                        $total_round_2 += $arr_point_round2[$i]->ptf_point;
                                    } //นับหัวข้อหลัก
                                    ?>

                                <input type="hidden" id="count_form" value='<?php echo $count_itm ?>'>

                                <?php 
                                        for ($i = 0; $i < $count_itm; $i++) {   //ลูปตามหัวข้อหลัก
                                    ?>
                                <?php 
                                    $count_rowspan = 0;
                                        for ($loop_rowspan = 0; $loop_rowspan < count($arr_form); $loop_rowspan++) {
                                            if ($arr_form[$loop_rowspan]->des_item_id == $arr_form[$i]->itm_id) {
                                                $count_rowspan++;
                                            }
                                        } //นับdiscriptionเพื่อกำหนด rowspan 
                                    ?>

                                <input type="hidden" value="<?php echo $count_rowspan; ?>" name="row[]"
                                    id="dis_row_<?php echo  $i ; ?>">
                                <?php
                                        for ($loop_dis = 1; $loop_dis <= $count_rowspan; $loop_dis++) { ?>
                                <tr>
                                    <!-- แสดง Item -->
                                    <?php if ($loop_dis === 1) { ?>
                                    <td rowspan="<?php echo $count_rowspan; ?>"
                                        style="vertical-align:middle;text-align: center; width: 50px;" id="width_col">
                                        <b>
                                            <?php echo $arr_form[$loop_dis]->itm_name; ?>
                                            <br><?php echo $arr_form[$loop_dis]->itm_item_detail; ?></b>
                                    </td>
                                    <?php } ?>

                                    <td id="width_col">
                                        <!-- แสดง Disription    -->
                                        <b> <?php echo $arr_form[$count_discription]->des_description_th; ?></b>
                                        <br>

                                        <?php $pos = strrpos($arr_form[$count_discription]->des_description_eng, "."); //ตัดประโยคโดยหา"."
                                                    echo substr($arr_form[$count_discription]->des_description_eng, 0, $pos + 1); ?>
                                        <br>
                                        <?php echo substr($arr_form[$count_discription]->des_description_eng, $pos + 1, strlen($arr_form[$count_discription]->des_description_eng)) ?>
                                        <?php echo $arr_form[$count_discription]->des_description_th ?>
                                    </td>

                                    <!-- score 1st round -->
                                    <td colspan="2" style="vertical-align:middle;text-align: center;">
                                        <?php echo $arr_point_round1[$count_discription]->ptf_point; ?>
                                    </td>

                                    <!-- score Final round -->
                                    <td colspan="2" style="vertical-align:middle;text-align: center;">
                                        <?php echo $arr_point_round2[$count_discription]->ptf_point; ?>
                                    </td>

                                    <?php $count_discription++; ?>
                                    <?php } ?>
                                </tr>

                                <?php } ?>
                                <input type="text" name="weight" ID="weight" value=<?php echo $weight; ?> hidden>
                                <input type="hidden" id="count_score" value="<?php echo $count_discription; ?>">
                                <tr>
                                    <td rowspan="2">
                                        5 ： Exceed expected level for Next level
                                        <br>4 ： Absolutely satisfies expected level for Next level
                                        <br> 3 ： Meet expected level for Manager level
                                        <br>2 ： Partially lower that expected level for Next level
                                        <br>1 ： Do Not satisfy expected level for Next level
                                    </td>

                                    <!-- total -->
                                    <td>Total</td>
                                    <!-- total round 1 -->
                                    <td style="text-align: center;"><?php echo $total_round_1;?></td>
                                    <td style="text-align: center;"><?php echo (int)(($total_round_1 * 100)/$weight);?>%
                                    </td>

                                    <?php
                                        if ($arr_point_round2== NULL) {
                                    ?>
                                    <td style="text-align: center;"> - </td>
                                    <td style="text-align: center;"> - </td>
                                    <?php        
                                        } // end if yet evaluate final round or point null
                                        else {
                                    ?>
                                    <!-- total round 2 -->
                                    <td style="text-align: center;"><?php echo $total_round_2;?></td>
                                    <td style="text-align: center;"><?php echo (int)(($total_round_1 * 100)/$weight);?>%
                                    </td>
                                    <?php        
                                            }
                                            // end else not null
                                        ?>
                                </tr>
                        </table>
                        <br>
                        <!-- comment -->
                        <div class="form-group">
                            <label for="comment"><b style="font-size: 15px;">Comment :</b></label>
                            <textarea class="form-control" rows="5" id="Comment" type="text" name="Comment" disabled>
                                <?php echo $arr_per_id[0]->per_comment; ?>
                            </textarea>
                        </div>
                        <br>
                        <!-- Q/A -->
                        <div class="form-group">
                            <label for="QnA"><b style="font-size: 15px;">Q/A :</b></label>
                            <textarea class="form-control" rows="5" id="QnA" type="text" name="QnA" disabled>
                                <?php echo $arr_per_id[0]->per_q_and_a; ?>
                            </textarea>
                        </div>
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

<!-- Javascript -->
<script>
$(document).ready(function() {

    $("select").change(function() {

        var toplem = 0;
        $("select[name=form]").each(function() {

            toplem = toplem + parseInt($(this).val());

        })
        $("input[name=total]").val(toplem);
    }); //คืนค่าคะแนนรวม

    $("select").change(function() {
        var toplem = 0;
        var weight = $("#weight").val();
        $("select[name=form]").each(function() {
            toplem = toplem + parseInt($(this).val());

        })

        toplem = Math.round(toplem / weight * 100);
        var a = '%'
        $("input[name=total_weight]").val(toplem + a);

    }); //คืนค่าคะแนนรวมแบบเปอเซ็น
    //คืนค่าคะแนนรวมแบบรายการ
})
</script>
<!-- End Javascript -->