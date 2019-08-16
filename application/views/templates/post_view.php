<a href="<?php echo base_url('Users_controller') ?>"><button class="btn btn-danger">Go back to users</button></a>
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_users = count($users);
                for ($i = 0; $i < $total_users; $i++) {
                    echo "<tr>";
                    echo "<td>" . $users[$i]->title . "</td>";
                    echo "<td>" . $users[$i]->body . "</td>";
                    echo "<td><form action='" . base_url('Comments_controller') . "' method='post'><input type='hidden' name='postId' value='" . $users[$i]->id . "'><input type='submit' class='btn btn-primary' name='comments' value='Comments'></form></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>