<?php
if (isset($_SESSION['username'])) {
    ?>
<div class="container ">
    <h1>Admin Home</h1>
    <p><strong>Welcome </strong><?php echo $this->session->userdata('username') ?></p>
    <br>

    <h4 class="d-flex justify-content-center"> Add or Change Elements</h4>
    <div class="d-flex justify-content-center">
        <a href="<?php echo base_url('sliders'); ?>"> <button type="button" class="btn btn-primary">Slider</button></a>
    </div>

</div>
<?php
} else {
    redirect('admin_login');
}
?>