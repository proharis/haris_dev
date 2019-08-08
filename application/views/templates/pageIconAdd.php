<div class="container">
    <?php
    // echo  "<pre>";
    // print_r($data);
    // die();
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="favicon">Choose FavIcon</label>
                    <input type="file" value="<?php echo $data[0]->favicon ?>" class="form-control-file" id="favicon"
                        name="favicon">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="logo">Choose Logo</label>
                    <input type="file" class="form-control-file" value="<?php echo $data[0]->logo ?>" id="logo"
                        name="logo">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="<?php echo $data[0]->title ?>" id="title"
                        name="title" placeholder="Title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="gmail">Gmail</label>
                    <input type="text" value="<?php echo $data[0]->gmail ?>" class="form-control" <?php if ($data[0]->gmail_enable == 0) {
                                                                                                        echo "disabled='disabled'";
                                                                                                    } ?>id="gmail"
                        name="gmail" placeholder="Gmail">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="gmail_enable" <?php if ($data[0]->gmail_enable == 1) {
                                                                        echo " checked='checked' ";
                                                                    } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" value="<?php echo $data[0]->facebook ?>"
                        class="form-control <?php echo $data[0]->facebook_enable ?>"
                        <?php if ($data[0]->facebook_enable == 0) {
                                                                                                                                                    echo "disabled='disabled'";
                                                                                                                                                } ?> id="facebook" name="facebook"
                        placeholder="Facebook">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="facebook_enable" <?php if ($data[0]->facebook_enable == 1) {
                                                                            echo "checked='checked'";
                                                                        }  ?>class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" value="<?php echo $data[0]->instagram ?>" <?php if ($data[0]->instagram_enable == 0) {
                                                                                                            echo "disabled='disabled'";
                                                                                                        }  ?>
                        id="instagram" name="instagram" placeholder="Instagram">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="instagram_enable" <?php if ($data[0]->instagram_enable == 1) {
                                                                            echo "checked='checked'";
                                                                        } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="snapchat">Snapchat</label>
                    <input type="text" value="<?php echo $data[0]->snapchat ?>" class="form-control" <?php if ($data[0]->snapchat_enable == 0) {
                                                                                                            echo 'disabled="disabled"';
                                                                                                        }  ?>
                        id="snapchat" name="snapchat" placeholder="Snapchat">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="snapchat_enable" <?php if ($data[0]->snapchat_enable == 1) {
                                                                            echo "checked='checked'";
                                                                        } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="skype">Skype</label>
                    <input type="text" class="form-control" value="<?php echo $data[0]->skype ?>" <?php if ($data[0]->skype_enable == 0) {
                                                                                                        echo "disabled='disabled'";
                                                                                                    }  ?> id="skype"
                        name="skype" placeholder="Skype">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="skype_enable" <?php if ($data[0]->skype_enable == 1) {
                                                                        echo "checked='checked'";
                                                                    } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" value="<?php echo $data[0]->linkedin ?>" class="form-control" <?php if ($data[0]->linkedin_enable == 0) {
                                                                                                            echo "disabled='disabled'";
                                                                                                        } ?>
                        id="linkedin" name="linkedin" placeholder="Linkedin">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="linkedin_enable" <?php if ($data[0]->linkedin_enable == 1) {
                                                                            echo "checked='checked'";
                                                                        } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="slack">Slack</label>
                    <input type="text" class="form-control" value="<?php echo $data[0]->slack ?>" <?php if ($data[0]->slack_enable == 0) {
                                                                                                        echo "disabled='disabled'";
                                                                                                    } ?> id="slack"
                        name="slack" placeholder="Slack">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="slack_enable" <?php if ($data[0]->slack_enable == 1) {
                                                                        echo "checked='checked'";
                                                                    } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="tel" value="<?php echo $data[0]->whatsapp ?>" class="form-control" <?php if ($data[0]->whatsapp_enable == 0) {
                                                                                                        echo "disabled='disabled'";
                                                                                                    } ?> id="whatsapp"
                        name="whatsapp" placeholder="Whatsapp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <label class="form-check-label checkIcon">
                        <input type="checkbox" name="whatsapp_enable" <?php if ($data[0]->whatsapp_enable == 1) {
                                                                            echo "checked='checked'";
                                                                        } ?> class="form-check-input checkIcon1"
                            value="1">Activation
                    </label>
                </div>
            </div>
        </div>
        <input type="submit" value="submit">
    </form>
</div>