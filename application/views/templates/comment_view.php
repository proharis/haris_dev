<div class="container">

    <?php
    // echo "<pre>";
    // print_r($users);
    // die(); 
    ?>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Body</th>
                    <th scope="col">Post ID</th>
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
                echo "<td>" . $users[$i]->postId . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>