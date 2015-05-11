describe('resources schema service', function()
{
	beforeEach(function()
	{
		module('resources');
		module(function($provide){ $provide.value('pageData', mocks.pageData); });
	});

	it('can be initialized', inject(function(schema)
	{
		expect(schema).toBeDefined();
	}));

	it('can create a field', inject(function(schema)
	{
		var outcome = schema.createField(mocks.createSchemaField);
		expect(mocks.createSchemaField).toEqual(outcome);
	}));


});