<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Theme Forms configuration
|--------------------------------------------------------------------------
|
| This forms config array will be merged with /application/config/forms.php
| You can overwrite standard forms definition by creating your own definition
| for the form you wish to overwrite.
|
*/
$config['forms'] = array
(
	// Contact form
	'contact' => array
	(
		// The method which will process the form
		// The function name has no importance, it must only be in the declared Tagmanager class
		// and be "public static"
		'process' => 'TagManager_Contact::process_data',

		// Redirection after process. Can be 'home' or 'referer' for the $_SERVER['HTTP_REFERER'] value.
		// If not set, doesn't redirect
		'redirect' => 'referer',

		// Messages Language index, as set in language/xx/form_lang.php
		'messages' => array(
			'success' => 'form_alert_error_message',
			'error' => 'form_alert_success_message',
		),
		'emails' => array
		(
			// To Site Administrator
			array
			(
				// Send the mail to the address filled in in the 'email' input of the form
				// Values can be :
				// - One plain Email address : my.name@mydomain.com
				// - 'form' to send it to the email of the form data
				// - 'site' to send it to the Email set in Ionize under Settings > Advanced > Email > Website
				// - 'contact' to send it to the Email set in Ionize under Settings > Advanced > Email > Contact
				// - 'info' to send it to the Email set in Ionize under Settings > Advanced > Email > Info
				// - 'technical' to send it to the Email set in Ionize under Settings > Advanced > Email > Info
				'email' => 'contact',

				// Translation item index
				'subject' => 'mail_website_contact_subject',

				// Used view : Located in /themes/your_theme/mail/contact.php
				'view' => 'mail/contact/to_admin',
			),
			// Send to user
			array
			(
				'email' => 'form',
				'subject' => 'mail_user_contact_subject',
				'view' => 'mail/contact/to_user',
			),
		),
		// Form definition: fields and rules
		'fields' => array
		(
			'name' => array
			(
				// CI validation rules
				'rules' => 'trim|required|min_length[3]|xss_clean',
				// Label translated index, as set in language/xx/form_lang.php
				// Will be used to display the label name in error messages
				'label' => 'form_label_firstname',
			),
			'email' => array(
				'rules' => 'trim|required|valid_email|xss_clean',
				'label' => 'form_label_email',
			),
			'topic' => array(
				'rules' => 'trim|required|xss_clean',
				'label' => 'form_label_topic',
			),
			'message' => array(
				'rules' => 'trim|required|xss_clean',
				'label' => 'form_label_message',
			)
		)
	),


	// Ajax Contact form
	// Displayed and processed by the module Ajaxform
	'contact_ajax' => array
	(
		// The method which will process the form
		// Originally in libraries/ajaxform_process.php, this class can be copied in your theme libraries folder
		'process' => 'Ajaxform_Process::process_contact',

		// Messages Language index, as set in language/xx/form_lang.php
		'messages' => array(
			'success' => 'form_alert_error_message',
			'error' => 'form_alert_success_message',
		),
		'emails' => array
		(
			// To Site Administrator
			array
			(
				// Send the mail to the address filled in in the 'email' input of the form
				// Values can be :
				// - One plain Email address : my.name@mydomain.com
				// - 'form' to send it to the email of the form data
				// - 'site' to send it to the Email set in Ionize under Settings > Advanced > Email > Website
				// - 'contact' to send it to the Email set in Ionize under Settings > Advanced > Email > Contact
				// - 'info' to send it to the Email set in Ionize under Settings > Advanced > Email > Info
				// - 'technical' to send it to the Email set in Ionize under Settings > Advanced > Email > Info
				'email' => 'contact',

				// Translation item index
				'subject' => 'mail_website_contact_subject',

				// Used view : Located in /themes/your_theme/mail/contact.php
				'view' => 'mail/contact/to_admin_ajax',
			),
			// Send to user
			array
			(
				'email' => 'form',
				'subject' => 'mail_user_contact_subject',
				'view' => 'mail/contact/to_user_ajax',
			),
		),
		// Form definition: fields and rules
		'fields' => array
		(
			'name' => array
			(
				// CI validation rules
				'rules' => 'trim|required|min_length[3]|xss_clean',
				// Label translated index, as set in language/xx/form_lang.php
				// Will be used to display the label name in error messages
				'label' => 'form_label_firstname',
			),
			'email' => array(
				'rules' => 'trim|required|valid_email|xss_clean',
				'label' => 'form_label_email',
			),
			'message' => array(
				'rules' => 'trim|required|xss_clean',
				'label' => 'form_label_message',
			)
		)
	),
// Login Form
	'login' => array
	(
		'process' => 'TagManager_User::process_data',
		// Redirection after process. Can be 'home' or 'referer' for the $_SERVER['HTTP_REFERER'] value.
		// If not set, doesn't redirect
		'redirect' => 'referer',
		// Message Language index, as set in language/xx/form_lang.php
		'messages' => array
		(
			'success' => 'form_login_success_message',
			'error' => 'form_login_error_message',
			'not_found' => 'form_login_not_found_message',
			'not_activated' => 'form_login_not_activated_message',
		),
		'fields' => array
		(
			/*'email' => array(
				// CI rules
				'rules' => 'trim|required|min_length[5]|valid_email|xss_clean',
				// Label translated index, as set in language/xx/form_lang.php
				// Will be used to display the label name in error messages
				'label' => 'form_label_email',
			),*/
			'username' => array(
				// CI rules
				'rules' => 'trim|required|xss_clean',
				// Label translated index, as set in language/xx/form_lang.php
				// Will be used to display the label name in error messages
				'label' => 'form_label_username',
			),
			'password' => array(
				'rules' => 'trim|required|min_length[4]|xss_clean',
				'label' => 'form_label_password',
			),
		)
	),

	'logout' =>array
	(
		'process' => 'TagManager_User::process_data',
		'redirect' => 'home',
	),

	// Register Form
	'register' => array
	(
		'process' => 'TagManager_User::process_data',
		'redirect' => 'referer',
		'messages' => array
		(
			'success' => 'form_register_success_message',
			'error' => 'form_register_error_message',
		),
		// Emails which will be send when the form is properly processed
		'emails' => array
		(
			// To Admin Email
			array
			(
				// Values can be :
				// - One plain Email address : my.name@mydomain.com
				// - 'form' to send it to the email of the form data
				// - 'site' to send it to the Email set in Ionize under Settings > Advanced > Email > Website
				// - 'contact' to send it to the Email set in Ionize under Settings > Website > Email > Contact
				// - 'info' to send it to the Email set in Ionize under Settings > Website > Email > Info
				// - 'technical' to send it to the Email set in Ionize under Settings > Website > Email > Technical
				'email' => 'contact',
				// Email used for the reply_to Email
				'reply_to' => 'form',
				// Language term index, as set in language/xx/form_lang.php
				'subject' => 'mail_website_registration_subject',
				// View file to use for the email
				'view' => 'mail/register/to_admin',
			),
			// To User Email
			array
			(
				'email' => 'form',
				'subject' => 'mail_user_registration_subject',
				'view' => 'mail/register/to_user',
			),
		),
		// Each field of the form
		'fields' => array
		(
			'firstname' => array(
				'rules' => 'trim|required|xss_clean',
				'label' => 'form_label_firstname',
			),
			'lastname' => array(
				'rules' => 'trim|xss_clean',
				'label' => 'form_label_lastname',
			),

			'screen_name' => array(
				'rules' => 'trim|xss_clean',
				'label' => 'form_label_screen_name',
			),
			'email' => array(
				'rules' => 'trim|required|min_length[5]|valid_email|xss_clean',
				'label' => 'form_label_email',
			),
			'password' => array(
				//'rules' => 'trim|required|min_length[4]|xss_clean',
				'rules' => 'trim|required|min_length[4]|matches[password2]|xss_clean',
				'label' => 'form_label_password',
			),
			'password2' => array(
				'rules' => 'trim|required|min_length[4]|xss_clean',
				'label' => 'form_label_password_confirmation',
				// If set to FALSE, this field will not be saved to DB
				'save' => FALSE,
			)
			
		),
	),

	'profile' => array
	(
		'process' => 'TagManager_User::process_data',
		'redirect' => 'referer',
		'messages' => array
		(
			'success' => 	'form_profile_success_message',
			'error' => 		'form_profile_error_message',
			'deleted' => 	'form_profile_account_deleted',
			'not_logged' =>	'form_not_logged',
		),
		'fields' => array
		(
			'firstname' => array(
				'rules' => 'trim|required|xss_clean',
				'label' => 'form_label_firstname',
			),
			'lastname' => array(
				'rules' => 'trim|xss_clean',
				'label' => 'form_label_lastname',
			),
			'screen_name' => array(
				'rules' => 'trim|xss_clean',
				'label' => 'form_label_screen_name',
			),
			'email' => array(
				'rules' => 'trim|required|min_length[5]|valid_email|xss_clean',
				'label' => 'form_label_email',
			),
			'password' => array(
				//'rules' => 'trim|min_length[4]|xss_clean',
				'rules' => 'trim|min_length[4]|matches[password2]|xss_clean',
				'label' => 'form_label_password',
			),
			'password2' => array(
				'rules' => 'trim|min_length[4]|xss_clean',
				'label' => 'form_label_password_confirmation',
				// If set to FALSE, this field will not be saved to DB
				'save' => FALSE,
			),
		),
	),

	'password' => array
	(
		'process' => 'TagManager_User::process_data',
		'messages' => array
		(
			'success' => 	'form_password_success_message',
			'error' => 		'form_password_error_message',
			'not_found' => 	'form_password_not_found_message',
		),
		'fields' => array
		(
			'email' => array(
				'rules' => 'trim|required|min_length[5]|valid_email|xss_clean',
				'label' => 'form_label_email',
			),
		),
		'emails' => array
		(
			array
			(
				'email' => 'form',
				'subject' => 'mail_user_password_subject',
				'view' => 'mail/password/to_user',
			),
		),
	),
);

