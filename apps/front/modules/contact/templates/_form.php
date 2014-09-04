<?php // Vars: $form

// open the form tag with a contact_form css class
echo $form->open('.feedback_form');
echo _tag('table.contact_form_table',
	_tag('tr',
		_tag('td',
			'Ф.И.О.<span style="color: red;">*</span> :').
		_tag('td',
			$form['name']->field()->error())
	).
	_tag('tr',
		_tag('td',
			'Электронная почта:').
		_tag('td',
			$form['email']->field()->error())
	).
	_tag('tr',
		_tag('td',
			$form['phone']->label().'<span style="color: red;">*</span>:').
		_tag('td',
			$form['phone']->field()->error())
	).
//	_tag('tr',
//		_tag('td',
//			$form['topic']->label().':').
//		_tag('td',
//			$form['topic']->field()->error())
//	).
	_tag('tr',
		_tag('td',
			'Сообщение:').
		_tag('td',
			$form['body']->field()->error())
	)
//	_tag('tr',
//		_tag('td',
//			'Проверочный код<span style="color: red;">*</span>:').
//		_tag('td',
//			'<div class="my_recapcha" id="my_recapcha"></div>')
//	)
);
echo '<input hidden="hidden" style="display: none;" name="botScan" id="botScan" value="">';
echo $form->renderHiddenFields();

// change the submit button text

// close the form tag
echo $form->close();