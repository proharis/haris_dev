<div class="container">
    <div class="row centered-form" style="padding: 0%;margin-top: 5%;width: 226%;margin-left: 12%;">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up <small>It's free!</small></h3>
                </div>

                <div class="panel-body">
                    <form role="form" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstName" id="firstName" class="form-control input-sm"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lastName" id="lastName" class="form-control input-sm"
                                        placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Email Address">
                        </div>
                        <div class="alert alert-warning error" role="alert"><?php echo form_error('email'); ?></div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="passconf" id="passconf" class="form-control input-sm"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="alert alert-info error" role="alert"><?php echo form_error('passconf'); ?></div>
                        </div>
                        <input type="submit" value="Register" style="background-color: #17a2b8 !important;"
                            class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>