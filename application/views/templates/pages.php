<div class="container">
    <div class="add_pages">
        <h3>Add Page</h3>
        <a href="<?php echo base_url('pages/add') ?>">
            <button class="btn btn-primary" name="Add Pages">Add Page</button></a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <caption>List of Pages</caption>
            <thead>
                <tr>
                    <th scope="col">Page ID</th>
                    <th scope="col">Page Title</th>
                    <th scope="col">Page Slug</th>
                    <th scope="col">Page Content</th>
                    <th scope="col">Page Status</th>
                    <th scope="col">meta_copyright</th>
                    <th scope="col">meta_description</th>
                    <th scope="col">meta_keywords</th>
                    <th scope="col">mata_robots</th>
                    <th scope="col">meta_dc_title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Activation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count_pages = count($pages);
                for ($i = 0; $i < $count_pages; $i++) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $pages[$i]->id . "</th>";
                    echo "<td>" . $pages[$i]->title . "</td>";
                    echo "<td>" . $pages[$i]->slug . "</td>";
                    echo "<td>" . $pages[$i]->content . "</td>";
                    echo "<td>" . $pages[$i]->status . "</td>";
                    echo "<td>" . $pages[$i]->meta_copyright . "</td>";
                    echo "<td>" . $pages[$i]->meta_description . "</td>";
                    echo "<td>" . $pages[$i]->meta_keywords . "</td>";
                    echo "<td>" . $pages[$i]->mata_robots . "</td>";
                    echo "<td>" . $pages[$i]->meta_dc_title . "</td>";
                    echo "<td><a href='" . base_url('Pages/edit/') . $pages[$i]->id . "'> <button class=' btn btn-primary'>Edit</button></a></td>";
                    echo "<td><form action='" . base_url('Pages/index') . "' method='post'><input type='hidden' name='id' value='" . $pages[$i]->id . "'><input type='submit' value='Delete' name='delete'></form></td>";
                    if ($pages[$i]->status == 1) {
                        echo "<td><form action='" . base_url('pages/index')  . "' method='post'><input type='hidden' name='id' value='" .  $pages[$i]->id  . "'><input  value= 'deactivate' name='deactivate' type='submit'class='btn btn-primary btn-xs'></form></td>";
                    } else {
                        echo "<td><form action='" . base_url('pages/index')  . "' method='post'><input type='hidden' name='id' value='" .  $pages[$i]->id  . "'><input  value= 'activate' name='activate' type='submit'class='btn btn-primary btn-xs'></form></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</div>