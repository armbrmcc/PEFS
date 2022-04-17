<!-- <!--
    * v_group_management
    * display for group management
    * @input  -
    * @output -
    * @author Jirayut Saifah
    * Create date 2565-01-27   
    * Update date 
-->
<!-- Data table -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<!-- Data table -->
<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="sweetalert2.all.min.js"></script>
<!-- sweet alert -->

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
</style>
<!-- End CSS -->

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        <!-- Start conten assessor management -->
        <div class="container-fluid py-2 px-4">
            <!-- Title -->
            <div class="card-header">
                <h2>Group Management (การจัดการกลุ่มประเมิน)</h2>
            </div>

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
                            <select id="year" name="year" onchange="get_group()">
                            </select>
                        </label><br><br>
                    </div>
                    <div>
                        <a href="<?php echo site_url() . 'Group_management/Group_management/add_group' ?>">
                            <button class="btn bg-gradient-info btn-block mb-3" style="position: absolute; right: 0;"
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
                            <th style="text-align:center">Evaluation Date</th>
                            <th style="text-align:center">Promote To</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody id="group_data">
                        <!-- <?php for ($i = 0; $i < count($group); $i++) { ?>
                        <tr>
                            <td style="text-align:center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-xs text-secondary mb-0"><?php echo $i + 1 ?></h6>
                                </div>


                            </td>
                            <td style="text-align:center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-xs text-secondary mb-0">
                                        <?php echo 'T' . $group[$i]->grp_position_group ?>
                                    </h6>

                                </div>
                            </td>
                            <td style="text-align:center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-xs text-secondary mb-0">
                                        <?php echo date("l d F Y", strtotime($group[$i]->grp_date))  ?></h6>

                                </div>
                            </td>
                            <td style="text-align:center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-xs text-secondary mb-0">
                                        <?php echo $group[$i]->sec_name ?>

                                    </h6>
                                </div>
                            </td>
                            <td style="text-align:center">
                                <a
                                    href="<?php echo site_url() . 'Group_management/Group_management/delete_group/' . $group[$i]->grp_id; ?>">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a>
                    
                                <a
                                    href="<?php echo site_url() . 'Group_management/Group_management/edit_group/' . $group[$i]->grp_id ?>"><button
                                        type="button" class="btn btn-warning"><i class="fa fa-pencil"
                                            aria-hidden="true"></i></button>
                                </a>
                            </td>

                        </tr>
                        <?php } ?> -->

                    </tbody>
                </table>


            </div>
            <!-- End card -->
        </div>
        <!-- End div container-fluid -->
        <!-- End conten form management -->
        <script>
        $(document).ready(function() {
            console.log("years");
            //$("#myTable").DataTable();
            const d = new Date();
            let years = d.getFullYear();
            years = years - 2
            console.log(years);
            // var x = document.getElementById("year");
            // var option = document.createElement("option");
            for (i = 0; i < 5; i++) {
                if (years == d.getFullYear()) {
                    var x = document.getElementById("year");
                    var option = document.createElement("option");
                    option.text = years;
                    option.value = years;
                    option.selected = true;
                    years++
                    x.add(option);
                    console.log(i)
                } else {
                    var x = document.getElementById("year");
                    var option = document.createElement("option");
                    option.text = years;
                    option.value = years;
                    years++
                    x.add(option);
                    console.log(i)
                }

            }
            get_group();
        });
        </script>
        <script>
        function get_group() {
            var group_year = document.getElementById("year").value;
            console.log(group_year)
            //$("#select_data").remove();
            document.getElementById("group_data").innerHTML = "";
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Employee/Get_assessor/get_group_by_year ",
                data: {
                    "years": group_year,
                },
                dataType: "JSON",
                success: function(data, status) {
                    console.log(data);
                    var count_index = 0;
                    var i = 0;
                    var data_row = '';
                    data.forEach((row, index) => {
                        const date = new Date(row.grp_date)
                        const result = date.toLocaleDateString('en-US', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            weekday: 'long',
                        })
                        console.log(i);
                        console.log(row.grp_id);
                        data_row += '<tr id="ase_' + i + '">'
                        data_row += '<td style="text-align:center">'
                        data_row += i + 1;
                        data_row += '</td>'
                        data_row += '<td style="text-align:center">'
                        data_row += "T" + row.grp_position_group
                        data_row += '</td>'
                        data_row += '<td id="ase_id_' + i++ +
                            '" style="text-align:center"> '
                        data_row += result
                        data_row += '</td>'
                        data_row += '<td style="text-align:center">'
                        data_row += row.sec_name
                        data_row += '</td>'

                        data_row += '<td style="text-align:center">'
                        data_row +=
                            "<button type='button' onclick='edit_group(" + row.grp_id +
                            ")' class='btn btn-warning'>"
                        data_row += " <i class = 'fa fa-pencil '> </i>"
                        data_row += "</button>"
                        data_row +=
                            "<button type='button' onclick='delete_group(" + row.grp_id +
                            ")' class='btn btn-danger'>"
                        data_row += " <i class = 'fa fa-trash '> </i>"
                        data_row += "</button>"
                        data_row += '</td>'
                        data_row += '</tr>'
                        $("#group_data").append(data_row);
                        count_index++
                        index++
                    })
                    // for (var i = 0; i < data.d.length; i++) {

                    // }
                    i++

                    count = count_index;
                    $("#myTable").DataTable();
                },
                error: function(error) {
                    console.log('error');
                }

            });

        }

        function edit_group(id) {
            window.location.href = "<?php echo base_url(); ?>Group_management/Group_management/edit_group/" + id;
        }

        function delete_group(id) {
            window.location.href = "<?php echo base_url(); ?>Group_management/Group_management/delete_group/" + id;
        }
        </script>