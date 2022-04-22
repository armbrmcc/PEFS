<!--
    v_result_group_assessor
    display for review list
    @input -
    @output -
    @author Ponprapai Atsawanurak and Phatchara Khongthandee
    Create date 2565-01-25
    Update date 2565-01-28
-->
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
    font-size: 12px;
    text-align: center;
}
</style>
<!-- End CSS -->

<!-- JavaScript -->

<!-- End JavaScript -->

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>
<div class="container-fluid py-4">
    <div class="card" id="card_radius">
        <div class="card-header">
            <h2>Result (ผลคะแนนการประเมิน)</h2>
        </div>
        <!-- End cara header -->
        <div class="card-body">
            <!-- Start Table Result List -->
            <div class="table-responsive">
                <table class="table align-items-center" id="list_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Group</th>
                            <!-- <th>Group Name</th> -->
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($arr_group); $i++) { ?>
                            <?php $use_round = 0; ?>
                            <tr>
                                <!-- # -->
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">
                                        <?php echo $i+1 ?>
                                    </h6>
                                </td>
                                <!-- Group Level -->
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">T<?php echo $arr_group[$i]->asp_level ?></h6>
                                </td>
                                <!-- Group Name -->
                                <!-- <td>
                                    <h6 class="text-xs text-secondary mb-0"><?php echo $arr_group[$i]->asp_name ?></h6>
                                </td> -->
                                
                                <!-- Date -->
                                <td>
                                    <?php if ($arr_group[$i]->asp_type == 1) { ?>
                                        <?php $newDate = date("d/m/Y", strtotime($arr_group[$i]->grd_date)); ?>
                                            <h6 class="text-xs text-secondary mb-0">Round<?php echo ' '.$arr_group[$i]->grd_round.' ' ?>:<?php echo ' '.$newDate ?></h6>
                                    <? } else if($arr_group[$i]->asp_type == 2) { ?>  
                                        <?php $use_round++; ?>
                                        <?php $newDate = date("d/m/Y", strtotime($arr_group[$i]->grd_date)); ?>
                                        <h6 class="text-xs text-secondary mb-0">Round<?php echo ' '.$arr_group[$i]->grd_round.' ' ?>:<?php echo ' '.$newDate ?></h6><br>
                                        <?php $newDate = date("d/m/Y", strtotime($obj_date[$i+1]->grd_date)); ?>
                                        <h6 class="text-xs text-secondary mb-0">Round<?php echo ' '.$obj_date[$i+1]->grd_round.' ' ?>:<?php echo ' '.$newDate ?></h6>
                                    <? } ?>
                                </td>
                                <!-- Action -->
                                <td>
                                    <a
                                        href="<?php echo site_url() . 'Result/Result/show_result_list/' .$arr_group[$i]->ase_emp_id. '/'.  $arr_group[$i]->grp_id; ?>">
                                        <button type="button" class="btn btn-xs button_size"
                                            style="background-color: #596CFF;">
                                            <i class="fas fa-search text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php if($use_round > 0) {?>
                                    <?php $i++; ?>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- End Table Result List-->
        </div>
        <!-- End card body-->
    </div>
    <!-- End card-->
</div>
<!-- End class container -->


<!-- JavaScript -->
<!-- Data Table -->
<script>
$(document).ready(function() {
    $("#list_table").DataTable();
});
</script>
<!-- End Data Table -->
<!-- End JavaScript -->