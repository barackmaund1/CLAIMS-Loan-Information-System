<body style="background-color:#eeeeee;">
    <div class="contiainer-fluid">
        
        <div id="loading-screen" style="display: none;">
            <div class="loading-gif">
                <img class="mb-5" src="<? echo base_url();?>assets/img/CLAIMS.png" alt="logo" /><br>
                <p>Loading Please Wait....</p>
                <img class="" width="400" src="<? echo base_url();?>assets/img/loading.gif" alt="Redirecting" />
            </div>
        </div>

        <div class="content login-div">
            <form action="" method="POST">
                <div class="card">
                    <div class="card-header card-header-text card-header-primary text-center">
                        <div class="card-text w-75">
                            <h3 class="card-title font-weight-bold">RFSC Login Form</h3>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                            <div class="form-group">
                            <label class="bmd-label-floating ml-5 pl-2">Enter Username..</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons text-primary usr-error-icon">face</i>
                                </span>
                                </div>
                                
                                <input type="text" name="username" class="form-control username" required='true'>
                            </div> 
                        </div>

                        <div class="form-group mt-4">  
                            <label class="bmd-label-floating ml-5 pl-2">Enter Password..</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons text-primary psw-error-icon">lock_outline</i>
                                </span>
                                </div>
                                <input type="password" name="password" id="registerPassword" class="form-control password" required='true'>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary ml-3 mt-4 d-block login-submit">Submit</button>
                            <label class="ml-3 mt-3 forgot-password text-muted">Forgot password?<a href="<? echo base_url();?>forgot-password"> Recover here</a>
                            </label>
                        </div>    
                </div>
            </div>
            </form>
        </div>
        <div class="text-center">
            <small>
                Powered by:<img class="img img-fluid" width="50" height="50" src="<? echo base_url();?>assets/img/claims-logo.png">
                CLAIMS
            </small>
        </div> 
    </div>