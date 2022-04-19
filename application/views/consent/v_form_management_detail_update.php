<!-- /*
    * v_form_management_detail_update
    * @input  -
    * @output -
    * @author Pontakon 
    * @Update Date 2565-01-25
*/ -->
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
p,select,input {
    font-size: 0.75rem !important;
}
table,  td{
    white-space : inherit !important;
    
}


select{
    
    width: 50%!important;
}
</style>

 

 
<!-- set data -->
<?php  for($i=0;$i < count($arr_des) ;$i++){ ?>

    <input type="hidden" name="des_th<?php echo $i?>" id="des_th<?php echo $arr_des[$i]->des_item_id?>" value='<?php echo $arr_des[$i]->des_description_th ?>'  >
    <input type="hidden" name="des_eng<?php echo $i?>" id="des_eng<?php echo $arr_des[$i]->des_item_id?>" value='<?php echo $arr_des[$i]->des_description_eng ?>'  >
   
<?php }?>
<?php for($i=0;$i < count($arr_item) ;$i++){  //ลูปตามหัวข้อหลัก
                                    ?>

                                        <?php $count_rowspan = 0;
                                        for ($loop_rowspan = 0; $loop_rowspan < count($arr_des); $loop_rowspan++) {
                                            if ($arr_item[$i]->itm_id == $arr_des[$loop_rowspan]->des_item_id) {
                                                $count_rowspan++;
                                                
                                            }
                                           
                                        } ?>
                                         <input type="hidden" name="dataitem_num<?php echo $i?>" id="data_num<?php echo $arr_item[$i]->itm_id?>" value='<?php echo $count_rowspan ?>'  >
                                        <?php
                                    }
                                    ?>
 



<!-- start Form -->
<form class="form-control" action="<?php echo site_url() ?>Form_Management/Form_Management/form_management_update" method="post" enctype="multipart/form-data" name="event" onsubmit="return checkform()">



<div class="container-fluid py-4"> <div class="card-header"  ><h2 >Form Management (จัดการแบบฟอร์ม)</h2></div>
<div class="card"  >
    <div class="card-body">
        <div class="col-12 text-end" ><button class="btn btn-md btn-primary" id="addBtn" type="button" style="background-color: #596CFF;">
            Add Item
        </button></div>

        <div class="table-responsive">
            <table class="table align-items-center" id="Nominee_file_table" style="width : 95% " >
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="width : 5% ">#</th>
                        <th scope="col" style="width : 40% ">Item</th>
                        <th scope="col"style="width : 40% ">Points for observation</th>
                       
                        <th scope="col"style="width : 10% "> Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
<?php for($loop_form=0;$loop_form < count($arr_form_num) ;$loop_form++){  //ลูปตามจำนวนหัวข้อใน arr_form ?>      
                    <tr>  
                        <td >
                            <p><?php echo $loop_form+1  ;?></p>
                        </td>
                       
            
                        <td class="text-center"style='text-align: center;'> <center>
                        <!-- เลือกหัวข้อ -->
                            <select name="select_item<?php echo $loop_form  ;?>" id="select_item<?php echo $loop_form  ;?>"  class="form-control" value="<?php echo $arr_form[$loop_form]->for_item_id  ;?>" onchange="show_selectvalue(this)" required>
                            <option  value="">please selected</option>
                            <?php for($i=0;$i < count($arr_item) ;$i++){ ?>
                                <option value="<?php echo $arr_item[$i]->itm_id ;?>" <?php if($arr_item[$i]->itm_id==$arr_form[$loop_form]->for_item_id){echo ' selected="selected"';}?> ><?php echo $arr_item[$i]->itm_name; ?></option>
                            <?php }?>
                            </select>
                            </center>
                        </td>
                       
                        <td style='text-align: left;' id="discrip<?php echo $loop_form  ;?>">
                           
                        </td>
                        
                  

                        <!-- column ดำเนินการ -->
                        <td style='text-align: center;'>
                            <button class="btn btn-danger remove"
                            type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </td>
                    </tr>

                    <?php }?>

                   

                </tbody>
            </table>
            <!-- Confirm -->
            <div class="col-12 text-end" > 
            <button type="submit" class="btn btn-success float-right" data-toggle="modal"data-target="#Modal_confirm" >
            Submit</button>
 

        </div>
    </div>
