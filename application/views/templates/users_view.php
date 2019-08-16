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
                    <th scope="col">Todos</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Albums</th>
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
                echo "<td><form action='" . base_url('Todos_controller') . "' method='post'><input type='hidden' name='userId' value='" . $users[$i]->id . "'><input type='submit' class='btn btn-primary' name='todos' value='Todos'></form></td>";
                echo "<td><form action='" . base_url('Posts_controller') . "' method='post'><input type='hidden' name='userId' value='" . $users[$i]->id . "'><input type='submit' class='btn btn-primary' name='posts' value='Posts'></form></td>";
                echo "<td><form action='" . base_url('Album_controller') . "' method='post'><input type='hidden' name='userId' value='" . $users[$i]->id . "'><input type='submit' class='btn btn-primary' name='album' value='Albums'></form></td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>

    </div>
</div>