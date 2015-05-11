angular.module('resources').factory('schema', ['pageData', '$http', function(pageData, $http)
{
	var persistUrl = '/pharos/resources/' + pageData.resource.id + '/schema';

	//
	// construct a new schema service
	//
	function construct(resource)
	{
		this.createField = createField;
		this.fieldTypeHasProperty = fieldTypeHasProperty;
		this.fields = resource.fields;
		this.persist = persist;
		this.removeField = removeField;
		this.status = 'Saved';
		this.validate = validate;
	}

	//
	// Runs validation on our input data
	//
	function validate(input, form)
	{
		var fieldNames = ['id'];
		var pattern = /^[a-z_]*$/;

		form.name.$setValidity('exists', input.name && _.indexOf(fieldNames, input.name) == -1);
		form.name.$setValidity('badFormat', input.name && pattern.test(input.name));

		return form.name.$valid && form.type.$valid;
	}



	//
	// Creates a new field from the given input data
	//
	function createField(input)
	{
		this.status = 'Save';

		var field = {
			type: input.type,
			name: input.name,
			rules: input.rules,
			is_nullable: input.is_nullable,
			is_unsigned: input.is_unsigned,
			has_default: input.has_default,
			default_value: input.default_value,
			field_length: input.field_length
		};

		this.fields.push(field);

		return field;
	}



	//
	// Removes a field with the $$hashKey in field
	//
	function removeField(field)
	{
		var index = _.chain(this.fields).pluck('$$hashKey').indexOf(field.$$hashKey).value();

		if (index > -1)
		{
			this.fields.splice(index, 1);
			this.status = 'Save';
		}
	}



	//
	// persist the schema fields
	//
	function persist()
	{
		this.status = 'Saving';

		var that = this;

		var promise = $http.patch(persistUrl, this.fields);

		promise.success(function()
		{
			that.status = 'Saved';
		})

		promise.error(function()
		{
			that.status = 'Error';
		});

		return promise;
	}



	//
	// see if this property exists for the type of field it is
	//
	function fieldTypeHasProperty(type, property)
	{
		if (property == 'length')
		{
			return _.indexOf(['string', 'char'], type) != -1
		}

		return false;
	}

	//
	// create a new schema service
	return new construct(pageData.resource);
}]);