<!-- section for sign Up -->
<section class="modal fade" id="signup-modal" tabindex="-1" aria-labelledby="signup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- Header For modal -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Body for modal -->
                    <div class="modal-body">
                        <form role="form" id="signup-form" class="form" method="post" action="api/signup_submit.php">

                            <!-- section for User Name -->
                            
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                maxlength="30" required>
                            </div>

                            <!--Section For User Phone Number -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                maxlength="10" minlength="10" required>
                            </div>
                            <!--Section For User Email -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                               required>
                            </div>
                            <!--Section For User Password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                            </div>
                            <!--Section for University Detail-->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-university"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="college_name" placeholder="College Name"
                                maxlength="150" required>
                            </div>
                            <!--Section for gender option-->
                            <div class="form-group">
                                <span>I'm a</span>
                                <input type="radio" class="ml-3" id="gender-male" name="gender" value="male"/> 
                                <label for="gender-male">Male </label>
                                <input type="radio" class="ml-3" id="gender-female" name="gender" value="female">
                                <label for="gender-female">Female</label>

                            </div>

                            <!--Section for submit button-->
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Create Account</button>
                            </div>

                        </form>
                    </div>
                    <!--section for modal footer-->
                    <div class="modal-footer">
                        <span>Already have an account? <a href="#" data-dismiss="modal"
                            data-toggle="modal" data-target="#login-modal">Login</a></span>
                    </div>

                </div>
            </div>
        </section>