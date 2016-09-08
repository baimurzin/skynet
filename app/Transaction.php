<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model {

    use SoftDeletes;

    const STATUS_PROCESSING = 0,
        STATUS_ACCEPTED = 1;

    protected $dates = ['deleted_at'];

	protected $table = 'transactions';

    protected $fillable = ['status', 'amount'];

    public static function calculateRestShares() {
        return self::sum('amount');
    }

}
