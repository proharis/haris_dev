<div class="container">
    <a href=" <?php echo  base_url('user_signUp') ?>">
        <button class="btn btn-primary">Add Users</button>
    </a>
    <div class="table-responsive-xl">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalUsers = count($users);
                for ($i = 0; $i < $totalUsers; $i++) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $users[$i]->id . "</th>";
                    echo "<td>" . $users[$i]->firstName . "</td>";
                    echo "<td>" . $users[$i]->lastName . "</td>";
                    echo "<td>" . $users[$i]->email . "</td>";
                    echo "<td><a href='" . base_url('User/edit/') . $users[$i]->id . "'> <button class='btn btn-primary'>Edit</button> </a></td>";
                    echo " <td><form action='" . base_url('User') . " ' method='post'> <input type='hidden' name='id'value='" .  $users[$i]->id . "'><input type='submit' value='delete' class='btn btn-primary'></form></td>";
                    echo "</tr>";
                } ?>
            </tbody>
        </table>
    </div>

</div>