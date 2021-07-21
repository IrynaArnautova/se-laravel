<?php

namespace App\Http\Controllers;

use App\Http\Helper\_Help;
use App\Mail\MailContacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
	public function contactForm(Request $request) /* Отправка сообщений */
	{
		//Валидация input из формы
		$request->validate([
		    'contact_info' => 'required',
//			'policy'=> 'required'
		]);

		//Капча
//		$resultJson = _Help::captcha();

		//Если капча прошла проверку, то отправляем сообщение
//		if ($resultJson->success == true && $resultJson->score > 0) {
			$mail = new \stdClass();
            $mail->contact_info = $request->contact_info;
            $mail->msg = $request->msg;
            $mail->lang = $request->lang;
            $mail->subject = $request->subject ?? 'Ошибка отправки';

			Mail::to(setting('mail.admin_mail'))->send(new MailContacts($mail)); //Передача переменных в класс MailContacts.

			return response()->json(['status' => 'ok']);
//		}

		//Если капча и/или валидация не прошла, возвращаем - error,
//		else return json_encode(['status' => 'error']);
	}

}