</div>

<!-- เก็บว่ามีกี่หัวข้อ -->
<input type="hidden" name="allitem" id="allitem" value=<?php echo count($arr_form_num) ?> size='1'>

 <input type="hidden" name="form_insert_num" id="form_insert_num" value='<?php echo count($arr_form_num) ?>' size='1'>
<input type="hidden" name="pos_id"  value='<?php echo $pos_id  ?>'  >
</form >
<script>

     $(document).ready(function(){

        // insert data desciption
        var loop =  document.getElementById("form_insert_num").value ;
        
        for(i=0;i<loop;i++){
            show_selectvalue_insert("select_item"+i);
        }

        var rowIdx = document.getElementById("form_insert_num").value ;
        var i=document.getElementById("form_insert_num").value;
        $('#addBtn').on('click', function () {
        // Adding a row inside the tbody.

        $('#tbody').append(`<tr id="R${++rowIdx}">
                                <th scope="col">#</th>
                                <th scope="col">Item</th>
                                <th scope="col">Points for observation</th>
                                <th scope="col">weight</th>
                                <th scope="col"> Action</th>
                             </tr>
                             
                            <tbody id="tbody">

                            <td >
                                <p>${rowIdx}</p>    
                            </td>
                            <td class="text-center"><center>
                                <select name="select_item${i}" id="select_item${i}" onchange="show_selectvalue(this)" class="form-control" required>
                                    <option  value="">please selected</option>
                                    <?php for($i=0;$i < count($arr_item) ;$i++){ ?>
                                        <option value="<?php echo $arr_item[$i]->itm_id ;?>"><?php echo $arr_item[$i]->itm_name; ?></option>
                                    <?php } ?>
                                </select></center>
                            </td>
                            <td style='text-align: left;' id="discrip${i}">

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
                        document.getElementById("allitem").value = rowIdx;

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
        i--;
        document.getElementById("allitem").value = rowIdx;
        });
});



function show_selectvalue_insert (id){
                //var id=select.id;    //รับ id ของ select มา
                var num = id.substr(11);  //ตัดค่าเอาเลข
                
                var mylist = document.getElementById(id);  //รับ select
                var item = mylist.options[mylist.selectedIndex].value; //รับผล select
                if(item == "0"){
                    $("#p_th"+num+"").hide();
                    $("#p_eng"+num+"").hide();
                    $("input[id='weight"+num+"']").hide();
                }else{ 
                    var name_th = "des_th"+ item; //รับตั้งเพื่อเอาค่า
                    var name_eng = "des_eng"+ item; //รับตั้งเพื่อเอาค่า
                    var des_th =  document.getElementById(name_th).value; // เอาค่า
                    var des_eng =  document.getElementById(name_eng).value; // เอาค่า

                    delete_descript (num); //ลบ des อันเก่าทิ้ง
                    create_descript (num,0); //เพิ่ม des อันใหม่ เอาจริงๆ ตรงนี้ทำไม่ถูก แต่ขี้เกียจแก้ละ
                    
                    document.getElementById("des"+num).value = item;
                    
                    $("input[id='weight"+num+"']").show();
                    
                    var data_num = "data_num"+ item; //รับตั้งเพื่อเอาค่า
                    var mynum =  document.getElementById(data_num).value;
                    document.getElementById("p_th"+num).innerHTML = des_th;
                    document.getElementById("p_th"+num).innerHTML += "<br>"+des_eng;
                    var engname =  document.getElementById(name_eng).name;
                    var namenum =  engname.substr(7);
                    
                    if(mynum>1){
                        for(i=1;i<mynum;i++){   
                             
                            justnum = parseInt(namenum);
                            justnum = justnum+i;
                            
                            name_th = "des_th"+ justnum; //รับตั้งเพื่อเอาค่า
                            name_eng = "des_eng"+ justnum; //รับตั้งเพื่อเอาค่า
                           
                            des_th =  document.getElementsByName(name_th); // เอาค่า
                            des_eng =  document.getElementsByName(name_eng); // เอาค่า
                           
                             document.getElementById("p_th"+num).innerHTML += "<hr>"+des_th[0].value;
                             document.getElementById("p_th"+num).innerHTML += "<br>"+des_eng[0].value;
                        }   
                    } 
                }
}

function show_selectvalue (select){
                var id=select.id;    //รับ id ของ select มา
                var num = id.substr(11);  //ตัดค่าเอาเลข
                
                var mylist = document.getElementById(id);  //รับ select
                var item = mylist.options[mylist.selectedIndex].value; //รับผล select
                if(item == ""){
                    $("#p_th"+num+"").hide();
                    $("#p_eng"+num+"").hide();
                    $("input[id='weight"+num+"']").hide();
                }else{ 
                    var name_th = "des_th"+ item; //รับตั้งเพื่อเอาค่า
                    var name_eng = "des_eng"+ item; //รับตั้งเพื่อเอาค่า
                    var des_th =  document.getElementById(name_th).value; // เอาค่า
                    var des_eng =  document.getElementById(name_eng).value; // เอาค่า
                   
                    //var des ="des"+ item;
                    // console.log(id);
                    // console.log(num);
                    // console.log(mylist);
                    //console.log(item);
                    //console.log(name);
                    //console.log(des);
                    delete_descript (num);
                    create_descript (num,0);
                   //document.getElementById("p_th"+num).innerHTML = des_th;
                   // document.getElementById("p_eng"+num).innerHTML = des_eng;
                    document.getElementById("des"+num).value = item;
                    
                    //$("#p_th"+num+"").show();
                    //$("#p_eng"+num+"").show();
                    $("input[id='weight"+num+"']").show();
                    
                    var data_num = "data_num"+ item; //รับตั้งเพื่อเอาค่า
                    var mynum =  document.getElementById(data_num).value;
                    document.getElementById("p_th"+num).innerHTML = des_th;
                    document.getElementById("p_th"+num).innerHTML += "<br>"+des_eng;
                    var engname =  document.getElementById(name_eng).name;
                    var namenum =  engname.substr(7);
                    //console.log(des_th);
                    
                    if(mynum>1){
                        
                        for(i=1;i<mynum;i++){   
                            
                            justnum = parseInt(namenum);
                            justnum = justnum+i;
                           
                            name_th = "des_th"+ justnum; //รับตั้งเพื่อเอาค่า
                            name_eng = "des_eng"+ justnum; //รับตั้งเพื่อเอาค่า
                            
                            des_th =  document.getElementsByName(name_th); // เอาค่า
                            des_eng =  document.getElementsByName(name_eng); // เอาค่า
                           
                             document.getElementById("p_th"+num).innerHTML += "<hr>"+des_th[0].value;
                             document.getElementById("p_th"+num).innerHTML += "<br>"+des_eng[0].value;
                        }   

                    }
                    
                    
                   
                    //$("#"+name_th).hide();

                   
                }
}

//สร้าง _descript
function create_descript (i,loop){
    $('#discrip'+i).append(`
                    <p id="p_th${i}"></p>
                    <p id="p_eng${i}"></p>
                    <input type="hidden" name="des${i}" id="des${i}" value=1 size='1'>
                    `);


}

//ลบ _descript
function delete_descript (num){
     //$("#data_num"+num).remove();
    $("#p_th"+num).remove();
    $("#p_eng"+num).remove();
    $("#des"+num).remove();
 
}  


function checkform() {
    if(document.event.allitem.value < 1) {
        alert("Please enter at least 1 form.");
        return false;
    } else {
        document.event.submit();
    }
}

    </script>