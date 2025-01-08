<a href="<?=base_url()?>" class="logo" target="_blank">
    <img src="<?=base_url()?>assets_tv/images/logo_mitraone_tv.png" alt="">
</a>

<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">

                            <!-- <form action="" method="post"> -->
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <!-- <input type="text" name="logemail" class="form-style" placeholder="Your User" id="logemail" autocomplete="off"> -->
                                                <input type="text" placeholder="Your User" class="form-style" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <!-- <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"> -->
                                                <input type="password" placeholder="Your Password" class="form-style" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if(event.keyCode==13) login_click();">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <!-- <a href="#" class="btn mt-4">submit</a> -->
                                            <!-- <button type="submit" class="btn mt-4">submit</button> -->
                                            <button type="button" class="btn mt-4" id="btn-login">submit</button>
                                            <!-- <p class="mb-0 mt-4 text-center">
                                                <a href="#" class="link">
                                                    Forgot your password?
                                                </a>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            <!-- </form> -->
                            
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Sign Up</h4>
                                        <div class="form-group">
                                            <input type="text" name="logname" class="form-style"
                                                placeholder="Your Full Name" id="logname" autocomplete="off">
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" name="logemail" class="form-style"
                                                placeholder="Your Email" id="logemail" autocomplete="off">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" name="logpass" class="form-style"
                                                placeholder="Your Password" id="logpass" autocomplete="off">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>

                                        <a href="" class="btn mt-4">submit</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>