<!--
    /*
    * v_score_management
    * display Score Management list
    * @input -
    * @output -
    * @author Jaraspon Seallo 
    * @Create date : 2565-01-26
    */
-->

<!-- CSS -->
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
</style>
<!-- End CSS -->

<!-- JavaScript -->
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    
    <!-- Start conten assessor management -->
    <div class="container-fluid py-2 px-4">
      <!-- Title -->
      <h1 style="color:red">Score Management</h1>
      
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
<div class="table-responsive">
              <table class="table align-items-center" id="scor_table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Group</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Promote</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list text-center">
                  <tr>
                    <td scope="col">1</td>
                    <td>T2</td>
                    <td>GM</td>
                    <td >1.General Manager</td>
                    <td>Round 1 : 06/08/2021 <br> Round 2 : 08/08/2021</td>
                    <td>
                      <!-- ปุ่มดำเนิน -->
                        <a href="<?php echo site_url() . 'Score_management/Score_management/show_score_management_detail'; ?>">
                                    <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                        </a>
                      <!-- ปุ่มดำเนิน -->
                    </td>
                  </tr>
                  <tr>
                    <td scope="col">2</td>
                    <td>T3</td>
                    <td>AGM</td>
                    <td>1.Assistant General Manager</td>
                    <td>Round 1 : 08/08/2021 <br> Round 2 : 25/08/2021</td>
                    <td>
                        <!-- <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>"> -->
                                    <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                        <!-- </a> -->
                    </td>  
                  </tr>
                  <tr>
                    <td scope="col">3</td>
                    <td>T4</td>
                    <td>MGR</td>
                    <td>1.Manager</td>
                    <td>Round 1 : 12/10/2021 <br> Round 2 : 24/10/2021</td>
                    <td>
                      <!-- ปุ่มดำเนินการ -->
                      <!-- <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>"> -->
                                    <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                        <!-- </a> -->
                    <!-- ปุ่มดำเนิน -->
                    </td>  
                  </tr>
                  <tr>
                    <td scope="col">4</td>
                    <td>T5</td>
                    <td>AM</td>
                    <td>1.Assistant  Manager</td>
                    <td>Round 1 : 13/11/2021</td>
                    <td>
                      <!-- ปุ่มดำเนินการ -->
                      <!-- <a href="<?php echo site_url() . 'Evaluation/Evaluation/show_evaluation_detail'; ?>"> -->
                                    <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                        <i class="fas fa-search text-white"></i>
                                    </button>
                        <!-- </a> -->
                    <!-- ปุ่มดำเนินการ -->
                    </td>  
                  </tr>
              </tbody>
              <!-- End tbody -->
          </table>
          <!-- End table -->
        </div>
        <!-- End div table-responsive -->
      </div>
      <!-- End card -->
    </div>
    <!-- End div container-fluid -->
    <!-- End conten assessor management -->


