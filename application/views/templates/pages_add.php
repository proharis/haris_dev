<div class="container">
    <form action="" method="post">


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" id="title">
                <div class="alert alert-warning error" role="alert"><?php echo form_error('title'); ?></div>
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" placeholder="slug" name="slug" id="slug">
                <div class="alert alert-warning error" role="alert"><?php echo form_error('slug'); ?></div>
            </div>


        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" placeholder="content" name="content" id="content"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input type="checkbox" value="1" class="form-control" placeholder="status" name="status" id="status">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="meta_copyright">Meta copyright</label>
                <input type="text" class="form-control" placeholder="meta_copyright" name="meta_copyright"
                    id="meta_copyright">
            </div>
            <div class="form-group col-md-6">
                <label for="meta_description">Meta Description</label>
                <textarea type="text" class="form-control" placeholder="meta_description" name="meta_description"
                    id="meta_description"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="meta_keywords">Meta Keywords</label>
                <input type="text" class="form-control" placeholder="meta_keywords" name="meta_keywords"
                    id="meta_keywords">
            </div>
            <div class="form-group col-md-6">
                <label for="mata_robots">Mata Robots</label>
                <input type="text" class="form-control" placeholder="mata_robots" name="mata_robots" id="mata_robots">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="meta_dc_title">Meta Dc Title</label>
                <input type="text" class="form-control" placeholder="meta_dc_title" name="meta_dc_title"
                    id="meta_dc_title">
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