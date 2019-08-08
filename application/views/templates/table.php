<div class="container height">
    <form action="" method="post">
        <div class="form-group">

        </div>
        <div class="row">
            <div class="col">
                <label for="tableOf">Table Of</label>
                <input type="text" class="form-control" id="tableOf" name="tableOf" placeholder="Table Of">
            </div>
            <div class="col">
                <label for="tableStart">Table Start</label>
                <input type="text" class="form-control" id="tableStart" name="tableStart" placeholder="Table Start">
            </div>
            <div class="col">
                <label for="tableEnd">Table End</label>
                <input type="text" class="form-control" id="tableEnd" name="tableEnd" placeholder="Table End">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="generate">
            </div>
        </div>
    </form>
    <table>
        <thead>
            <th>Table of</th>
            <th>Multiply with</th>
            <th>Value</th>
        </thead>
        <tbody>
            <?php
            if (isset($table)) {
                foreach ($table as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $table_of . "</td>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "<tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>