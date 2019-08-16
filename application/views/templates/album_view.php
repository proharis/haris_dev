<a href="<?php echo base_url('Users_controller') ?>"><button class="btn btn-danger">Go back to users</button></a>
<div class="container">
    <div class="row">
        <?php
        $total_users = count($users);
        for ($i = 0; $i < $total_users; $i++) {
            echo '<div class="col-sm-6" style="margin-bottom: 2%;">';
            echo '<div class="card">';
            echo '<div class="card-body" style="color: #edf3ff;">';
            echo '<h5 class="card-title">Album Title</h5>';
            echo ' <p class="card-text">' . $users[$i]->title . '.</p>';
            echo "<form action='" . base_url('Photos_controller')
                . "' method='post'><input type='hidden' name='albumId' value='" . $users[$i]->id . "'><input
                            type='submit' class='btn btn-primary' name='photos' value='Photos'></form>";
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>