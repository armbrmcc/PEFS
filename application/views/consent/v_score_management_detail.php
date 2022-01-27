<style>
    .card
    {
      background: #CECECE;
    }
    table
    {
      width: 100%;
    }
    #scor_table td,
    #sco_table th
    {
      padding: 8px;
      text-align: center;
    }

    #sco_table tr:nth-child(even)
    {
      background-color: #F7F7F7;
    }

    #sco_table tr:hover
    {
      background-color: #E6E4E4;
    }

    #card_radius
    {
      margin-left: 14px;
      margin-right: 15px;
      border-radius: 20px;
      width: auto;
      min-height: 300px;
    }

    #sco_table
    {
      width: 98%;
      margin-top: 20px;
      margin-left: 10px;
    }

    #bt-add
    {
      width: 200px;
      border: none;
      border-radius: 8px;
      font-size: 18px;
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
<!-- End CSS -->
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
<!-- JavaScript -->
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    
    <!-- Start conten scor management -->
    <div class="container-fluid py-2 px-4">
      <!-- Title -->
      <h1 style="color:red">Score Management Group (การจัดการคะแนนกลุ่ม)</h1>
      
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
            <label for="cars" style="font-size : 18px;margin-left : 66.2%">Group stutas:</label>
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
            <label for="cars" style="font-size : 23.5px;margin-left : 66.2%">Select Round :</label>
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
            <table class="table align-items-center" id="scor_table">
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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" >
                                            <i class="fa fa-refresh" style="font-size:15px;"></i>
                                    </button>
                        </div>
                                    
                      <!-- ปุ่มดำเนิน -->
                    </td>
                  </tr>
<!-- <div class="card-header" id="card_radius"> -->