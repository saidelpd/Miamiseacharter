<?php namespace App\Http\Requests\Appointments;
use App\Http\Requests\Request;

class CreateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'service' => 'required|not_in:0',
			'app_date' => 'required|date_format:m/d/Y',
			'hours' => 'required|not_in:0',
			'first' => 'required|max:100',
			'last' => 'required|max:100',
			'phone' => 'required|max:100',
			'email'=>'required|email|max:255'
		];
	}

}
