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

<!-- End JavaScript -->

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

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
                    <tr>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">1</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> T6</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">SoftEn</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">Round 1 : 25/01/2022</h6>
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_list'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> 2</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">T2</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Burapha </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Round 2 : 16/01/2022</h6>
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_list'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Table Result List-->
    </div>
    <!-- End card body-->
</div>
<!-- End card-->


<!-- JavaScript -->
<!-- Data Table -->
<script>
$(document).ready(function() {
    $("#list_table").DataTable();
});
</script>
<!-- End Data Table -->
<!-- End JavaScript -->