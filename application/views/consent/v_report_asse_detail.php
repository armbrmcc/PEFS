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
<h1>Report detail</h1>
<div class="card">
    <div class="card-header" id="card_radius">
        <div class="card-body">
            <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
                <div class="table-responsive">
                    <form class="form-inline">
                        <h3> List of assessed : Jonan Khonsitaine </h3>
                        <hr>
                        <table class="table" style="width:100%" id="example">
                            <tr style="text-align: center;">


                                <td>
                                    current position : <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                                <td>
                                    department :
                                    <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>
                                    Section code : <input type="text" class="frm_first" value="Staff" disabled></td>
                                <td>
                                    Promote to :
                                    <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Presented date : <input type="text" class="frm_first" value="Staff" disabled></td>
                                <td>
                                    Company : <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                        </table><br>
                        <hr>
                        <h4>Assessor <input type="text" class="frm_first" value="2" disabled></h4>
                        <div class="card-body">
                            <table class="table" style="width:100%" id="example">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Employee ID</th>
                                        <th>Assessor name</th>
                                        <th>Score</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $No = 1;
                                    for ($i = 0; $i < count(2); $i++) { ?>

                                    <tr>

                                        <td style='text-align:center'>
                                            <?php {
                                                    echo $No++;
                                                } ?></td>

                                        <td>
                                            00025
                                        </td>

                                        <td>Bruce Wayne</td>

                                        <td>
                                            50
                                        </td>
                                    </tr>

                                    <tr>

                                        <td style='text-align:center'>
                                            <?php {
                                                    echo $No++;
                                                } ?></td>

                                        <td>
                                            00041
                                        </td>

                                        <td>Willem Joigo</td>

                                        <td>
                                            50
                                        </td>
                                    </tr>




                                </tbody>


                        </div>

                        <?php } ?>

                        </table>
                        <table class="table" id="example">
                            <tr>
                                <td>Totally Score : <input type="text" class="frm_first" value="Staff" disabled></td>
                            </tr>
                            <tr>
                                <td>Get Score : <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td> Total Score : <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Judgement : <input type="text" class="frm_first" value="Staff" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php { ?>
                                    <a href='<?php echo site_url() . 'Report/show_detail_report/'
                                                ?>'>

                                        <button class="btn btn-outline-dark" type="button">Back</button>
                                    </a><?php } ?>

                                </td>
                            </tr>


                        </table>
                    </form>
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