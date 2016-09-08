<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisite extends Model {

	protected $table = 'requisites';

    protected $fillable = [
        'firstname', 'lastname', 'bank_name', 'card_number', 'region', 'bill_number', 'bank_branch_number',
        'bank_address', 'inn', 'kpp', 'bik', 'checking_bill'
    ];




}
