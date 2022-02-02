<!-- 
    * v_report
    * Display report group of Performance Evaluation Factor System
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
        <h2>Report Details (รายงานข้อมูลรายกลุ่ม)</h2>
    </div>
    <div class="card-body">
        <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
            <h4>
                Promote to T6
            </h4>
            <div class="table-responsive">
                <table class="table" style="width:100%" id="example">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Employee ID</th>
                            <th>List of assessed</th>
                            <th>Group ID</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1111</td>
                            <td>Ponprapai Atsawanurak</td>
                            <td>G0001</td>
                            <td>Staff</td>
                            <td style="color:green">Passed</td>
                            <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/Report/show_report_person/' ?>'>
                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1112</td>
                            <td>Niphat Kuhoksiw </td>
                            <td>G0002</td>
                            <td>Staff</td>
                            <td style="color:red">Fail</td>
                            <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/Report/show_report_person/' ?>'>
                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1113</td>
                            <td>Apinya Phadungkit</td>
                            <td>G0002</td>
                            <td>Staff</td>
                            <td style="color:red">Fail</td>
                            <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/Report/show_report_person/' ?>'>
                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1114</td>
                            <td>Chakrit Boonprasert</td>
                            <td>G0001</td>
                            <td>Staff</td>
                            <td style="color:green">Passed</td>
                            <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/Report/show_report_person/' ?>'>
                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <center><a href="<?php echo site_url() . 'Report/Report/show_report_all'; ?>" class="btn btn-secondary float-center"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></center>
    </div>
</div>