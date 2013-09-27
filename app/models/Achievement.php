<?php

use Carbon\Carbon;

class Achievement extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function getAchievedAtAttribute($value) 
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->toISO8601String();
    }
}
