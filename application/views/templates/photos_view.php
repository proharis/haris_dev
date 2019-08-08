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
                    <th scope="col">Title</th>
                    <th scope="col">Url</th>
                    <th scope="col">Thumnail URL</th>
                    <th scope="col">Album ID</th>
                </tr>
            </thead>
            <?php
            $total_users = count($users);
            for ($i = 0; $i < $total_users; $i++) {
                echo "<tr>";
                echo "<td>" . $users[$i]->id . "</td>";
                echo "<td>" . $users[$i]->title . "</td>";
                echo "<td>" . $users[$i]->url . "</td>";
                echo "<td>" . $users[$i]->thumbnailUrl . "</td>";
                echo "<td>" . $users[$i]->albumId . "</td>";
                echo "</tr>";
            }
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</div>