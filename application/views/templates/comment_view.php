<div class="row">
    <div class="col-sm-2">
        <form action="<?php echo base_url('Posts_controller') ?>" method="post"><input type="hidden" name="userId"
                value="<?php echo $post_id ?>"><input style="background-color:#dc3545;" type="submit"
                value="Go Back To Posts" class="btn btn-danger">
        </form>
    </div>
</div>
<div class="container">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Body</th>
                </tr>
            </thead>
            <?php
            $total_users = count($users);
            for ($i = 0; $i < $total_users; $i++) {
                echo "<tr>";
                echo "<td>" . $users[$i]->id . "</td>";
                echo "<td>" . $users[$i]->name . "</td>";
                echo "<td>" . $users[$i]->email . "</td>";
                echo "<td>" . $users[$i]->body . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>