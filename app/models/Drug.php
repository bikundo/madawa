<?php

class Drug extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required',
		 'description' => 'required',
		 'ammount' => 'required',
		 'dosage' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'description', 'dosage', 'ammount'];

}