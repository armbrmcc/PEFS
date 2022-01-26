<!--
    v_review
    display for review list
    @input -
    @output -
    @author Ponprapai Atsawanurak and Phatchara Khongthandee
    Create date 2565-01-25
    Update date 2565-00-00
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


<div class="card" id="card_radius">
    <div class="card-header">
        <h1>Result management (การจัดการผลคะแนน)</h1>
    </div>
    <!-- End cara header-->
    <div class="card-body">
        <!-- Start Table Evaluation List -->
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
                            1
                        </td>
                        <td>
                            T6
                        </td>
                        <td>
                            SoftEn
                        </td>
                        <td>
                            Round 1 : 25/01/2022
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_Result_list'; ?>">
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
                            T2
                        </td>
                        <td>
                            Burapha
                        </td>
                        <td>
                            Round 2 : 16/01/2022
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Result/Result/show_Result_list'; ?>">
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
        <!-- End Table Evaluation List-->
    </div>
    <!-- End card body-->
</div>
<!-- End card-->