<?= Form::open(['route' => 'pharos.resources.store']) ?>
	<div class="row">
	    <div class="col-md-12">
	        <h1 class="page-header">Create Resource</h1>
	    </div>
	</div>

    <?= render('pharos::resources.form.create-settings', ['resource' => $resource]) ?>
<?= Form::close() ?>