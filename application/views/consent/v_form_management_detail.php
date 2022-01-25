this is from manage detail
<!--
    /*
    * v_add_file_present
    * display Management file present of Nominee list
    * @author Jaraspon and Natthanit
    * input Array of nominee group (emp_nominee)
    * output Input file of present to nominee
    * @Create date : 2564-08-13
    * @Update date : 2564-08-15
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
<h3>Add File Nominee (เพิ่มไฟล์นำเสนอผลงาน)</h3>
<!-- Table group Nominee list -->
<div class="card-header" id="card_radius">
    <div class="table-responsive">
        <table class="table align-items-center" id="Nominee_file_table">
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
                    <td class="text-center">
                      
                    </td>
                    <td>
                      

                    </td>
                    <td>
                        

                    </td>
                    <td>
                    

                    </td>
                    <td>
                       
                    </td>
                    <!-- column ดำเนินการ -->
                    <td style='text-align: center;'>

                        <!-- ปุ่มดำเนินการ -->
                       
                </tr>
               
            </tbody>
        </table>
    </div>
</div>
<script>