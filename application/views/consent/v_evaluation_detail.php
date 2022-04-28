<!--
    /*
    * v_evaluation_detail
    * display Evaluation detail
    * @input -
    * @output -
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create date : 2565-01-25
    * @Update date : 2565-03-03
    * @Update date : 2565-03-05
    * @Update date : 2565-03-09
    * @Update date : 2565-03-10
    * @Update date : 2565-03-12
    */
-->

<!-- CSS -->
<style>
#list_table td,
#list_table th {
    padding: 10px;
    text-align: center;
}

#list_table tr:nth-child(even) {
    background-color: #e9ecef;
}

#list_table tr:hover {
    background-color: #adb5bd;
}

#card_radius {
    margin-top: 15px;
    margin-left: 14px;
    margin-right: 15px;
    margin-bottom: 15px;
    border-radius: 20px;
    min-height: 300px;
    width: auto;
}

#list_table {
    width: 98%;
    margin-top: 20px;
    margin-left: 10px;
}

.button_size {
    /* width: 5px; */
    height: 40px;
    text-align: center;
}

.btn {
    margin-bottom: 0rem;
}
</style>
<!-- End CSS -->

<!-- JavaScript -->
<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<!-- Data Table -->
<script>
$(document).ready(function() {
    $("#list_table").DataTable();
});
</script>
<!-- End Data Table -->


<!-- End JavaScript -->

<div class="container-fluid py-4">
    <div class="card" id="card_radius">
        <div class="card-header">
            <h2>Evaluation (การประเมิน)</h2>
        </div>
        <!-- End cara header-->
        <div class="card-body">
            <h3>Promote to T<?php echo $arr_group[0]->grp_position_group?></h3>
            <!-- Start Table Evaluation List -->
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="list_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Employee ID</th>
                            <th style="text-align: left; width: 300px;">List of Nominee</th>
                            <th>Promote To</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $s = 1; ?>
                        <?php for ($i = 0; $i < count($arr_nominee); $i++) { ?>
                        <tr>
                            <td>
                                <!-- # -->
                                <h6 class="text-xs text-secondary mb-0">
                                    <?php echo $s ?>
                                    <?php $s++;  ?>
                                </h6>
                            </td>
                            <!-- Employee ID -->
                            <td>
                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_nominee[$i]->grn_emp_id?></h6>
                            </td>
                            <!-- List of Nominee -->
                            <td style="text-align: left;">
                                <h6 class="text-xs text-secondary mb-0">
                                    <?php echo $arr_nominee[$i]->Empname_eng. ' ' . $arr_nominee[$i]->Empsurname_eng?>
                                </h6>
                            </td>
                            <!-- Promote to -->
                            <td>
                                <h6 class="text-xs text-secondary mb-0"><?php echo $arr_nominee[$i]->Position_name?>
                                </h6>
                            </td>
                            <!-- Action -->
                            <td>
                                <!-- check file nominee -->
                                <?php $check = 0 ?>
                                <?php for ($m = 0; $m < count($obj_file); $m++) { ?>
                                        <?php if ($obj_file[$m]->fil_emp_id ==  $arr_nominee[$i]->grn_emp_id) { 
                                            $check++;   
                                        } ?>
                                <?php } ?>
                                <?php if ($check == 1) { ?>
                                    <!-- check per_id -->
                                    <?php $check_per = 0; ?>
                                    <?php for ($k = 0; $k < count($obj_per); $k++) { ?>
                                        <?php if ($arr_nominee[$i]->grn_emp_id == $obj_per[$k]->per_emp_id && $arr_nominee[$i]->ase_id == $obj_per[$k]->per_ase_id ) { 
                                                $check_per++;   
                                            } ?>
                                    <?php } ?>
                                    <!-- round 1 -->
                                    <?php if($arr_nominee[$i]->asp_type == 1) { ?>
                                        <?php if($obj_date[0]->grd_date <= date("Y-m-d") && $arr_nominee[$i]->grp_status_edit == 1) {?>
                                            <?php if($check_per == 0) { ?>
                                                <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id. '/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                        style="background-color: #2dce89;">
                                                        <i class="far fa-file-alt text-white"></i>
                                                    </button>
                                                </a>
                                            <?php }else{ ?>
                                                <a
                                                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1_edit/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id. '/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                            style="background-color: rgb(255,212,59);">
                                                        <i class="fas fa-edit text-white"></i>
                                                    </button>
                                                </a>
                                            <?php } ?>
                                        <?php }else {?>
                                                <button type="button" class="btn btn-xs button_size"
                                                    style="background-color: #9FA2B4;">
                                                    <i class="far fa-file-alt text-white"></i>
                                                </button>
                                        <?php } ?>
                                    <!-- round 2 -->
                                    <?php } else if($arr_nominee[$i]->asp_type == 2) { ?>
                                        <!-- round 2/1 -->
                                        <?php if($obj_date[0]->grd_date <= date("Y-m-d") && $arr_nominee[$i]->grp_status_edit == 1) {?>    
                                            <?php if($check_per == 0) { ?>
                                                <a
                                                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_2/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id. '/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                            style="background-color: #2dce89;">
                                                        <i class="far fa-file-alt text-white"></i>
                                                    </button>
                                                </a>
                                            <?php }else{ ?>
                                                <a
                                                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_2_edit/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id. '/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                            style="background-color: rgb(255,212,59);">
                                                        <i class="fas fa-edit text-white"></i>
                                                    </button>
                                                </a>
                                            <?php } ?>
                                        <?php }else{ ?>
                                            <button type="button" class="btn btn-xs button_size"
                                                    style="background-color: #9FA2B4;">
                                                    <i class="far fa-file-alt text-white"></i>
                                            </button>
                                        <?php } ?>
                                        <!-- round 2/2 -->
                                        <!-- <?php echo $check_per?> -->
                                        <?php if($obj_date[1]->grd_date <= date("Y-m-d") && $arr_nominee[$i]->grp_status_edit == 2) {?>
                                            <?php if($check_per == 0) { ?>
                                                <a
                                                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_2_2/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id.'/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                        style="background-color: #2dce89;">
                                                        <i class="far fa-file-alt text-white"></i>
                                                    </button>
                                                </a>
                                            <?php }else if($check_per == 1){ ?>
                                                <a
                                                    href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_2_2_edit/'.$arr_nominee[$i]->grp_id. '/', $arr_nominee[$i]->ase_id. '/'.$arr_nominee[$i]->grn_id. '/'.$arr_nominee[$i]->grn_promote_to.'/'.$arr_nominee[$i]->grn_emp_id;?>">
                                                    <button type="button" class="btn btn-xs button_size"
                                                            style="background-color: rgb(255,212,59);">
                                                        <i class="fas fa-edit text-white"></i>
                                                    </button>
                                                </a>
                                            <?php } ?>
                                        <?php }else{ ?>
                                            <button type="button" class="btn btn-xs button_size"
                                                    style="background-color: #9FA2B4;">
                                                    <i class="far fa-file-alt text-white"></i>
                                            </button>
                                        <?php } ?>
                                    <?php } ?>
                                <?php }else {?>
                                    <button type="button" class="btn bg-gradient-danger btn-sm">
                                        Not have file
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- End Table Evaluation List-->
        </div>
        <!-- End card body-->
    </div>
    <!-- End card-->
</div>
<!-- End class container -->


