<?php
if (isset($_SESSION['username'])) {
    ?>

<div class="row">
    <div class="col-md-5">
        <div class="container">
            <?php
                $url =  $slides[0]->video;
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                $embedId = $matches[1]; ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <h2>Slide Type</h2>

                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input radioVI" id="radio1" name="optradio"
                                value="image" checked>Image
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input radioVI" id="radio2" name="optradio"
                                value="video">Video Url
                        </label>
                    </div>
                </div>
                <div class="form-group image_slide">
                    <label class="labelForOthers" for="slide_image">Slide Image</label>
                    <input type="file" style="color: red;" class="form-control-file" id="slide_image"
                        name="slide_image">
                </div>
                <div class="form-group">
                    <label class="labelForOthers" for="slide_title">Slide Title</label>
                    <input type="text" class="form-control" id="slide_title" name="slide_title"
                        value="<?php echo $slides[0]->title ?>" placeholder="Slide Title">
                </div>
                <div class="form-group video_slide">
                    <label class="labelForOthers" for="slide_video">Slide Video</label>
                    <input type="text" class="form-control" id="slide_video" name="slide_video"
                        value="<?php echo $slides[0]->video ?>" placeholder="Put your URL here"><small
                        id="videoSmall">no
                        submission if url is not valid <a href=<?php echo base_url('slides') ?>>you can go
                            back</a></small>
                </div>
                <div class="form-group">
                    <label class="labelForOthers" for="slide_description">Slide Description</label>
                    <textarea type="text" class="form-control" id="slide_description" name="slide_description"
                        value="<?php echo $slides[0]->description ?>"
                        placeholder="Slide Description"><?php echo $slides[0]->description ?><?php echo $slides[0]->description ?></textarea>
                </div>
                <div class="form-group">
                    <label class="labelForOthers" for="slide_content">Slide Content</label>
                    <textarea class="form-control" id="slide_content" name="slide_content"
                        value="<?php echo $slides[0]->content ?>"
                        placeholder="Slide Content"><?php echo $slides[0]->content ?></textarea>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="labelForOthers" class="form-check-label" for="slide_status">
                            Slide Status
                        </label>
                        <input class="form-control" name="slide_status" value="<?php echo $slides[0]->status ?>"
                            type="checkbox" id="slide_status">

                    </div>
                </div>
                <input type="submit" id="videoSubmit" style="background-color: red !important;" class="btn btn-primary"
                    value="submit" name="Submit">
            </form>
        </div>
    </div>
    <div class="col-md-7">
        <div class="video-show">
            <h4 style="color:red">*your Slider video*</h4>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo  $embedId; ?>"
                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen
                style="width:100%; height:299px  !important;"></iframe>
        </div>
        <div class="image_show">
            <h4 style="color:red">*your Slider image*</h4>
            <img src="<?php echo base_url('assets/image/') . $slides[0]->image ?>" alt=""
                style="width:100%; height:299px  !important;">
        </div>
    </div>
</div>
<?php
} else {
    redirect('admin/index');
}
?>