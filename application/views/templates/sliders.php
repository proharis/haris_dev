<div class="container">
    <h4 class="d-flex justify-content-center"> Add Slider</h4>
    <div class="d-flex justify-content-center">
        <a href="<?php echo  base_url('sliders/add') ?>"> <button type="button"
                class="btn btn-primary">Slider</button></a>
    </div>
    <div style="margin-top:2%">
        <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">slider_id</th>
                    <th scope="col">slider_description</th>
                    <th scope="col">slider_status</th>
                    <th scope="col">slider_title</th>
                    <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;edit</th>
                    <th scope="col">delete</th>
                    <th scope="col">Slides</th>
                    <th scope="col">Activation</th>
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
                        . $sliders[$i]->slider_id . "'><button  type='button' class='btn btn-primary'>Edit</button></a></td><td><form action='" . base_url('Sliders/index')  . "' method='post'><input type='hidden' name='slider_delete_id' value='" .  $sliders[$i]->slider_id  . "'><input name='delete' value= 'delete'  type='submit'class='btn btn-primary btn-xs'></form></td>";
                    echo "<td><a href = '" . base_url('slides/index/') . "" . $sliders[$i]->slider_id . "'><button  type='button' class='btn btn-primary'>slides(" . $CountOfSlides . ")</button></a></td>";
                    if ($sliders[$i]->slider_status == 1) {
                        echo "<td><form action='" . base_url('Sliders/index')  . "' method='post'><input type='hidden' name='slider_delete_id' value='" .  $sliders[$i]->slider_id  . "'><input value= 'deactivate' name='deactivate'  type='submit'class='btn btn-primary btn-xs'></form></td>";
                    } else {
                        echo "<td><form action='" . base_url('Sliders/index')  . "' method='post'><input type='hidden' name='slider_delete_id' value='" .  $sliders[$i]->slider_id  . "'><input value= 'activate' name='activate'  type='submit'class='btn btn-primary btn-xs'></form></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>