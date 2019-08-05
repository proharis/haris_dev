<div class="container">
    <div class="row centered-form" style="padding: 0%;margin-top: 5%;width: 226%;margin-left: 12%;">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit<small>It's free!</small></h3>
                </div>
                <h3><?php ?></h3>
                <div class="panel-body">
                    <form role="form" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstName" value="<?php echo $users[0]->firstName ?>"
                                        id="firstName" class="form-control input-sm" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lastName" value="<?php echo $users[0]->lastName ?>"
                                        id="lastName" class="form-control input-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" value="<?php echo $users[0]->password ?>"
                                        id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="passconf" id="passconf" class="form-control input-sm"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Register" style="background-color: #17a2b8 !important;"
                            class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>