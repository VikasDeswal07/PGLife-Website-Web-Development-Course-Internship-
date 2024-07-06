<!--Section for Login Modal-->
<section class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!--Section For Login Header-->
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close" ><span>&times;</span></button>
                    </div>
                    <!--Section for Login body-->
                    <div class="modal-body">
                        <form role="form" id="login-form" class="form" method="post" action="api/login_submit.php">
                            <!--section for mail input-->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" name="email" placeholder="Email"  class="form-control" required/>
                            </div>
                            <!--section for password input-->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" placeholder="Password"  class="form-control" minlength="6" required/>
                            </div>
                            <!--section for submit button-->
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                        <!--Section For Login Footer-->
                        <div class="modal-footer">
                            <span><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click Here</a> to register a new account</span>
                        </div>

                    </div>

                </div>
                
            </div>
        </section>