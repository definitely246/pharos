$(function()
{
	function init()
	{
		console.log('doing it');

		// figure out a way to save ajaxly 
		// b/c that is what cool kids do right?


	}


	function patch(e)
	{
		var element = $(e.currentTarget);
		var form = element.closest('form');
		var url = form.attr('action')
		var type = element.data('patch');
		
		var data = {
			'_method': 'patch'
		};

		var promise = $.ajax(url, {
			type: 'post',
			data: data
		});

		$('.js-patch-' + type).addClass('active');

		promise.done(function()
		{
			$('.js-patch-' + type).removeClass('active');
		});

		// if has error then show error 

	}



	$('html.pharos.resources.edit').each(init);
	$('form').on('change', '[data-patch]', patch);
});