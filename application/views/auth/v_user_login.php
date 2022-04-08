<!--
    /*
    * v_user_login
    * login page
    * @input username & password
    * @output -
    * @author Chakrit Boonrpasert
    * @Create date : 2565-03-31
    */
-->
<style>
    .bg {
        background-image: url(<?php echo base_url() . '/assests/template/soft-ui-dashboard-main/assets/img/curved-images/siam_denso.jpg' ?>);
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        function login() { //login user
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url() . 'Login/Login/login' ?>',
                data: {
                    User_login: $('#User_login').val(),
                    User_pass_login: $('#User_pass_login').val()
                },
                success: function(data, status) { // function success
                    var obj = JSON.parse(data)
                    if (obj.length != 0) {
                        setTimeout(function() {
                            window.location.href =
                                '<?php echo site_url() . 'Login/Login/show_user_home/' ?>' + obj.User_emp_id
                        }, 500) //function set
                    } //if
                    else {
                        alert('You entered incorrect information.')
                    } //else
                }, //end success
                error: function(status) { //function error
                    alert('You entered incorrect information.')
                } //end error
            });

        } //end login user

        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
</head>

<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h2 class="font-weight-bolder text-info text-gradient">Welcome To PEFS</h2>
                                <p class="mb-0">Performance Evaluation Factor System</p>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <label>Username</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="User_login" placeholder="Username" aria-label="Username" aria-describedby="username-addon" required>
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="User_pass_login" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" onclick='login()'>Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> PEFS by <img src=<?php echo base_url() . 'assests\template\soft-ui-dashboard-main\assets\img\Logo_Team_6_v2.png' ?> width="35" height="35">| Team 6
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->