angular.module('resources').controller('ResourceSchemaController', ['$scope', 'schema', function($scope, schema)
{
	$scope.input = {};
	$scope.fields = schema.fields;

	$scope.addNewField = function ()
	{
		schema.createField($scope.input);
		$scope.input = {};
	}

	$scope.error = function(invalid)
	{
		return invalid ? 'has-error' : '';
	}

	$scope.removeField = function(field)
	{
		schema.removeField(field);
	}

	$scope.saveButtonClass = function()
	{
		return schema.status == 'Save' || schema.status == 'Error' ? '' : 'disabled';
	}

	$scope.saveButtonText = function()
	{
		return schema.status;
	}

	$scope.saveChanges = function()
	{
		return schema.persist();
	}

	$scope.shown = function(property)
	{
		return schema.fieldTypeHasProperty($scope.input.type, property);
	}

	$scope.valid = function(form)
	{
		return schema.validate($scope.input, form);
	}
}])

.controller('ResourceDataController', ['$scope', function($scope)
{

}]);