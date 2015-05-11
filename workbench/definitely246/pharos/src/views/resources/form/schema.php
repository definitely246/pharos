<form name="schemaForm" ng-controller="ResourceSchemaController" novalidate>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    SCHEMA
                    <button type="button" class="btn btn-xs pull-right btn-primary" ng-click="saveChanges()" ng-class="saveButtonClass()">{{ saveButtonText() }}</button>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Rules</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>id</td>
                                <td>primary key</td>
                                <td>
                                    <i class="pull-right fa fa-lock"></i>
                                </td>
                            </tr>

                            <tr ng-cloak ng-repeat="field in fields">
                                <td>{{ field.type }}</td>
                                <td>{{ field.name }}</td>
                                <td>{{ field.rules }}</td>
                                <td>
                                    <a class="pull-right" ng-click="removeField(field)">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot style="background-color: #eee" ng-cloak>
                            <tr>
                                <td>
                                    <div ng-class="error(schemaForm.type.$invalid)">
                                        <select name="type" ng-model="input.type" class="form-control" style="font-family: 'FontAwesome', Arial;" required>
                                            <?= render('pharos::resources.form.field-type-picker') ?>
                                        </select>
                                    </div>
                                    <input name="length" ng-model="input.length" type="text" ng-show="shown('length')" class="form-control" placeholder="length of field">
                                </td>

                                <td ng-class="error(schemaForm.name.$invalid)">
                                    <input name="name" ng-model="input.name" type="text" class="form-control" placeholder="new property name" required minlength="4">
                                    <div ng-messages="schemaForm.name.$error">
                                        <span class="label label-danger" ng-message="minlength">Must be at least 4 characters long</span>
                                        <span class="label label-danger" ng-message="exists">Name already exists</span>
                                        <span class="label label-danger" ng-message="badFormat">Only lowercase letters and underscores allowed</span>
                                    </div>
                                </td>

                                <td>
                                   <label class="checkbox-inline" title="Nullable field?">
                                        <input type="checkbox" name="is_nullable"> N
                                    </label>

                                    <label class="checkbox-inline" title="Use Default?">
                                        <input type="checkbox" name="has_default"> D
                                    </label>
                                    <input style="display: inline-block; width: 160px;" type="text" class="form-control" name="default_value" placeholder="use this default value">
                                </td>
                                <td>
                                    <button ng-disabled="!valid(schemaForm)" ng-click="addNewField(schemaForm)" class="btn btn-primary btn-sm full-width" type="submit">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>