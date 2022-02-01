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
                        <th>No.</th>
                        <th>Employee ID</th>
                        <th>List of Nominee</th>
                        <th>Score Round 1</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">1</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">00011</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Lyra </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">Totally score: 70 points<br>
                                Get score: 56 points</h6>
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">2</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> 00012</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Nena </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Totally score: 70 points<br>
                                Get score: 50 points </h6>
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> 3</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">00013</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Avander</h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0"> Totally score: 80 points<br>
                                Get score: 65 points </h6>
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_detail'; ?>">
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