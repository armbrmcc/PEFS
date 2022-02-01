<!--
    /*
    * v_form_management
    * display Management form
    * @author Natthanit
    * input
    * output
    * @Create date : 2565-01-25

    */
-->
<style>
#list_table td,
#list_table th {
    padding: 8px;
    text-align: center;
}

#list_table tr:nth-child(even) {
    background-color: #e9ecef;
}

#list_table tr:hover {
    background-color: #adb5bd;
}

#card_radius {
    margin-top: 15px;
    margin-left: 14px;
    margin-right: 15px;
    margin-bottom: 15px;
    border-radius: 20px;
    min-height: 300px;
    width: auto;
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
</style>

<body class="g-sidenav-show  bg-gray-100">

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    <!-- Start conten assessor management -->
    <div class="container-fluid py-2 px-4">
      <!-- Title -->
      <h1 style="color:red">Form Management</h1>
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
            <!-- End Navbar -->


        <!-- Select Year -->
        <div>
            <label for="year" style="position: absolute; right: 0;">Select Year:
                <select id="year" name="year" >
                    <option >2021</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </label>
        </div>

          <!-- ช่องดำเนินการค้นหา -->
          <!-- Navbar -->
          <br>
          <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
              <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                      <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          <!-- End Navbar -->

            <!-- table-responsive -->
            <div class="table-responsive">
                <table class="table align-items-center" id="list_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lavel</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>T2</td>
                        <td>
                            <a href="<?php echo site_url() . 'Form_Management/Form_Management/form_management_prosition'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>T3</td>
                        <td>
                            <a href="<?php echo site_url() . 'Form_Management/Form_Management/form_management_prosition'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                        </tr>
                    <tr>
                        <td>3</td>
                        <td>T4</td>
                        <td>
                            <a href="<?php echo site_url() . 'Form_Management/Form_Management/form_management_prosition'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>T5</td>
                        <td>
                            <a href="<?php echo site_url() . 'Form_Management/Form_Management/form_management_prosition'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>T6</td>
                        <td>
                            <a href="<?php echo site_url() . 'Form_Management/Form_Management/form_management_prosition'; ?>">
                                <button type="button" class="btn btn-primary btn-sm button_size" style="background-color: #596CFF;">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </a>
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
    <!-- End conten form management -->
