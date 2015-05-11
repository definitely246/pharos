<div class="row">
    <div class="col-md-12">
        <div class="panel panel-red">
            <div class="panel-heading">
                GENERAL SETTINGS
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Resource Name</label>
                        <input type="text" data-patch="settings" class="form-control" placeholder="Resource name" name="name" value="<?= $resource->name ?>">
                        <?= show_message_when('name', $errors) ?>
                    </div>
                    <div class="form-group col-md-offset-1 col-md-4">
                        <button type="submit" style="margin-top: 18px;" class="full-width text-centered btn btn-lg btn-primary">Save Resource</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>