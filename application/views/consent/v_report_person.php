<!-- 
    * v_report
    * Display report person of Performance Evaluation Factor System
    * @input    -
    * @output   -
    * @author  Chakrit and Nattakorn
    * @Create Date 2565-01-27
    * @Update Date -
-->
<style>
    table {
        text-align: center;
    }
</style>
<div class="container-fluid py-4">
    <div class="card-header" id="card_radius">
        <div class="text-end">
            <a href='#' id='download_link' onClick='javascript:ExcelReport();' class="btn btn-secondary float-right"><i class="fa fa-download"></i>&emsp;Excel</a>
        </div>
        <h2>Report Details (รายงานข้อมูลรายบุคคล)</h2>
    </div>
    <div class="card-body">
        <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
            <div class="table-responsive">
                <h4>List of assessed : Ponprapai Atsawanurak</h4>
                <hr class="my-4" color="gray">
                <h6 style="text-align:left">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <b>Current Position : </b><?php echo "Staff"; ?><br><br>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <b>Department : </b><?php echo "Accounting & Planning"; ?><br><br>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <b>Section code : </b><?php echo "6121"; ?><br><br>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <b>Promote to : </b><?php echo "Senior Staff"; ?><br><br>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <b>Presentation Date : </b><?php echo "03/12/2020"; ?>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <b>Company : </b><?php echo "SDM"; ?>
                        </div>
                    </div>
                </h6>
                <hr class="my-4" color="gray">
                <h5 style="text-align:left">
                    <b>Assessors : </b><?php echo "5"; ?> person
                </h5>
                <br>
                <div class="row" id="count_table">
                    <div class="col-xl-12">
                        <div class="card" style="background-color: #F8F8F8">
                            <div class="table-responsive">
                                <table class="table style="width:100%" id="example">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Assessors Name</th>
                                            <th scope="col">Score</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_table">
                                        <tr>
                                            <td><?php echo "1"; ?></td>
                                            <td><?php echo "00050"; ?></td>
                                            <td><?php echo "Cherprang Areekul"; ?></td>
                                            <td><?php echo "19"; ?> points</td>
                                        </tr>
                                        <tr>
                                            <td><?php echo "2"; ?></td>
                                            <td><?php echo "00051"; ?></td>
                                            <td><?php echo "Weeraya Zhang"; ?></td>
                                            <td><?php echo "19"; ?> points</td>
                                        </tr>
                                        <tr>
                                            <td><?php echo "3"; ?></td>
                                            <td><?php echo "00052"; ?></td>
                                            <td><?php echo "Milin Dokthian"; ?></td>
                                            <td><?php echo "25"; ?> points</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h5 style="text-align:left">
                    <b>Totally score : </b><?php echo  "245"; ?> points<br><br>
                    <b>Get score : </b><?php echo "153"; ?> points<br><br>
                    <b>Total score : </b><?php echo "62.45"; ?> %<br><br>
                    <b>Judgement : </b><span style="color:green;"><?php echo "Pass"; ?></span>
                </h5>
                <br>
                <div class="card-footer" style="background-color: #F8F8F8">
                    <center><a href="<?php echo site_url() . 'Report/Report/show_report_detail/' ?>" class="btn btn-secondary float-center"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></center>
                </div>
            </div>
        </div>
    </div>
</div>