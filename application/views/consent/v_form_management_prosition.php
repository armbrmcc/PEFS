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

<!-- set data -->
    <input type="hidden" name="num_pos"  id="num_pos" value='<?php echo  count($pos); ?>'  >
<!-- End  set data -->
<div class="container-fluid py-4">
    <div class="card" id="card_radius">
        <div class="card-header">
            <h2>Form Management (จัดการแบบฟอร์ม)</h2>
            
            <div class="col-12 text-end">year :
                <select name="pos_year"id="year_select" onchange="set_selectvalue()">
                    <?php 
                        for($i = date('Y') ; $i > date('Y')-5; $i--){
                            echo "<option value=$i>$i</option>";
                        }
                    ?>
                </select>
            </div>
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
                    <?php  for($i=0;$i < count($pos) ;$i++){ ?>
                                        <tr>
                                            <!-- # -->
                                            <td>
                                                <?php  echo $i+1 ;?>
                                            </td>
                                            <!--  pos -->
                                            <td>
                                                <?php  echo $pos[$i]->Position_name ;?>
                                            </td>
                                           
                                            <!-- Action -->
                                            <td>
                                            <form  action="<?php echo site_url() ?>Form_Management/Form_Management/form_management_detail" method="post" enctype="multipart/form-data" name="form">
                                            <input type="hidden" name="pos_year"  id="year<?php echo $i; ?>" value='<?php echo date('Y'); ?>'  >
                                            <input type="hidden" name="position" id="position" value='<?php  echo $pos[$i]->Position_ID ;?>'  >
                                            <button type="submit" class="btn btn-primary btn-sm button_size" style="background-color: #F6A118;">
                                                     <i class="fa fa-pencil-square-o"></i>
                                            </button>
                                            </form>
                                            </td>
                                        </tr>
                                    <?php }?>
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

<script>
function set_selectvalue (){
    var year_select = document.getElementById("year_select");
    
    var year_value =  year_select.options[year_select.selectedIndex].value
     for(var i=0;i<document.getElementById("num_pos").value;i++){
    
        document.getElementById("year"+i).value = year_value;
    }

}
</script>