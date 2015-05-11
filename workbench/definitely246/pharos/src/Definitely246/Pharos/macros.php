<?php

function render($view, $data = array())
{
	return View::make($view, $data);
}

function show_message_when($type, $errors)
{
	if ($errors && $errors->has($type))
	{
		return View::make('pharos::elements.alert', compact('errors', 'type'))->render();
	}

	return '';
}