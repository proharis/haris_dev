<div class="row">
    <div class="col-sm-2">
        <form action="<?php echo base_url('Album_controller') ?>" method="post"><input type="hidden" name="userId"
                value="<?php echo $albumId ?>"><input style="background-color:#dc3545;" type="submit"
                value="Go Back To Albums" class="btn btn-danger">
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
        $total_users = count($users);
        for ($i = 0; $i < $total_users; $i++) {
            echo '<div class="col-md-4">';
            echo '<div class="thumbnail">';
            echo '<a href="' . $users[$i]->url  . '" target="_blank">';
            echo '<img class="card-img-top img-fluid" src="' . $users[$i]->thumbnailUrl  . '" alt="Card image cap">';
            echo '<div class="caption">';
            echo '<p>Captions: ' . $users[$i]->title . '</p>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>'; //card mb-4
        }
        ?>
    </div>
</div>