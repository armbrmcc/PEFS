<!--
    * v_group_management
    * display for group management
    * @input  -
    * @output -
    * @author Jirayut Saifah
    * Create date 2565-01-27   
    * Update date 
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

<style>
#Group_table td,
#Group_table th {
    padding: 8px;
    text-align: center;
}

#Group_table tr:nth-child(even) {
    background-color: #e9ecef;
}

#Group_table tr:hover {
    background-color: #adb5bd;
}

#card_radius {
    margin-left: 14px;
    margin-right: 15px;
    border-radius: 20px;
    width: auto;
    min-height: 300px;
}

#Group_table {
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

div.tr {
    text-align: center;
}
</style>

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        <!-- Start conten assessor management -->
        <div class="container-fluid py-2 px-4">
            <!-- Title -->
            <h1 style="color:red">Group Management</h1>
            <div class="card">
                <!-- Navbar -->
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
                    navbar-scroll="true">
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
                    <div>
                        <label for="year" style="position: absolute; right: 0;font-size:20px;">Select Year:
                            <select id="year" name="year">
                                <option>2021</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </label><br><br>
                    </div>
                    <div>
                        <a href="<?php echo site_url() . 'Group_management/Group_management/add_group' ?>">
                            <button class="btn btn-primary float-right" style="position: absolute; right: 0;"
                                value="Add group"> Add Group</button></a>
                        <br>
                    </div>

                </div>
                <br>
                <table id="myTable" class="display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="text-align:center">#</th>
                            <th style="text-align:center">Level</th>
                            <th style="text-align:center">Level Name</th>
                            <th style="text-align:center">Promote</th>
                            <th style="text-align:center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>T6</td>
                            <td>AGM</td>
                            <td>General Manager</td>
                            <td style="text-align:center">
                                <button type="button" class="btn btn-primary"><i class="fa fa-info"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <a href="<?php echo site_url() . 'Group_management/Group_management/add_group' ?>"><button
                                        type="button" class="btn btn-warning"><i class="fa fa-pencil"
                                            aria-hidden="true"></i></button></a>
                            </td>

                        </tr>

                    </tbody>
                </table>


            </div>
            <!-- End card -->
        </div>
        <!-- End div container-fluid -->
        <!-- End conten form management -->
        <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
        </script>