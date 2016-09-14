<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyLog extends Model {

	protected $table = 'money_logs';
    protected $fillable = ['user_made', 'user_got_money', 'percent', 'money_got', 'sum'];

}
