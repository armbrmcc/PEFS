<!--
    v_review
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
        <!-- End cara header-->
        <div class="card-body">
            <!-- Start Table Result List -->
            <div class="table-responsive">
                <table class="table align-items-center" id="list_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Group</th>
                            <th>Group Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $s = 1; ?>
                        <?php for ($i = 0; $i < count($grass_list); $i++) { ?>
                        <?php if (date("Y-m-d") ==  $grass_detail[$i]->grp_date || $grass_detail[$i]->grp_date > date("Y-m-d")) { ?>
                        <tr>
                            <!-- # -->
                            <td>
                                <h6 class="text-xs text-secondary mb-0">
                                    <?php echo $s ?>
                                    <?php $s++;  ?>
                                </h6>
                            </td>
                            <!-- Group Level -->
                            <td>
                                <h6 class="text-xs text-secondary mb-0">T<?php echo $grass_list[$i]->asp_level ?></h6>
                            </td>
                            <!-- Group Name -->
                            <td>
                                <h6 class="text-xs text-secondary mb-0"><?php echo $grass_list[$i]->asp_name ?></h6>
                            </td>
                            <!-- Date -->
                            <td>
                                <?php if ($grass_detail[$i]->grd_round == 1) { ?>
                                <?php $newDate = date("d/m/Y", strtotime($grass_detail[$i]->grp_date)); ?>
                                <h6 class="text-xs text-secondary mb-0">
                                    Round<?php echo ' ' . $grass_detail[$i]->grd_round . ' ' ?>:<?php echo ' ' . $newDate ?>
                                </h6>
                                <?php } else { ?>
                                <?php $newDate = date("d/m/Y", strtotime($grass_detail[$i]->grp_date)); ?>
                                <h6 class="text-xs text-secondary mb-0">
                                    Round<?php echo ' ' . $grass_detail[$i]->grd_round . ' ' ?>:<?php echo ' ' . $newDate ?>
                                </h6>
                                <?php } ?>
                            </td>
                            <!-- Action -->
                            <td>
                                <a
                                    href="<?php echo site_url() . 'Result/Result/show_result_list' . $grass_detail[$i]->ase_gro_id . '/' . $grass_detail[$i]->grp_id; ?>">
                                    <button type="button" class="btn btn-xs button_size"
                                        style="background-color: #596CFF;">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
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