<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="favicon">Choose FavIcon</label>
            <input type="file" value="<?php echo $data[0]->favicon ?>" class="form-control-file" id="favicon"
                name="favicon">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->title ?>" id="title" name="Title"
                placeholder="Title">
        </div>
        <div class="form-group">
            <label for="logo">Choose Logo</label>
            <input type="file" class="form-control-file" value="<?php echo $data[0]->logo ?>" id="logo" name="logo">
        </div>
        <div class="form-group">
            <label for="gmail">Gmail</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->gmail ?>" id="gmail" name="gmail"
                placeholder="Gmail">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->facebook ?>" id="facebook"
                name="facebook" placeholder="Facebook">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->instagram ?>" id="instagram"
                name="instagram" placeholder="Instagram">
        </div>
        <div class="form-group">
            <label for="snapchat">Snapchat</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->snapchat ?>" id="snapchat"
                name="snapchat" placeholder="Snapchat">
        </div>
        <div class="form-group">
            <label for="skype">Skype</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->skype ?>" id="skype" name="skype"
                placeholder="Skype">
        </div>
        <div class="form-group">
            <label for="slack">Slack</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->slack ?>" id="slack" name="slack"
                placeholder="Slack">
        </div>
        <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->linkedin ?>" id="linkedin"
                name="linkedin" placeholder="Linkedin">
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="tel" class="form-control" value="<?php echo $data[0]->whatsapp ?>" id="whatsapp"
                name="whatsapp" placeholder="Whatsapp">
        </div>
        <input type="submit" value="submit">
    </form>
</div>