<div class="container height">
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="a">a</label>
                <input type="text" class="form-control" id="a" name="a" placeholder="a">
            </div>
            <div class="col">
                <label for="b">b</label>
                <input type="text" class="form-control" id="b" name="b" placeholder="b">
            </div>
            <div class="col">
                <label for="c">c = (<span style="font-size: 20px;">&#8730;</span>a<sup>2</sup> + b<sup>2</sup> )</label>
                <input type="text" disabled class="form-control" <?php if (isset($c_val)) {
                                                                        echo "value = " . $c_val;
                                                                    } ?> id="c" name="c">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" name="Submit" value="CalculateC">
            </div>
        </div>
    </form>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="c">c</label>
                <input type="text" class="form-control" id="c" name="c" placeholder="c">
            </div>
            <div class="col">
                <label for="b">b</label>
                <input type="text" class="form-control" id="b" name="b" placeholder="b">
            </div>
            <div class="col">
                <label for="a">a = (<span style="font-size: 20px;">&#8730;</span>c<sup>2</sup> - b<sup>2</sup> )</label>
                <input type="text" disabled class="form-control" <?php if (isset($a_val)) {
                                                                        echo "value = " . $a_val;
                                                                    } ?> id="a" name="a">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" name="Submit" value="CalculateA">
            </div>
        </div>
    </form>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="a">a</label>
                <input type="text" class="form-control" id="a" name="a" placeholder="a">
            </div>
            <div class="col">
                <label for="c">c</label>
                <input type="text" class="form-control" id="c" name="c" placeholder="c">
            </div>
            <div class="col">
                <label for="b">b = (<span style="font-size: 20px;">&#8730;</span>c<sup>2</sup> - a<sup>2</sup> )</label>
                <input type="text" disabled class="form-control" <?php if (isset($b_val)) {
                                                                        echo "value = " . $b_val;
                                                                    } ?> id="b" name="b">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" name="Submit" value="CalculateB">
            </div>
        </div>
    </form>
</div>