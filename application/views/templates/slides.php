<?php
if (isset($_SESSION['username'])) {
    ?>
<a href="<?php echo base_url('Sliders') ?>"><button type="button" class="btn btn-danger">GO back to Sliders</button></a>
<div class="container">
    <div class="container">
        <h4 class="d-flex justify-content-center"> Add Slides</h4>
        <div class="d-flex justify-content-center">
            <a <?php echo "href = '" . base_url('Slides/add/') . ""
                        . $slider_id . "'" ?>> <button type="button" class="btn btn-primary">Slides</button></a>
        </div>
    </div>
    <div style="margin-top:2%">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">slide_id</th>
                    <th scope="col">slide_description</th>
                    <th scope="col">slide_status</th>
                    <th scope="col">slide_title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">video</th>
                    <th scope="col">slider_id</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $is = count($slides);
                    for ($i = 0; $i < $is; $i++) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $slides[$i]->slide_id . "</th>";
                        echo "<td>" . $slides[$i]->description . "</td>";
                        echo "<td>" . $slides[$i]->status . "</td>";
                        echo "<td>" . $slides[$i]->title . "</td>";
                        echo "<td>" . $slides[$i]->content . "</td>";
                        echo "<td >" . $slides[$i]->image . "</td>";
                        echo "<td>" . $slides[$i]->video . "</td>";
                        echo "<td>" . $slides[$i]->slider_id . "</td>";
                        echo "<td><a href = '" . base_url('slides/edit/') . ""
                            . $slides[$i]->slider_id . "/" . $slides[$i]->slide_id . "'><button type='button' class='btn btn-primary'>Edit</button></a><a href = '" . base_url('slides/delete/') . ""
                            . $slides[$i]->slide_id . "/" . $slides[$i]->slider_id . "'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>

        </table>
    </div>
</div>
<?php
} else {
    redirect('admin_login');
}
?>