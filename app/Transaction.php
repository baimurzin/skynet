<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Transaction extends Model {

    use SoftDeletes;

    const STATUS_PROCESSING = 0,
        STATUS_ACCEPTED = 1;

    protected $dates = ['deleted_at'];

	protected $table = 'transactions';

    protected $fillable = ['status', 'amount'];

    protected $appends = ['full_name'];

    /**
     * Custom functions
     */

    public static function calculateRestShares() {
        return self::sum('amount');
    }

    public static function getNotApprovalRequests() {
        return self::whereStatus(self::STATUS_PROCESSING)->get();
    }

    public static function deleteTransaction($ids) {
        self::whereIn('id', $ids)
            ->delete();
    }

    /**
     * Attributes
     */

    public function getFullNameAttribute()
    {
        return $this->user->lastname . " " . $this->user->firstname;
    }

    /**
     * Relation
     */

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

}
