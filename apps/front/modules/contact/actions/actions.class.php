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
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=6Lf8igATAAAAAGAG4yk2pnDrJbA8vpqwM5L-j1yr&response=" . $_REQUEST['g-recaptcha-response']);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$output = json_decode(curl_exec($ch));
			curl_close($ch);
			if ($output->success) {
				$to = 'jackob.k@yandex.ru, tech@kmv.ru, winder84@mail.ru';
//				$to = 'winder84@mail.ru';
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
			}
			$this->redirectBack();
		}
	}


}
