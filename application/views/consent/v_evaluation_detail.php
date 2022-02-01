<!--
    /*
    * v_evaluation_detail
    * display Evaluation detail
    * @input -
    * @output -
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak
    * @Create date : 2565-01-25
    */
-->

<!-- CSS -->
<style>
#list_table td,
#list_table th 
{
    padding: 10px;
    text-align: center;
}

#list_table tr:nth-child(even) 
{
    background-color: #e9ecef;
}

#list_table tr:hover 
{
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

#list_table 
{
    width: 98%;
    margin-top: 20px;
    margin-left: 10px;
}

.button_size 
{
    /* width: 5px; */
    height: 40px;
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
            <h2>Evaluation (การประเมิน)</h2>
        </div>
        <!-- End cara header-->
            <div class="card-body">
                <h3>Promote to T6</h3>
                <!-- Start Table Evaluation List -->
                <div class="table-responsive">
                    <table class="table align-items-center mb-0" id="list_table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Employee ID</th>
                                <th style="text-align: left; width: 300px;">List of Nominee</th>
                                <th>Promote To</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">1</h6> 
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">00010</h6>
                                </td>
                                <td style="text-align: left;">
                                    <h6 class="text-xs text-secondary mb-0">Milin Dokthian</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">Supervisor</h6>
                                </td>
                                <td>
                                    <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1'; ?>">
                                        <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #6c757d;">
                                            <i class="far fa-file-alt text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">2</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">00011</h6>    
                                </td>
                                <td style="text-align: left;">
                                    <h6 class="text-xs text-secondary mb-0">Kanteera Wadcharathadsanakul</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">Supervisor</h6>
                                </td>
                                <td>
                                    <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1'; ?>">
                                        <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #6c757d;">
                                            <i class="far fa-file-alt text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">3</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">00012</h6>  
                                </td>
                                <td style="text-align: left;">
                                    <h6 class="text-xs text-secondary mb-0">Natticha Chantaravareelrkha</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">Senior Staff</h6>
                                </td>
                                <td>
                                    <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1'; ?>">
                                        <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #6c757d;">
                                            <i class="far fa-file-alt text-white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">4</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">00013</h6>
                                </td>
                                <td style="text-align: left;">
                                    <h6 class="text-xs text-secondary mb-0">Nunthapak Kittirattanaviwat</h6>
                                </td>
                                <td>
                                    <h6 class="text-xs text-secondary mb-0">Senior Staff</h6>
                                </td>
                                <td>
                                    <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_form_round_1'; ?>">
                                        <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #6c757d;">
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