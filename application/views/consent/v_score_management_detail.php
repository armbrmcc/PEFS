<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- CSS -->
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
    .off  { 
        background:#D90437;
        border-radius: 4px; 
        color: #FFFFFF;
        text-align: center;
        border: none;
     }
    .on { 
        background:#0DD739;
        border-radius: 4px;
        color: #FFFFFF;
        text-align: center;
        border: none;
    }
</style>
<!-- JavaScript -->
<script language="javascript">
        function toggleState(item){
           if(item.className == "off") {
              item.className="on";
              item.innerHTML = "open"
           } else {
              item.className="off";
              item.innerHTML = "close"
           }
        }
</script>
<script>

</script>

<script type="text/javascript">
function showhide() {
    var choices = document.getElementById('selectBoxx').value;
    var x = 'pstats',
        y = 'jdk';
    if (choices == 2) {
        x = 'jdk';
        y = 'pstats';
    }
    document.getElementById(y).style.display = 'none';
    document.getElementById(x).style.display = 'block';
}
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End JavaScript -->   
    <!-- Start conten scor management -->
    <div class="container-fluid py-2 px-4">
      <!-- Title -->
      <div class="card-header">
            <h2>Score Management Group (การจัดการคะแนนกลุ่ม)</h2>
        </div>
        <div class="card">
          
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
              <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                  </div>
                </div>
              </div>
            </nav>
        <div class="table-responsive" >
        <div style="margin-left:35px;">
        <h3 >Detail Group   
            <label for="cars" style="font-size : 18px;margin-left : 75%">Group stutas:</label>
            <button type="button" class="float-right on" style="text-align: center;" 
            id="btn" value="button" onclick="toggleState(this)">
            open   
            <!-- <i class="fas fa-circle" style="font-size:30px; "></i> -->
            </button>
        </h3> 
    </div>
        <hr class="my-4" color="gray">
        <div style="margin-left:35px;">
        <h5 class="mb-0" >Group : T2                 
            <label for="cars" style="font-size : 20.5px;margin-left : 76.5%">Select Round :</label>
            <select name="cars" id="cars">
                <option value="volvo">Round 1 </option>
                <option value="saab">Round 2 </option>
            </select>
        </h5>
        
        <h5 class="mb-0">Group Name : GM </h5>
        <h5 class="mb-0">Promote : General Manager </h5>
        <h5 class="mb-0">Date : 24/08/2021 </h5>
        </div>
        <hr class="my-4" color="gray">
            <table class="table align-items-center" id="list_table">
                <thead class="list text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nominee ID</th>
                    <th scope="col">Nominee Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">scor</th>
                    <th scope="col" style="text-align: left;">Summary Score</th>
                    <th scope="col" style="text-align: left;">Action</th>
                    </tr>
                </thead> 
                <tbody>
                <tr>
                    <td scope="col">1</td>
                    <td>00279</td>
                    <td>CHAKRIT NIPHAT</td>
                    <td >Pass</td>
                    <td>5/5</td>
                    <td style="text-align: left;">
                    Totally score : 70 points<br>Get score : 56 points<br>80.00 % 
                    </td>
                    <td>
                      <!-- ปุ่มดำเนิน -->
                      <div style="width: 60px;height: 58px;margin-left:10px;">
                                    <button type="button" class="btn btn-warning button_size" data-toggle="modal" data-target="#exampleModal" >
                                            <i class="fa fa-refresh" style="font-size:15px;"></i>
                                    </button>
                        </div>          
                      <!-- ปุ่มดำเนิน -->
                    </td>
                  </tr>
    <script>
        $(document).ready(function() {
            $("#list_table").DataTable();
        });
    </script>