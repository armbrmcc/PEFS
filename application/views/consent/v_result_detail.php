<!--
    v_review
    display for review list
    @input -
    @output -
    @author Ponprapai
    Create date 2565-01-25
    Update date 2565-00-00
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
            Result management (การจัดการผลคะแนน)
        </h1>
    </div>
    <!-- End cara header-->
    <div class="card-body">
        <h3>Promote to T6</h3>
        <!-- Start Table Evaluation List -->
        <div class="table-responsive">
            <table class="table align-items-center" id="list_table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Employee ID</th>
                        <th style="text-align: left;">List of Nominee</th>
                        <th>Promote To</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            00010
                        </td>
                        <td style="text-align: left;">
                            Milin Dokthian
                        </td>
                        <td>
                            Supervisor
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #6c757d;">
                                    <i class="far fa-file-alt text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            00011
                        </td>
                        <td style="text-align: left;">
                            Punsikorn Tiyakorn
                        </td>
                        <td>
                            Supervisor
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #6c757d;">
                                    <i class="far fa-file-alt text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            00012
                        </td>
                        <td style="text-align: left;">
                            Natticha Chantaravareelrkha
                        </td>
                        <td>
                            Senior Staff
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #6c757d;">
                                    <i class="far fa-file-alt text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            00013
                        </td>
                        <td style="text-align: left;">
                            Nunthapak Kittirattanaviwat
                        </td>
                        <td>
                            Senior Staff
                        </td>
                        <td>
                            <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size"
                                    style="background-color: #6c757d;">
                                    <i class="far fa-file-alt text-white"></i>
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