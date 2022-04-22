<!-- 
    /*
    * v_score_management_detail
    * Display score norminee list in group
    * @input    -
    * @output   -
    * @author   Niphat Kuhoksiwt
    * @Create Date 2565-04-10
    * @Update Date 2565-04-14
    */ -->
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

    .off {
        background: #D90437;
        border-radius: 4px;
        color: #FFFFFF;
        text-align: center;
        border: none;

    }

    .on {
        background: #0DD739;
        border-radius: 4px;
        color: #FFFFFF;
        text-align: center;
        border: none;
        
    }
    select {
        width: 10% !important;
        margin-left: 78%;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script language="javascript">
    $(document).ready(function() {
            $('#on').on('click', function() {
                if (this.value == 'on') {
                    document.getElementById("info").disabled = true;
                    document.getElementById("on").value = "off";
                    document.getElementById("on").innerHTML = "close";
                    document.getElementById("on").style.background = "#D90437";
                } else {
                    document.getElementById("info").disabled = false;
                    document.getElementById("on").value = "on";
                    document.getElementById("on").innerHTML = "open";
                    document.getElementById("on").style.background = "#0DD739";
                }
            });
        });
</script>

<h2>
    Score Management Group (การจัดการคะแนนกลุ่ม)
</h2>
<div class="card-header" id="card_radius">
    <div class="row">
        <div class="col">
            <h3>Detail Group <label for="cars" style="font-size : 20px;margin-left : 69%">Group Status:</label>
                <button type="button" class="float-right on" style="text-align: center;" id="on" value="on">
                    open
                    <!-- <i class="fas fa-circle" style="font-size:30px; "></i> -->
                </button>
            </h3>
            <hr class="my-4" color="gray">
            <h5 class="mb-0">Group : <?php echo 'T' . $group[0]->asp_id ?>
                <label for="cars" style="font-size : 20px;margin-left : 72%">Select Round :</label>
                <select name="cars" class="form-control" id="cars">
                    <option value="volvo">Round 1 </option>
                    <option value="saab">Round 2 </option>
                </select>
            </h5>
            <h5 class="mb-0">Group Name : <?php echo $group[0]->asp_name ?></h5>
            <h5 class="mb-0">Promote : <?php echo $group[0]->Position_name ?></h5>
            <h5 class="mb-0">Date : <?php echo date("d/m/Y", strtotime($group[0]->grp_date)) ?></h5>
            <hr class="my-4" color="gray">
        </div>

        <?php
        $sum_point = 0;
        $point_total = [];
        $check_emp = '';
        $point_ass = [];
        $total = [];
        $get = [];
        foreach ($ass_data as $index_ass => $row_ass) {
            foreach ($point_data as $index => $row) {
                if ($row_ass->ase_id == $row->per_ase_id) {
                    $sum_point += intval($row->ptf_point);
                }
                //if 
            }
            //for each point_data
            if ($sum_point != 0) {
                array_push($point_total, $sum_point);
            } else {
                array_push($point_total, 0);
            }
            $sum_point = 0;
        }
        //for each ass_data
        array_push($point_ass, $point_total);
        array_push($total, (sizeof($point_data) * 5));
        array_push($get, array_sum($point_total));
        $point_total = [];
        ?>

        <!-- Light table -->
        <div class="table-responsive">
            <table class="table" id="Score">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">#</th>
                        <th scope="col" class="sort" data-sort="name">Nominee ID</th>
                        <th scope="col" class="sort" data-sort="name">Nominee name</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Assessor</th>
                        <th scope="col" class="sort" data-sort="completion">Summary Score</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php for ($i = 0; $i < count($nominee); $i++) { ?>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm"><?php echo $i + 1 ?></span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                <?php echo $nominee[$i]->Emp_ID ?>
                                <input type="text" id="<?php echo 'emp_id_' . $i ?>" value=" <?php echo $nominee[$i]->Emp_ID ?>" hidden onchange="get_evaluation(<?php echo $nominee[$i]->Emp_ID ?>)">
                            </td>
                            <td>
                                <span class="name mb-0 text-sm">
                                    <!-- <i class="bg-warning"></i> -->
                                    <span class="status"><?php echo $nominee[$i]->Empname_eng . ' ' . $nominee[$i]->Empsurname_eng ?></span>
                                </span>
                            </td>
                            <td>
                                <?php
                                if ($count[$i] == count($assessor)) {
                                ?>

                                    <?php if ($nominee[$i]->grn_status_result == 1) { ?>
                                        <span class="name mb-0 text-sm">
                                            <i class="bg-success"></i>
                                            <span class="status"><?php echo 'Pass' ?></span>
                                        </span>
                                    <?php } if ($nominee[$i]->grn_status_result == 2) { ?>
                                        <span class="name mb-0 text-sm">
                                            <i class="bg-danger"></i>
                                            <span class="status"><?php echo 'Not pass' ?></span>
                                        </span>
                                    <?php  }
                                } if ($nominee[$i]->grn_status_result != 1 && $nominee[$i]->grn_status_result != 2  ) { ?>
                                    <span class="name mb-0 text-sm">
                                        <span class="status"><?php echo 'Pending Assess' ?></span>
                                    </span>
                                <?php } ?>
                            </td>
                            <td>
                                <div class="avatar-group">

                                    <span id="<?php echo 'demo_' . $i ?>" class="User"><?php echo $count[$i] ?>/<?php echo count($assessor) ?></span>
                                </div>
                            </td>
                            <td>

                                <?php
                                if ($count[$i] == count($assessor)) {
                                    if ($nominee[$i]->grn_status_done == 0 || $nominee[$i]->grn_status_done == 1 || $nominee[$i]->grn_status_result == 1 || $nominee[$i]->grn_status_result == 2) { ?>
                                        <?php
                                        $index_point = 0;
                                        ?>

                                        <b>Totally score : </b><?php echo  $total[$index_point]; ?> points<br>
                                        <b>Get score : </b><?php echo $get[$index_point]; ?> points<br>
                                        <?php $percent = $get[$index_point] * 100 / $total[$index_point]; ?>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2"><?php echo number_format($percent, 2, '.', ''); ?>
                                                %</span>
                                            <div>
                                                <?php if ($percent >= 55) { ?>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent . '%' ?>;">
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent . '%' ?>;">
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    <?php } else { ?>
                                        <span class="completion mr-2"><?php echo number_format(0, 2, '.', ''); ?> %</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo '0' . '%' ?>;">
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($count[$i] == count($assessor)) {
                                    if ($nominee[$i]->grn_status_done == 0 || $nominee[$i]->grn_status_done == 1 || $nominee[$i]->grn_status_done == 2) { ?>
                                        <div class="dropdown">

                                            <button type="button" class="btn btn-warning button_size" data-bs-toggle="modal" data-bs-target="#ModalAddGroup" id="info">
                                                <i class="fa fa-refresh" style="font-size:15px;"></i>
                                            </button>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-warning button_size" data-bs-toggle="modal"  disabled>
                                            <i class="fa fa-refresh" style="font-size:15px;"></i>
                                        </button>
                                    </div>
                                <?php } ?>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal_<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Manage Group review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo site_url() . 'Score_management/Score_management/review'; ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <h5 class="modal-title" id="exampleModalLabel">Date</h5>
                                            <input type="date" id="date" name="date" class="form-control" min="<?php echo date('Y-m-d') ?>" required>
                                            <input type="text" id="Emp_id" name="emp" class="form-control" value="<?php echo $nominee[$i]->Emp_ID ?>" hidden>
                                            <input type="text" id="Emp_id" name="emp_id" class="form-control" value="<?php echo $nominee[$i]->grn_id ?>" hidden>
                                            <input type="text" id="group" name="group" class="form-control" value="<?php echo $group[0]->grp_position_group ?>" hidden>
                                            <input type="text" id="pos" name="pos" class="form-control" value="<?php echo $nominee[$i]->grn_promote_to ?>" hidden>
                                            <input type="text" id="grp_id" name="grp_id" class="form-control" value="<?php echo $group[0]->grp_id ?>" hidden>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal fade" id="review_<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manage Group review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo site_url() . 'Score_management/Score_management/review'; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <h5 class="modal-title" id="exampleModalLabel">Date</h5>
                            <input type="date" id="date" name="date" class="form-control" min="<?php echo date('Y-m-d') ?>" required>
                            <input type="text" id="Emp_id" name="emp_id" class="form-control" value="<?php echo $nominee[$i]->Emp_ID ?>" hidden>
                            <input type="text" id="group" name="group" class="form-control" value="<?php echo $group[0]->grp_position_group ?>" hidden>
                            <input type="text" id="pos" name="pos" class="form-control" value="<?php echo $nominee[$i]->grn_promote_to ?>" hidden>
                            <input type="text" id="grp_id" name="grp_id" class="form-control" value="<?php echo $group[0]->grp_id ?>" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="Modal_<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Manage Next Evaluation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo site_url() . 'Score_management/Score_management/next_evaluation'; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <h5 class="modal-title" id="exampleModalLabel">Date</h5>
                            <input type="date" id="date" name="date" class="form-control" min="<?php echo date('Y-m-d') ?>" required>
                            <input type="text" id="Emp_id" name="emp_id" class="form-control" value="<?php echo $nominee[$i]->Emp_ID ?>" hidden>
                            <input type="text" id="group" name="group" class="form-control" value="<?php echo $group[0]->grp_position_group ?>" hidden>
                            <input type="text" id="pos" name="pos" class="form-control" value="<?php echo $nominee[$i]->grn_promote_to ?>" hidden>
                            <input type="text" id="grp_id" name="grp_id" class="form-control" value="<?php echo $group[0]->grp_id ?>" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <?php } ?>
    </tbody>
    </table>
    </div>
</div>
<center><a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_list'; ?>" class="btn btn-secondary float-center"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></center>
</div>
<!-- Button trigger modal -->
<div class="modal fade" id="ModalAddGroup" tabindex="-1" role="dialog" aria-labelledby="ModalAddGroupTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="ModalAddGroupLabel">Manage Group review</h2>&nbsp;
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label" style="font-size:20px;">Date : </label>
                        <input type="date" id="date" style="font-size:20px;" class="form-control" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>"><br>
                    </div>

                    <div class="modal-footer" style="margin-right : 29.5%">
                        <!-- ปุ่มปิด modal -->
                        <a href="">
                            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                        </a>
                        <!-- ปุ่มบันทึก -->
                        <a href="">
                            <button type="button" class="btn bg-gradient-success">Submit</button>
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#Score').DataTable();
            console.log(999);
        });
    </script>
    </script>
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.2.0"></script>
    <script type="text/javascript">