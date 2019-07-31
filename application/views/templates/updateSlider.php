<?php
if (isset($_SESSION['username'])) {
    ?>
<div class="container" style=" background-color: lightsteelblue;">
    <div class="row">
        <form role="form" method="post" action="" class="col-md-9 go-right">
            <h2>Edit your Slider</h2>
            <p><?php print_r($records[0]->slider_id); ?></p>
            <?php
                echo form_hidden('slider_id', $records[0]->slider_id);
                ?>
            <div class="form-group">
                <input id="slider_description" name="slider_description"
                    value="<?php $records[0]->slider_description ?>" type="text"
                    placeholder="<?php echo $records[0]->slider_description ?>" class="form-control" required>

                <label for="slider_description"></label>
            </div>
            <div class="form-group">
                <input id="slider_title" name="slider_title" value="<?php echo  $records[0]->slider_title ?>"
                    type="text" class="form-control" required>
                <label for="slider_title">Slider Title</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="slider_status" value="<?php echo $records[0]->slider_status ?>"
                    id="slider_status" value="1" class="form-control">
                <label for="slider_status">Slider_Status</label>
            </div>
            <button type="submit" class="btn btn-primary d-flex justify-content-center">Edit Slider</button>
        </form>

    </div>
</div>
<?php
} else {
    redirect('admin/index');
}
?>