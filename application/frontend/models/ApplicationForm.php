<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ApplicationForm is the model behind the contact form.
 */

class ApplicationForm extends Model
{

	public $last_name;
	public $first_name;
	public $middle_name;
	public $city_address;
	public $telephone_no;
/*	public $email; */
	public $cellphone_no;
	public $date_of_birth;
	public $age;
	public $status;
	public $sex;
	public $place_of_birth;
	public $nationality;
	public $height;
	public $weight;
	public $religion;
	
	public function rules()
	{
		return[
			['last_name', 'required'],
			['first_name', 'required'],
			['middle_name', 'required'],
			['city_address', 'required'],
			['telephone_no', 'required'],
	/*		['email', 'required'], */
			['cellphone_no', 'required'],
			['date_of_birth', 'required'],
			['date_of_birth', 'required'],
			['age', 'required'],
			['status', 'required'],
			['sex', 'required'],
			['place_of_birth', 'required'],
			['nationality', 'required'],
			['height', 'required'],
			['weight', 'required'],
			['religion', 'required'],
			
		];
		
	}
	
	public function signup()
	{
		if ($this->validate())
		{
			$user = new User();
			$user->last_name = $this->last_name;
			$user->first_name = $this->first_name;
			$user->middle_name = $this->middle_name;
			$user->city_address = $this->city_address;
			$user->telephone_no = $this->telephone_no;
	/*		$user->email = $this->email; */
			$user->cellphone_no = $this->cellphone_no;
			$user->date_of_birth = $this->date_of_birth;
			$user->age = $this->age;
			$user->status = $this->status;
			$user->sex = $this->sex;
			$user->place_of_birth = $this->place_of_birth;
			$user->nationality = $this->nationality;
			$user->height = $this->height;
			$user->weight = $this->weight;
			$user->religion = $this->religion;


			if ($user->save())
			{
				return $user;
			}
			
		} 
		return null;
		
	}
}

