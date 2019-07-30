<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="slide_image">Slide Image</label>
            <input type="file" style="color: red;" class="form-control-file" value="<?php echo $slides[0]->image ?>"
                id="slide_image" name="slide_image">
        </div>
        <div class="form-group">
            <label for="slide_title">Slide Title</label>
            <input type="text" class="form-control" id="slide_title" name="slide_title"
                value="<?php echo $slides[0]->title ?>" placeholder="Slide Title">
        </div>
        <div class="form-group">
            <label for="slide_video">Slide Video</label>
            <input type="text" class="form-control" id="slide_video" name="slide_video"
                value="<?php echo $slides[0]->video ?>" placeholder="Put your URL here"><small id="videoSmall">no
                submission if url is not valid <a href=<?php echo base_url('slides') ?>>you can go back</a></small>
        </div>
        <div class="form-group">
            <label for="slide_description">Slide Description</label>
            <input type="text" class="form-control" id="slide_description" name="slide_description"
                value="<?php echo $slides[0]->description ?>" placeholder="Slide Description">
        </div>
        <div class="form-group">
            <label for="slide_content">Slide Content</label>
            <input type="text" class="form-control" id="slide_content" name="slide_content"
                value="<?php echo $slides[0]->content ?>" placeholder="Slide Content">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-control" name="slide_status" value="<?php echo $slides[0]->status ?>" type="checkbox"
                    id="slide_status">
                <label class="form-check-label" for="slide_status">
                    Slide Status
                </label>
            </div>
        </div>
        <input type="submit" id="videoSubmit" style="background-color: red !important;" class="btn btn-primary"
            value="submit" name="Submit">
    </form>
</div>