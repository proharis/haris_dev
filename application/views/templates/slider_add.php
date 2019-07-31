<?php
if (isset($_SESSION['username'])) {
    ?>
<div class="container" style=" background-color: lightsteelblue;">
    <div class="row">
        <form role="form" method="post" action="" class="col-md-9 go-right">
            <h2>Form To Right</h2>
            <p>To see how it works, you clink in a input field.</p>
            <div class="form-group">
                <input id="slider_description" name="slider_description" type="text" class="form-control" required>
                <label for="slider_description">Slider Description</label>
            </div>
            <div class="form-group">
                <input id="slider_title" name="slider_title" type="text" class="form-control" required>
                <label for="slider_title">Slider Title</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="slider_status" id="slider_status" value="1" class="form-control">
                <label for="slider_status">Slider_Status</label>
            </div>
            <button type="submit" class="btn btn-primary d-flex justify-content-center">Made Slider</button>
        </form>

    </div>
</div>
<?php
} else {
    redirect('admin_login');
}
?>