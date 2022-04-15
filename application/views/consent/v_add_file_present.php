<!--
    /*
    * v_add_file_present
    * display Management file present of Nominee list
    * @author Chakrit
    * input Array of nominee group (emp_nominee)
    * output Input file of present to nominee
    * @Create date : 2564-01-27
    * @Update date : -
*/
<!-- CSS -->
<style>
#Nominee_file_table td,
#Nominee_file_table th {
    padding: 8px;
    text-align: center;
}

#Nominee_file_table tr:nth-child(even) {
    background-color: #e9ecef;
}

#Nominee_file_table tr:hover {
    background-color: #adb5bd;
}

#card_radius {
    margin-left: 14px;
    margin-right: 15px;
    border-radius: 20px;
    width: auto;
    min-height: 300px;
}

#Nominee_file_table {
    width: 98%;
    margin-top: 20px;
    margin-left: 10px;
}

div.b {
    text-align: left;

}

div.a {
    text-align: center !important;

}
</style>
<div class="container-fluid py-4">
    <div class="card-header">
        <h2>Add File Nominee (เพิ่มไฟล์นำเสนอผลงาน)</h2>
    </div>
    <!-- Table group Nominee list -->
    <div class="card-body" id="card_radius">
        <div class="table-responsive">
            <table class="table align-items-center" id="Nominee_file_table" id="list_table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Employee</th>
                        <th scope="col">Nominee Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Department</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <?php for ($i = 0; $i < count($emp_nominee); $i++) { ?>
                    <tr>
                        <td class="text-center">
                            <h6 class="text-xs text-secondary mb-0">
                                <?php echo ($i + 1); ?>
                            </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">
                                <?php echo $emp_nominee[$i]->Emp_ID  ?>
                            </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">
                                <?php echo $emp_nominee[$i]->Empname_eng . ' ' . $emp_nominee[$i]->Empsurname_eng ?>
                            </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">
                                <?php echo $emp_nominee[$i]->Pos_shortName  ?>
                            </h6>
                        </td>
                        <td>
                            <h6 class="text-xs text-secondary mb-0">
                                <?php echo $emp_nominee[$i]->Department ?>
                            </h6>
                        </td>
                        <!-- column ดำเนินการ -->
                        <td style='text-align: center;'>

                            <!-- ปุ่มดำเนินการ -->
                            <?php
                            // ตรวจสอบว่ามีไฟล์หรือยัง
                            $check = 0;
                            foreach ($emp_file as $row) {
                                if ($row->fil_emp_id == $emp_nominee[$i]->Emp_ID) {
                                    $check++;
                                }
                                // if 
                            }
                            // foreach 
                            // ยังไม่มีไฟล์จะเพิ่มไฟล์
                            if ($check == 0) { ?>
                            <i class="fas fa-file-upload" style="color: grey; font-size:2vw;" data-bs-toggle="modal"
                                data-bs-target="#modalAddfile<?php echo $i ?>"></i>
                            <?php  }
                            // if
                            //เคยมีไฟล์แล้วจะอัปเดต
                            else { ?>
                            <i class="fas fa-file-upload" style="color:#00FF40; font-size:2vw;" data-bs-toggle="modal"
                                data-bs-target="#edit_modal_file<?php echo $i ?>"></i></button>
                            <?php  } ?>
                            <!-- else -->


                            <!-- Modal insert-->
                            <div class="modal fade" id="modalAddfile<?php echo $i ?>" role="dialog">
                                <form
                                    action="<?php echo site_url() ?>File_present_management/File_present_management/insert_file_nominee"
                                    method="post" enctype="multipart/form-data"
                                    onSubmit="JavaScript:return fncSubmit();" name="present">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="b">
                                                <h4 class="modal-title">&emsp;Attachment :</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="file" name="fil" class="form-control" required=""
                                                    accept="application/pdf">
                                                <input type="text" name="Emp_ID"
                                                    value="<?php echo $emp_nominee[$i]->Emp_ID ?>" hidden>
                                                <br>
                                                <button type="submit" class="btn btn-success"
                                                    onclick="show_message_success()">Upload This File</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal edit -->
                            <div class="modal fade" id="edit_modal_file<?php echo $i ?>" role="dialog">
                                <form
                                    action="<?php echo site_url() ?>File_present_management/File_present_management/edit_file_nominee"
                                    method="post" enctype="multipart/form-data"
                                    onSubmit="JavaScript:return fncSubmit();" name="present">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="b">
                                                <h4 class="modal-title">&emsp;Attachment :</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="file" name="fil" class="form-control" required=""
                                                    accept="application/pdf">
                                                <input type="text" name="Emp_ID"
                                                    value="<?php echo $emp_nominee[$i]->Emp_ID ?>" hidden>
                                                <br>
                                                <button type="submit" class="btn btn-success"
                                                    onclick="show_message_success()">Upload This File</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>