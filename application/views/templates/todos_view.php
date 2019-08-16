<a href="<?php echo base_url('Users_controller') ?>"><button class="btn btn-danger">Go back to users</button></a>
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">title</th>
                    <th scope="col">completed</th>
                </tr>
            </thead>
            <?php
            $total_users = count($users);
            for ($i = 0; $i < $total_users; $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $users[$i]->title . "</td>";
                echo "<td>" . $users[$i]->completed . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>