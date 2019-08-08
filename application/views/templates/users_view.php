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
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Website</th>
                </tr>
            </thead>
            <?php
            $total_users = count($users);
            for ($i = 0; $i < $total_users; $i++) {
                echo "<tr>";
                echo "<td>" . $users[$i]->id . "</td>";
                echo "<td>" . $users[$i]->name . "</td>";
                echo "<td>" . $users[$i]->username . "</td>";
                echo "<td>" . $users[$i]->email . "</td>";
                echo "<td>" . $users[$i]->phone . "</td>";
                echo "<td>" . $users[$i]->website . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>