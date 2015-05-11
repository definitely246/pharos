<div class="row">
    <div class="col-md-12">
        <div class="panel panel-red">
            <div class="panel-heading">
                GENERAL SETTINGS
                <button class="btn btn-xs pull-right btn-primary disabled">Saved</button>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Resource Name</label>
                        <input type="text" class="form-control" placeholder="Resource name" name="name" value="<?= $resource->name ?>">
                        <?= show_message_when('name', $errors) ?>
                    </div>
                    <div class="form-group col-md-offset-1 col-md-4">
                        <label>Soft Deletes For Resource</label>
                        <input type="checkbox" name="use_soft_delete" value="1" <?= $resource->use_soft_delete ? 'checked' : '' ?>>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>