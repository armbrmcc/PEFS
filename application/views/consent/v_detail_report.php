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
        <h1>
            Renew Tag (ต่ออายุคำขอ)

        </h1>
        <div class="card-body">
            <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
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

                            <?php

                            for ($i = 0; $i < count(2); $i++) { ?>
                            <tr>
                                <?php
                                    $No = 1;
                                    for ($i = 0; $i < count(2); $i++) { ?>
                                <td style='text-align:center'>

                                    <?php echo $No; ?>
                                <td>
                                    1111
                                </td>

                                <td>Jonan Khonsitaine</td>
                                <td>G0001
                                </td>

                                <td>Staff</td>
                                <td> pass
                                </td>
                                </td>

                                <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/Report/show_report_asse_detail/'
                                                            ?>'>

                                        <i class="fa fa-search"></i>
                                    </a><?php } ?>
                                    <?php } ?>
                                    <?php } ?>
                        </tbody>


                        </tr> <?php

                                for ($i = 0; $i < count(2); $i++) { ?>
                        <tr>
                            <?php
                                    $No = 1;
                                    for ($i = 0; $i < count(2); $i++) { ?>
                            <td style='text-align:center'>

                                <?php echo $No; ?>
                            <td>
                                1112
                            </td>

                            <td>Jonan Kovat</td>
                            <td>G0002
                            </td>

                            <td>Staff</td>
                            <td>fail
                            </td>
                            </td>

                            <td> <?php { ?>
                                <a href='<?php echo site_url() . 'Report/Report/show_report_asse_detail/'
                                                        ?>'>

                                    <i class="fa fa-search"></i>
                                </a><?php } ?>
                                <?php } ?>
                                <?php } ?>
                                </tbody>


                        </tr> <?php

                                    for ($i = 0; $i < count(2); $i++) { ?>
                        <tr>
                            <?php
                                        $No = 1;
                                        for ($i = 0; $i < count(2); $i++) { ?>
                            <td style='text-align:center'>

                                <?php echo $No; ?>
                            <td>
                                1113
                            </td>

                            <td>Alexa Gol</td>
                            <td>G0002
                            </td>

                            <td>Staff</td>
                            <td> fail
                            </td>
                            </td>

                            <td> <?php { ?>
                                <a href='<?php echo site_url() . 'Report/Report/show_report_asse_detail/'
                                                            ?>'>

                                    <i class="fa fa-search"></i>
                                </a><?php } ?>
                                <?php } ?>
                                <?php } ?>
                                </tbody>


                        </tr> <?php

                                        for ($i = 0; $i < count(2); $i++) { ?>
                        <tr>
                            <?php
                                            $No = 1;
                                            for ($i = 0; $i < count(2); $i++) { ?>
                            <td style='text-align:center'>

                                <?php echo $No; ?>
                            <td>
                                1114
                            </td>

                            <td>Quiver Olsen</td>
                            <td>G0001
                            </td>

                            <td>Staff</td>
                            <td> pass
                            </td>
                            </td>

                            <td> <?php { ?>
                                <a href='<?php echo site_url() . 'Report/Report/show_report_asse_detail/'
                                                                ?>'>

                                    <i class="fa fa-search"></i>
                                </a><?php } ?>
                                <?php } ?>
                                <?php } ?>
                                </tbody>


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