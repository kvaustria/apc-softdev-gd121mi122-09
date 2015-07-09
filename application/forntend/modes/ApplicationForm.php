<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

class ApplicationForm extends Model
{
	public $last_name;
	public $first_name;
	public $middle_name;
	public $city_address;
	public $telephone_no;
	public $email;
	public $cellphone_no;
	public $birth_month;
	public $birth_date;
	public $birth_year;
	public $status;
	public $sex;
	public $birth_place;
	public $nationality;
	public $height;
	public $weight;
	public $religion;

	public $name_of_public_high_school_graduating_from;
	public $section;
	public $complete_address_of_school;
	public $name_of_school_principal;
	public $telephone_no_of_school;
	
	public function rules()
	{
		return[
			['last_name', 'required'],
			['first_name', 'required'],
			['middle_name', 'required'],
			['city_address', 'required'],
			['telephone_no', 'required'],
			['email', 'required'],
			['cellphone_no', 'required'],
			['birth_month', 'required'],
			['birth_date', 'required'],
			['birth_year', 'required'],
			['status', 'required'],
			['sex', 'required'],
			['birth_place', 'required'],
			['nationality', 'required'],
			['height', 'required'],
			['weight', 'required'],
			['religion', 'required'],

			['name_of_public_high_school_graduating_from', 'required'],
			['section', 'required'],
			['complete_address_of_school', 'required'],
			['name_of_school_principal', 'required'],
			['telephone_no_of_school', 'required'],
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
			$user->email = $this->email;
			$user->cellphone_no = $this->cellphone_no;
			$user->birth_month = $this->birth_month;
			$user->birth_date = $this->birth_date;
			$user->birth_year = $this->birth_year;
			$user->status = $this->status;
			$user->sex = $this->sex;
			$user->birth_place = $this->birth_place;
			$user->nationality = $this->nationality;
			$user->height = $this->height;
			$user->weight = $this->weight;
			$user->religion = $this->religion;

			$user->name_of_public_high_school_graduating_from = $this->name_of_public_high_school_graduating_from;
			$user->section = $this->section;
			$user->complete_address_of_school = $this->complete_address_of_school;
	/*		$user->name_of_school_principal = $this->name_of_school_principal;
			$user->telephone_no_of_school = $this->telephone_no_of_school; */

			if ($user->save())
			{
				return $user;
			}
			
		} 
		return null;
		
	}
}