<div class="row">
    <div class="col-md-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                FILTERS [<a style="color: white;" href="<?= route('pharos.filters.index') ?>" title="Manage system filters">manage</a>]
                <span class="js-saving-filters hidden pull-right">Saving...</span>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#get-filter" data-toggle="tab">GET</a>
                    </li>
                    <li>
                        <a href="#post-filter" data-toggle="tab">POST</a>
                    </li>
                    <li>
                        <a href="#put-filter" data-toggle="tab">PUT</a>
                    </li>
                    <li>
                        <a href="#delete-filter" data-toggle="tab">DELETE</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="get-filter">
                        <?= View::make('pharos::resources.form.fake-filters', ['type' => 'get']) ?>
                    </div>
                    <div class="tab-pane fade" id="post-filter">
                        <?= View::make('pharos::resources.form.fake-filters', ['type' => 'post']) ?>
                    </div>
                    <div class="tab-pane fade" id="put-filter">
                        <?= View::make('pharos::resources.form.fake-filters', ['type' => 'put']) ?>
                    </div>
                    <div class="tab-pane fade" id="delete-filter">
                        <?= View::make('pharos::resources.form.fake-filters', ['type' => 'delete']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
