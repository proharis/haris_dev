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
                    <th scope="col">title</th>
                    <th scope="col">completed</th>
                    <th scope="col">userId</th>
                </tr>
            </thead>
            <?php
            $total_users = count($users);
            for ($i = 0; $i < $total_users; $i++) {
                echo "<tr>";
                echo "<td>" . $users[$i]->id . "</td>";
                echo "<td>" . $users[$i]->title . "</td>";
                echo "<td>" . $users[$i]->completed . "</td>";
                echo "<td>" . $users[$i]->userId . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>