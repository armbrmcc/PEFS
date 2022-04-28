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

thead,
tbody,
tfoot,
tr,
td,
th 
{
    border-color: inherit;
    border-style: solid;
    border-width: 1px;
}

.table tbody tr:last-child td {
    border-width: 1px;
}

#center_th td 
{
    text-align: center;
    font-weight: bold;
}

#gray 
{
    background-color: #E3E3E3;
}

#img 
{
    display: block;
    margin-left: 150px;
}

/* จัดตำแหน่งชื่อบริษัท */
.center_com 
{
    padding: 70px;
}

#set_id 
{
    width: 10px;
}

#set_button 
{
    font-size: 16px;
}

/* จัดระยะห่างระหว่างปุ่ม */
.btn 
{
    margin-right: 1rem;
    margin-left: 1rem;
}

#width_col 
{
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
<script>
    /*
    * alart_evaluation
    * alert การยืนยันการประเมิน
    * @input -
    * @output alert ยืนยันการประเมิน
    * @author Phatchara Khongthandee
    * @Create Date 2565-03-07
    */
    function alart_evaluation() {
    var score = [];
    var comment = $('#comment').val();
    var qa = $('#QnA').val();
    var check_error;
    var count_score = $('#count_score').val();
    var ase_id = $('#ase_id').val();
    var emp_id = $('#emp_id').val();
    var group_id = $('#group_id').val();
    var asp_id = $('#asp_id').val();
    
    for (i = 0; i < count_score; i++) {
        score[i] = $('#form_' + i).val();
    }
    
    var count_form = $('#count_form').val();
    var form = [];
    for (i = 0; i < count_score; i++) {
        form[i] = $('#formid_' + i).val();
    }

    var row = [];
    for (i = 0; i < count_form; i++) {
        row[i] = $('#dis_row_' + i).val();
    } 

    for (i = 0; i < count_score; i++) {
        if (score[i] == 0) {
            check_error = 1;
        }
    }

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    if (comment == '') {
        check_error = 1;
    }
    if (qa == '') {
        check_error = 1;
    }
        if (check_error == 1) {
            swalWithBootstrapButtons.fire({
                title: 'no value',
                text: '',
                icon: 'warning',
                confirmButtonText: 'OK',
            });
        } else {

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
                    $.ajax({
                        type: 'post',
                        url: "<?php echo site_url().'Evaluation/Evaluation/insert_evaluation_form'; ?>",
                        data: {
                            'QnA': qa,
                            'comment': comment,
                            'point': score,
                            'ase_id': ase_id,
                            'emp_id': emp_id,
                            'asp_id': asp_id,
                            'group_id': group_id,
                            'form': form,
                            'row': row,
                        },
                        dataType: 'json',
                        success: function(data) {
                            /* Start Alert บันทึกข้อมูลสำเร็จ */
                            if (data['message'] == 'Success') {
                                swalWithBootstrapButtons.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    confirmButtonColor: '#3CBF34',
                                    confirmButtonText: 'OK',
                                }).then((result) => {
                                    window.location.href =
                                        href =
                                        "<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_list'; ?>";
                                })
                            } else {
                                console.log("Error");
                            }

                        }
                    });

                }
            })
        }
    }//end alart_evaluation

    


$( document ).ready(function() {

    $("select").change(function(){
        
        var toplem=0;
        $("select[name=form]").each(function(){
            
            toplem = toplem + parseInt($(this).val());
             
        })
        $("input[name=total]").val(toplem);
    });  //คืนค่าคะแนนรวม
    
    $("select").change(function(){
        var toplem=0;
        var weight = $("#weight").val();
        $("select[name=form]").each(function(){
            toplem = toplem + parseInt($(this).val());

        }) 
        
            toplem =  toplem / weight*100 ;
            toplem =  parseFloat(toplem).toFixed( 2 );
            
        $("input[name=total_weight]").val(toplem );

    }); //คืนค่าคะแนนรวมแบบเปอเซ็น


    //คืนค่าคะแนนรวมแบบรายการ
    
})
        



</script>
<!-- End Javascript -->

