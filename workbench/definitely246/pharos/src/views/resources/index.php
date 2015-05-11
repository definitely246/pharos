<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Resources</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Resources
                <a href="<?= route('pharos.resources.create') ?>" class="pull-right btn btn-xs btn-primary">
                    <i class="fa fa-plus"></i>
                    Create New Resource
                </a>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <?php if (count($resources)): ?>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Resource Name</th>
                                    <th>Api Route</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resources as $resource): ?>
                                    <tr>
                                        <td><?= $resource->name ?></td>
                                        <td><?= $resource->endpoint ?></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="<?= route('pharos.resources.edit', $resource->id) ?>">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a data-method="delete" href="<?= route('pharos.resources.destroy', $resource->id) ?>">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="text-center">
                            <h3>No resources have been setup yet.</h3>
                            <a href="<?= route('pharos.resources.create') ?>" class="btn btn-lg btn-primary">
                                <i class="fa fa-plus"></i>
                                Create One Now
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>