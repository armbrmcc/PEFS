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
    text-align: center;
}
</style>
<!-- End CSS -->

<!-- JavaScript -->

<!-- End JavaScript -->


<div class="card" id="card_radius">
    <div class="card-header">
        <h1>
            Result (ผลคะแนนการประเมิน)
        </h1>
    </div>
    <!-- End cara header-->
    <div class="card-body">
        <h3>Promote to T2</h3>
        <!-- Start Table Result List -->
        <div class="table-responsive">
            <table class="table align-items-center" id="list_table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Employee ID</th>
                        <th style="text-align: left;">List of Nominee</th>
                        <th>Score Round 1</th>
                        <th>Score Round 2</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            00011
                        </td>
                        <td style="text-align: left;">
                            Lyra
                        </td>
                        <td>
                            Totally score: 70 points<br>
                            Get score: 56 points
                        </td>
                        <td>
                            -
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_evaluation'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            00012
                        </td>
                        <td style="text-align: left;">
                            Nena
                        </td>
                        <td>
                            Totally score: 70 points<br>
                            Get score: 60 points
                        </td>
                        <td>
                            Totally score: 70 points<br>
                            Get score: 56 points
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_evaluation'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            00013
                        </td>
                        <td style="text-align: left;">
                            Avander
                        </td>
                        <td>
                            Totally score: 80 points<br>
                            Get score: 65 points
                        </td>
                        <td>
                            Totally score: 70 points<br>
                            Get score: 57 points
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_result_evaluation'; ?>">
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