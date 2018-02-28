            <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; height: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange">
                            <form class="form" method="post" action="">
                                <div class="header text-center">
                                    <h4 class="title title-up">เข้าสู่ระบบ</h4>
                                    <!-- <div class="social-line">
                                        <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input id="u_name" type="text" name="user" class="form-control" placeholder="กรอกรหัสผู้ใช้งาน">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="fa fa-unlock-alt"></i>
                                        </span>
                                        <input id="u_pass" name="pass" type="password" placeholder="กรอกรหัสผ่าน" class="form-control" />
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button id="formsubmit" type="button" href="" class="btn btn-neutral btn-round btn-lg">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#formsubmit').click(function(event) {
                    var u_name = $('#u_name').val();
                    var u_pass = $('#u_pass').val();
                  $.post('<?=base_url()?>index.php/Welcome/login', {user: u_name, pass: u_pass}, function(){}).done(function(data){
                    // console.log(data);
                    var json = jQuery.parseJSON(data);
                    if (json.status===true) {
                        swal("Good job!", json.massage, "success")
                        window.location.href="index.php/Welcome/main";
                    }else{
                        swal("Error!", json.massage, "error")
                    }
                  });
                });
            </script>