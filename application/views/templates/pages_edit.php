<div class="container">
    <form action="" method="post">
        <input type="hidden" name="oldSlug" value="<?php echo $records[0]->slug ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->title ?>" placeholder="Title"
                    name="title" id="title">
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->slug ?>" placeholder="slug"
                    name="slug" id="slug">
                <div class="alert alert-warning error" role="alert"><?php echo form_error('slug'); ?></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" value="<?php echo $records[0]->content ?>"
                    placeholder="content" name="content" id="content"><?php echo $records[0]->content ?></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <?php if ($records[0]->status == 0) {
                    ?>
                <input type="checkbox" value="<?php echo $records[0]->status ?>" class="form-control"
                    placeholder="status" name="status" id="status">
                <?php
                } else {
                    ?>
                <input type="checkbox" value="<?php echo $records[0]->status ?>" class="form-control"
                    placeholder="status" name="status" id="status" checked>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="meta_copyright">Meta copyright</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->meta_copyright ?>"
                    placeholder="meta_copyright" name="meta_copyright" id="meta_copyright">
            </div>
            <div class="form-group col-md-6">
                <label for="meta_description">Meta Description</label>
                <textarea type="text" class="form-control" value="<?php echo $records[0]->meta_description ?>"
                    placeholder="meta_description" name="meta_description"
                    id="meta_description"><?php echo $records[0]->meta_description ?></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="meta_keywords">Meta Keywords</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->meta_keywords ?>"
                    placeholder="meta_keywords" name="meta_keywords" id="meta_keywords">
            </div>
            <div class="form-group col-md-6">
                <label for="mata_robots">Mata Robots</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->mata_robots ?>"
                    placeholder="mata_robots" name="mata_robots" id="mata_robots">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="meta_dc_title">Meta Dc Title</label>
                <input type="text" class="form-control" value="<?php echo $records[0]->meta_dc_title ?>"
                    placeholder="meta_dc_title" name="meta_dc_title" id="meta_dc_title">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="Submit">Submit</label>
                <input type="submit" class="btn btn-primary" placeholder="Submit" name="Submit" id="Submit">
            </div>
        </div>

    </form>
</div>