<div class="container">
    <div class="row">


        <div class="col-md-6">
            <div class="container">
                <h4>About US</h4>
                <p><strong>email: </strong>harris@eguinenext.com</p>
                <p><strong>Phone Number: </strong>03204900194</p>
                <p><strong>Address: </strong>
                    <address>Eguinie next web solution near UCP</address>
                </p>
            </div>
        </div>
        <div class="col-md-6">

            <div class="container">
                <h4 style=" text-align: center;">Contact US</h4>
                <?php
                echo $this->session->flashdata('email_sent');
                echo form_open('/send_mail');
                ?>
                <div class="form-group">
                    <label for="email_address">Email <sup class="text-danger">*</sup></label>
                    <input type="email" class="form-control" name="email_address" id="email_address"
                        required="required">
                    <div id="result"></div>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="first_name" id="first_name" required="required">
                    <div id="result01"></div>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="last_name" id="last_name" required="required">
                    <div id="result02"></div>
                </div>
                <div class="form-group">
                    <label for="last_name">Company Name <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="company" id="company" required="required">
                    <div id="result04"></div>
                </div>
                <button type="submit" class="btn btn-info"
                    style="display: flex;margin: 0 auto;align-items: center; justify-content: center">Submit</button>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>