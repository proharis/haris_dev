<?php
if (isset($_SESSION['username'])) {
    ?>
<div class="container">
    <h4 class="d-flex justify-content-center"> Add Slider</h4>
    <div class="d-flex justify-content-center">
        <a href="<?php echo  base_url('sliders/add') ?>"> <button type="button"
                class="btn btn-primary">Slider</button></a>
    </div>
    <div style="margin-top:2%">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">slider_id</th>
                    <th scope="col">slider_description</th>
                    <th scope="col">slider_status</th>
                    <th scope="col">slider_title</th>
                    <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;edit</th>
                    <th scope="col">delete</th>
                    <th scope="col">Slides</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $is = count($sliders);
                    for ($i = 0; $i < $is; $i++) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $sliders[$i]->slider_id . "</th>";
                        echo "<td>" . $sliders[$i]->slider_description . "</td>";
                        echo "<td>" . $sliders[$i]->slider_status . "</td>";
                        echo "<td>" . $sliders[$i]->slider_title . "</td>";
                        echo "<td><a href = '" . base_url('sliders/edit/') . ""
                            . $sliders[$i]->slider_id . "'><button style='margin-top: 30%;' type='button' class='btn btn-primary'>Edit</button></a></td><td><form action='" . base_url('Sliders/delete')  . "' method='post'><input type='hidden' name='slider_delete_id' value='" .  $sliders[$i]->slider_id  . "'><input style='background-color:#007bff;width:23%' value= 'delete'  type='submit'class='btn btn-primary btn-xs'></form></td>";
                        echo "<td><a href = '" . base_url('slides/index/') . "" . $sliders[$i]->slider_id . "'><button style='margin-top: 30%;' type='button' class='btn btn-primary'>slides</button></a></td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>

        </table>
    </div>

</div>
<?php
} else {
    redirect('admin/index');
}
?>