<!-- Evaluation form -->
<div class="container py-4">
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
                    <a href="<?php echo base_url() . 'assests\template\soft-ui-dashboard-main' ?>/assets/upload/<?php echo $obj_file[0]->fil_location ?>" target="_blank">
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
                    <h6>Assessor Name : <?php echo $obj_assessor[0]->Empname_eng. ' ' . $obj_assessor[0]->Empsurname_eng?></h6>
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
                                        <td rowspan="2" width="200px" id="width_col" style="vertical-align:middle;text-align: center;">ITems</td>
                                        <td rowspan="2" width="800px" id="width_col" style="vertical-align:middle;text-align: center;">Points for observation</td>
                                        <td colspan="4" style="vertical-align:middle;text-align: center;">Rating [Fill score 1-5]</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"   style="vertical-align:middle;text-align: center;">1st round</td>
                                        <td colspan="2"  style="vertical-align:middle;text-align: center;">Final round</td>
                                    </tr>
                                    <!--เริ่ม ตารางหัวข้อลงคะแนน-->
                                    <?php $count_discription = 0;  //จำนวนหัวข้อย่อยจริงๆเป็นของอันเก่าไม่ต้องทำแต่ขี้เกียจแก้
                                    
                                    $weight = 5*count($arr_des); //กำหนด weight แบบง่ายๆ
                                    $point_old = 0;
                                    
                                    
                                    ?>
                                    <input type="hidden" id="count_form" value='<?php echo count($arr_item) ?>'>
                                    <?php
                                    
                                    for ($i = 0; $i < count($arr_item); $i++) {   //ลูปตามหัวข้อหลัก
                                    ?>
                                        <?php $count_rowspan = 0;
                                        for ($loop_rowspan = 0; $loop_rowspan < count($arr_des); $loop_rowspan++) {
                                            if ($arr_des[$loop_rowspan]->des_item_id == $arr_item[$i]->itm_id) {
                                                $count_rowspan++;
                                            }
                                        } //นับdiscriptionเพื่อกำหนด rowspan 
                                        
                                        ?>
                                        <input type="hidden" value="<?php echo $count_rowspan; ?>" name="row[]"
                                        id="dis_row_<?php echo  $i ; ?>">
                                        <?php
                                        for ($loop_dis = 1; $loop_dis <= $count_rowspan; $loop_dis++) { ?>
                                            <tr>
                                                <!-- แสดงห้อข้อหลัก -->
                                                <?php if ($loop_dis === 1) { ?>
                                                    <td rowspan="<?php echo $count_rowspan; ?>" style="vertical-align:middle;text-align: center; width: 50px;" id="width_col"> <b>
                                                            <?php echo $arr_item[$i]->itm_name; ?>
                                                            <br><?php echo $arr_item[$i]->itm_item_detail; ?></b>
                                                    </td>
                                                <?php } ?>
                                                
                                                <td id="width_col">
                                                    <!-- แสดง Disription    -->
                                                    <b> <?php echo $arr_des[$count_discription]->des_description_th; ?></b>
                                                    <br>
                                                
                                                    <?php $pos = strrpos($arr_des[$count_discription]->des_description_eng, "."); //ตัดประโยคโดยหา"."
                                                    echo substr($arr_des[$count_discription]->des_description_eng, 0, $pos + 1); ?>
                                                    <br>
                                                    <?php echo substr($arr_des[$count_discription]->des_description_eng, $pos + 1, strlen($arr_des[$count_discription]->des_description_eng)) ?>
                                                    
                                                </td>

                                                <td colspan="2" style="vertical-align:middle;text-align: center;">
                                                        <select style="vertical-align:middle;text-align: center;" class="form-control" name="form" id="form_<?php echo $count_discription; ?>" required>
                                                            <option value="0">score</option>
                                                            <option value=1>1</option>
                                                            <option value=2>2</option>
                                                            <option value=3>3</option>
                                                            <option value=4>4</option>
                                                            <option value=5>5</option>
                                                        </select>
                                                        
                                                    </td>
                                                    
                                                    <input type="hidden" value="<?php echo $arr_form[$count_discription]->for_id ?>" name="for_id[]" id="formid_<?php echo $count_discription; ?>">
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
                                        <td style="text-align: center;"><input type="text" name="total" size='3' disabled style='border: none'> </td>
                                                <td style="text-align: center;"><input type="text" name="total_weight" size='3' disabled style='border: none' ;></td>
                                                <td><input type="text" name="total" size='3' disabled hidden></td>
                                                <td><input type="text" name="total" size='3' disabled hidden></td>
                                    </tr>
                                    <tr>
                                        <td>Judgement</td>
                                        <td colspan="4"></td>
                                    </tr>
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
                            <!-- input -->
                            <input type="hidden" name="grn_status" value="<?php echo $arr_nominee[0]->grp_status; ?>">
                            <input type="hidden" value="<?php echo $obj_assessor[0]->ase_id ?>" name="ase_id" id="ase_id">
                            <input type="hidden" value="<?php echo $obj_nominee[0]->grn_emp_id ?>" name="emp_id" id="emp_id">
                            <input type="hidden" value="<?php echo $obj_nominee[0]->grn_id ?>" name="nor_id">
                            <input type="hidden" value="<?php echo $arr_nominee[0]->grp_id; ?>" name="group_id" id="group_id">
                            <input type="hidden" value="<?php echo $obj_group_ass[0]->asp_id ?>" name="asp_id" id="asp_id">
                            <!-- end input -->

                            <!-- Confirm -->
                            <div class="col-6 text-end">
                                <button type="button" class="btn bg-gradient-success mb-0" data-bs-toggle="modal"
                                    data-bs-target="#Modal_confirm" onclick="alart_evaluation()">Confirm
                                </button>
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
