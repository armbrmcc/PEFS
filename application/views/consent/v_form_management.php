<!--
    /*
    * v_evaluation_list
    * display Evaluation list
    * @input -
    * @output -
    * @author Phatchara Khongthandee and Ponprapai Atsawanurak 
    * @Create date : 2565-01-25
    * @Update date : 2565-03-12
    */
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
<!-- End JavaScript -->

<div class="container-fluid py-4">
    <div class="card" id="card_radius">
        <div class="card-header">
            <h2>Form Management (จัดการแบบฟอร์ม)</h2>
        </div>
        <!-- End cara header-->
        <div class="card-body">
            <!-- Start Table Evaluation List -->
            <div class="table-responsive">
                <table class="table align-items-center" id="list_table">
                    <thead>
                        <tr>
                            <th>#</th> 
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                    <?php  for($i=0;$i < count($level) ;$i++){ ?>
                                        <tr>
                                            <!-- # -->
                                            <td>
                                                <?php  echo $i+1 ;?>
                                            </td>
                                            <!--  Level -->
                                            <td>
                                                T<?php  echo $level[$i]->sec_level ;?>
                                            </td>
                                           
                                            <!-- Action -->
                                            <td>
                                            <form  action="<?php echo site_url() ?>Form_Management/Form_Management/form_management_prosition" method="post" enctype="multipart/form-data" name="form">
                                            <input type="hidden" name="seclevel" id="seclevel" value='<?php  echo $level[$i]->sec_level ;?>'  >
                                                    <button type="submit" class="btn btn-xs button_size"
                                                        style="background-color: #596CFF;">
                                                        <i class="fas fa-search text-white"></i>
                                                    </button>
                                        </form>
                                            </td>
                                        </tr>
                        
                    <?php  } ?>
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

