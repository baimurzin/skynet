<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MoneyLog extends Model
{

    protected $table = 'money_logs';
    protected $fillable = ['user_made', 'user_got_money', 'percent', 'money_got', 'sum'];


    public static function getUserInvoices($user = false)
    {
        if (!$user) {
            $user = Auth::user();
        }

        return self::where('user_got_money', $user->id)->get();
    }
}
