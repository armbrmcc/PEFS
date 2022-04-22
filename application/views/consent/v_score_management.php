<!--
    /*
    * v_score_management
    * display Score Management list
    * @input -
    * @output -
    * @author Jaraspon Seallo 
    * @Create date : 2565-01-26
    */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- CSS -->
    <style>
    #list_table td,
    #list_table th {
        padding: 12px;
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
    <script>

    </script>
    
    <script type="text/javascript">
    function showhide() {
        var choices = document.getElementById('selectBoxx').value;
        var x = 'pstats',
            y = 'jdk';
        if (choices == 2) {
            x = 'jdk';
            y = 'pstats';
        }
        document.getElementById(y).style.display = 'none';
        document.getElementById(x).style.display = 'block';
    }
    </script>

    <!-- End JavaScript -->


    <div class="container-fluid py-4">
        <div class="card-header">
            <h2>Score Management (จัดการคะแนนการประเมิน)</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">

                    <!-- ปุ่มดำเนินการเพิ่ม
                    <main class="main-content position-relative max-height-vh-100 h-100 "> -->
                
                    <div class="card-body px-0 pt-0 pb-2">
                            <table class="table align-items-center" id="list_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Group</th>
                                        <th>Group Name</th>
                                        <th>Promote</th>
                                        <th>Date </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=1; $i<count($as_group); $i++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">
                                                    <?php echo $i+1?>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">
                                                    <?php echo 'T'.$as_group[$i]->grp_position_group?>
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">
                                                    <?php echo $as_group[$i]->asp_name?>
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">
                                                    <?php echo '1. '.$as_group[$i]->Position_name?>
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <?php $cot = 1 ;?>
                                                <h6 class="text-xs text-secondary mb-0">
                                                <?php echo "Round ".$cot." : ".date("d/m/Y", strtotime($as_group[$i]->grp_date));?>
                                                </h6>
                                                
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- Start button trigger modal edit -->
                                            <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail/'.$as_group[$i]->grp_id; ?>">
                                                <!-- ปุ่มดำเนินการแก้ไข -->
                                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                                <i class="fas fa-search text-white"></i>
                                                </button>
                                            </a>
                                            <!-- End button trigger modal edit-->
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>   
                                </tbody>
                            </table>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#list_table").DataTable();
        });
    </script>




</body>

</html>

