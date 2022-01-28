 
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
<!-- CSS -->  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<!-- Table group Nominee list --><div class="container-fluid py-4"> <h1 style="color:red">Form Management</h1><div class="card" id="card_radius">
<div class="card-header" id="card_radius">

<div class="card-body">
    <div class="col-12 text-end" ><button class="btn btn-md btn-primary" 
          id="addBtn" type="button" style="background-color: #596CFF;">
          Add Item
        </button></div>

    <div class="table-responsive">
        <table class="table align-items-center" id="Nominee_file_table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Points for observation</th>
                    <th scope="col">weight</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
               
            <td >
        <p>1</p>
        </td>
             
                     
                    <td class="text-center">
                    <select name="select_item0" id="select_item0" onchange="baba(this)" >
                    <option  value="0">please selected</option>
        <option value="1">Business I</option>
        <option value="2">Business II</option>
        <option value="3">People I</option>
        <option value="4">People II</option>
    </select>
</select>
                    </td>
                    <td style='text-align: left;'>
                        
                    <div  id="p0">
                    <p>Is aware of the issues of the business in their area of responsibility; <br>understands the environment or issues of their department.<br>
ตระหนักในปัญหาของงานที่รับผิดชอบ <br>เข้าใจสิ่งแวดล้อมหรือสภาพปัญหาของแผนกตนเอง</p> </div >
                                                            

                    </td>  
                    <td>
                    <input type="text" name="weight0" id="weight0" value=1 size='1'>
                    </td>  
                    <!-- column ดำเนินการ -->
                    <td style='text-align: center;'>
                    <button class="btn btn-danger remove"
                type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
                        <!-- ปุ่มดำเนินการ -->
                        </td>
                </tr>
               
            </tbody>
        </table>
        <!-- Confirm --><div class="col-12 text-end" >
        <a href="http://localhost/PEFS/Form_Management/Form_Management/form_management_detailsuscess">
        <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#Modal_confirm">Submit</button>          
                                </a>
        
    </div></div>
</div>
<script>
  
     $(document).ready(function(){
        $("#p"+0+"").hide();
        $("input[id='weight"+0+"']").hide();

        $("#p").hide();
        $("input[name='weight[]']").hide();

      
  //====================
  var rowIdx = 1;
  var i=1;
    $('#addBtn').on('click', function () {
  // Adding a row inside the tbody.

  $('#tbody').append(`<tr id="R${++rowIdx}">
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Points for observation</th>
                    <th scope="col">weight</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
               
            <td >
        <p>${rowIdx}</p>
        </td>
             
                     
                    <td class="text-center">
                    <select name="select_item${i}" id="select_item${i}" onchange="baba(this)">
                    <option >please selected</option>
        <option value="1">Business I</option>
        <option value="2">Business II</option>
        <option value="3">People I</option>
        <option value="4">People II</option>
    </select>

                    </td>
                    <td style='text-align: left;'>
                    <div  id="p${i}">
                    <p>Is aware of the issues of the business in their area of responsibility; <br>understands the environment or issues of their department.<br>
ตระหนักในปัญหาของงานที่รับผิดชอบ <br>เข้าใจสิ่งแวดล้อมหรือสภาพปัญหาของแผนกตนเอง</p> </div >

                    </td>  
                    <td>
                    <input type="text" name="weight${i}" id="weight${i}"  value=1 size='1'>
                    </td>  
                    <!-- column ดำเนินการ -->
                    <td style='text-align: center;'>
                    <button class="btn btn-danger remove"
                type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
                        <!-- ปุ่มดำเนินการ -->
                        </td>
                </tr>`);
                
                $("#p"+i+"").hide();
                 $("input[id='weight"+i+"']").hide();
                 i++;
               
    });

        // jQuery button click event to remove a row.
        $('#tbody').on('click', '.remove', function () {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest('tr').nextAll();
        // Iterating across all the rows 
        // obtained to change the index
        child.each(function () {
            // Getting <tr> id.
            var id = $(this).attr('id');
            // Getting the <p> inside the .row-index class.
            var idx = $(this).children('.row-index').children('p');
            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));
            // Modifying row index.
            idx.html(`Row ${dig - 1}`);
            // Modifying row id.
            $(this).attr('id', `R${dig - 1}`);
        });
        // Removing the current row.
        $(this).closest('tr').remove();
        // Decreasing total number of rows by 1.
        rowIdx--;
        });
});
function baba (select){
    var id=select.id;
    console.log(id);
    $("select[id="+id+"]").each(function() {
         
        
var num = id.substr(11); 
console.log(num);
                    if($(this).val() == "1"){
                        $("#p"+num+"").show();
                        $("input[id='weight"+num+"']").show();
                    }else if($(this).val() == "2"){
                        $("#p"+num+"").show();
                        $("input[id='weight"+num+"']").show();
                }else if($(this).val() == "3"){
                    $("#p"+num+"").show();
                    $("input[id='weight"+num+"']").show();
                }else if($(this).val() == "4"){
                    $("#p"+num+"").show();
                    $("input[id='weight"+num+"']").show();
                } else {
                    $("#p"+num+"").hide();
                    $("input[id='weight"+num+"']").hide();
                }

                })  
}


// $('select').on('change', function() {
//                 var id=$(this).attr('id');
//                 console.log('haha');
//                 
//             });
    </script>