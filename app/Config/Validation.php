<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	/**
	 * Sign up validation rules.
	 *
	 * @var array
	 */
	public $bs_createUserAccountRules = [
		'user_username' => [
			'label' => 'username',
			'rules' => 'required|valid_email',
			'errors' => [
				'required' => '<span class="text-danger">You must enter a valid {field}.</span>',
				'valid_email' => '<span class="text-danger">The {field} must be a valid email address provided is invalid.</span>'
			]
		],
		'user_password' => [
			'label' => 'Password',
			'rules' => 'required|min_length[6]',
			'errors' => [
				'required' => '<span class="text-danger">Please enter a valid {field}.</span>',
				'min_length' => '<span class="text-danger">{field} length must be greater than {param} char.</span>'
			]
		],
		'user_confirm_password' => [
			'label' => 'Confirm Password',
			'rules' => 'required|min_length[6]|matches[user_password]',
			'errors' => [
				'required' => '<span class="text-danger">{field} is required*.</span>',
				'min_length' => '<span class="text-danger">{field} length must be greater than {param} char.</span>',
				'matches' => '<span class="text-danger">{field} must matche Password.</span>'
			]
		],
        'user_surname' => [
			'label' => 'Surname',
			'rules' => 'required',
			'errors' => [
				'required' => '<span class="text-danger">{field} is required*</span>'
			]
		],
        'user_firstname' => [
			'label' => 'First Name',
			'rules' => 'required',
			'errors' => [
				'required' => '<span class="text-danger">{field} is required*</span>'
			]
		],
        'user_lastname' => 'permit_empty',
        'user_phone_number' => [
			'label' => 'Phone Number',
			'rules' => 'required',
			'errors' => [
				'required' => '<span class="text-danger">{field} is required*</span>'
			]
		]
	];
}
