<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.0.352
*/

require_once('recaptchalib.php');
require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Форма Домашняя',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'only.semak@mail.ru',
		'to' => 'only.semak@mail.ru'
	),
	'recaptcha' => array(
		'private_key' => '6LerTCUTAAAAALp-T0oQyCVCZqA9zOAZYj1ADd_f'
	),
	'fields' => array(
		'custom_U1700' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя\' не может быть пустым.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Электронная почта',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Электронная почта\' не может быть пустым.',
				'format' => 'Поле \'Электронная почта\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U1665' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Комментарий к заказу',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Комментарий к заказу\' не может быть пустым.'
			)
		),
		'custom_U1787' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Сотовый телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Сотовый телефон\' не может быть пустым.'
			)
		),
		'recaptcha_response_field' => array(
			'order' => 5,
			'type' => 'recaptcha',
			'label' => 'Проверка',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Проверка\' не может быть пустым.',
				'format' => 'Недействительное значение reCAPTCHA.'
			)
		)
	)
);

process_form($form);
?>
