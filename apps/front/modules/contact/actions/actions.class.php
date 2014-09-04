<?php
/**
 * Contact actions
 */
class contactActions extends myFrontModuleActions
{

	public function executeFormWidget(dmWebRequest $request)
	{
		$form = $this->forms['Contact'];

		if ($request->isMethod('post') && $form->bindAndValid($request))
		{
			$to = 'winder84@mail.ru, tech@kmv.ru';
//			$to = 'winder84@mail.ru';
			$message = "<br />
				Имя: " . $_REQUEST['contact_form']['name'] .
				"<br />" .
				"Email: " . $_REQUEST['contact_form']['email'] .
				"<br />" .
				"Телефон: " . $_REQUEST['contact_form']['phone'] .
				"<br />" .
				"Сообщение: " . $_REQUEST['contact_form']['body'];
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "Content-Transfer-Encoding: 8bit \r\n";
			$headers .= "From: avtoserviskavkaz@1gb.ru\r\n";
			mail($to, 'Пользователь оставил свои контакты на сайте автосервискавказ.рф!!!', $message, $headers);
			$form->save();
			$this->redirectBack();
		}
	}


}
