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

                    <!-- ปุ่มดำเนินการเพิ่ม -->
                    <main class="main-content position-relative max-height-vh-100 h-100 ">
                
                        <div class="card-body px-0 pt-0 pb-2">
                            <!-- <div class="table-responsive p-0"> -->
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
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T2</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">GM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. General Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Round 1 : 06/08/2021 <br> Round 2 : 08/08/2021</h6>
                                                
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                        
                                            <!-- ปุ่มดำเนิน -->
                                            <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail'; ?>">
                                                <button type="button" class="btn btn-xs button_size"style="background-color: #596CFF;">
                                                    <i class="fas fa-search text-white"></i>
                                                </button>
                                            </a>
                                            <!-- ปุ่มดำเนิน -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">2</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T3</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">AGM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Assistant General Manager
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Round 1 : 08/08/2021 <br> Round 2 : 25/08/2021</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- ปุ่มดำเนิน -->
                                            <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail'; ?>">
                                                <button type="button" class="btn btn-xs button_size"style="background-color: #596CFF;">
                                                    <i class="fas fa-search text-white"></i>
                                                </button>
                                                </a>
                                            <!-- ปุ่มดำเนิน -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">3</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T3</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">MGR</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Round 1 : 12/10/2021 <br> Round 2 : 24/10/2021</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- ปุ่มดำเนิน -->
                                            <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail'; ?>">
                                                <button type="button" class="btn btn-xs button_size"style="background-color: #596CFF;">
                                                    <i class="fas fa-search text-white"></i>
                                                </button>
                                                </a>
                                            <!-- ปุ่มดำเนิน -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">4</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">T5</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">AM</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">1. Assistant Manager </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-xs text-secondary mb-0">Round 1 : 13/11/2021</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <!-- ปุ่มดำเนิน -->
                                            <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail'; ?>">
                                                <button type="button" class="btn btn-xs button_size"style="background-color: #596CFF;">
                                                    <i class="fas fa-search text-white"></i>
                                                </button>
                                                </a>
                                            <!-- ปุ่มดำเนิน -->
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <!-- </div> -->
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

