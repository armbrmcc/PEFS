<!--
    v_renewal
    display for edit End date
    @input Form_ID
    @output -
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<style>
table {
    text-align: center;
}
</style>
<div class="card">
    <div class="card-header" id="card_radius">
        <h2>
            The table show the report the reports of each position

        </h2>
        <div class="card-body">
            <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
                <div class="table-responsive">

                    <table class="table" style="width:100%" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Position</th>
                                <th>Number</th>
                                <th>Pass</th>
                                <th>Fail</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            for ($i = 0; $i < count(2); $i++) { ?>
                            <tr>
                                <?php
                                    $No = 1;
                                    for ($i = 0; $i < count(2); $i++) { ?>
                                <td style='text-align:center'>

                                    <?php echo $No; ?>
                                <td>
                                    Promote to T6
                                </td>

                                <td>3</td>
                                <td>2
                                </td>

                                <td>1</td>




                                <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/show_detail_report/'
                                                            ?>'>

                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                                </td>

                                <?php } ?>
                                <?php } ?>
                        </tbody>


                        </tr>
                        <td style='text-align:center'>

                            <?php echo $No; ?>
                        <td>
                            Promote to T1
                        </td>

                        <td>4</td>
                        <td>1
                        </td>

                        <td>10

                        </td>
                        <td> <?php { ?>
                            <a href='<?php echo site_url() . 'Report/show_detail/'
                                            ?>'>

                                <i class="fa fa-search"></i>
                            </a><?php } ?>
                        </td>

                        <tr>
                            <?php  ?>
                            <td></td>
                            <td></td>
                            <td>total 7</td>
                            <td>4</td>
                            <td>3</td>
                        </tr>
                    </table>

                    <div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
                </script>
                <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
                <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
                <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
                <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
                <!-- Argon JS -->
                <script src="../../assets/js/argon.js?v=1.2.0"></script>
                <script type="text/javascript">