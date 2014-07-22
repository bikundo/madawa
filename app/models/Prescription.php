<?php

class Prescription extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'user_id' => 'required',
		'instructions' => 'required',
		'dose' => 'required|numeric',
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'instructions', 'dose'];

	public function drugs()
   {
      return $this->belongsToMany('Drug');
   }

   public function user()
    {
        return $this->belongsTo('User');
    }


}