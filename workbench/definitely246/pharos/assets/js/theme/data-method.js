$('body').on('click', '[data-method]', function(e)
{
	e.preventDefault();

	var element = $(e.currentTarget);
	var action = element.attr('href');
	var method = element.data('method');

    var form = $('<form>', {
        action: action,
        method: 'POST'
    });

    form.append($('<input>', {
        'name': '_method',
        'value': method,
        'type': 'hidden'
    }));

    form.submit();

    return false;
});