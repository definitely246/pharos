<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Manage <?= $resource->name ?></h1>
    </div>
</div>

<?= render('pharos::resources.form.settings', compact('resource')) ?>
<?= render('pharos::resources.form.schema', compact('resource')) ?>
<?= render('pharos::resources.form.data', compact('resource')) ?>
<?= render('pharos::resources.form.filters', compact('resource')) ?>
<?= render('pharos::resources.form.events', compact('resource')) ?>
