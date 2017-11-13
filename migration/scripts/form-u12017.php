<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.4.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'KONTAKT Formulär Skicka in',
	'heading' => 'Skicka in nytt formulär',
	'success_redirect' => '../phone/tack.html',
	'resources' => array(
		'checkbox_checked' => 'Markerad',
		'checkbox_unchecked' => 'Omarkerad',
		'submitted_from' => 'Formulär skickat från webbplats: %s',
		'submitted_by' => 'Besöks-IP-adress: %s',
		'too_many_submissions' => 'För många bidrag från den här IP-adressen nyligen',
		'failed_to_send_email' => 'Kunde inte skicka e-postmeddelande',
		'invalid_reCAPTCHA_private_key' => 'Ogiltig privat reCAPTCHA-nyckel.',
		'invalid_reCAPTCHA2_private_key' => 'Ogiltig privat reCAPTCHA 2.0-nyckel.',
		'invalid_reCAPTCHA2_server_response' => 'Ogiltigt reCAPTCHA 2.0-serversvar.',
		'invalid_field_type' => 'Okänd fälttyp: \"%s\".',
		'invalid_form_config' => 'Fältet \"%s\" har en ogiltig konfiguration.',
		'unknown_method' => 'Okänd metod för serverbegäran'
	),
	'email' => array(
		'from' => 'info@safespring.com',
		'to' => 'info@safespring.com'
	),
	'fields' => array(
		'custom_U12022' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Namn',
			'required' => true,
			'errors' => array(
				'required' => 'Fältet \"Namn\" krävs.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'E-post',
			'required' => true,
			'errors' => array(
				'required' => 'Fältet \"E-post\" krävs.',
				'format' => 'Fältet \"E-post\" har en ogiltig e-postadress.'
			)
		),
		'custom_U12027' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Meddelande',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
