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
                <label for="c">(a+b) <sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> + 2ab</label>
                <input type="text" disabled class="form-control" <?php if (isset($answer)) {
                                                                        echo "value = " . $answer;
                                                                    } ?> id="c" name="c">
            </div>

        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="generate">
            </div>
        </div>
    </form>

</div>