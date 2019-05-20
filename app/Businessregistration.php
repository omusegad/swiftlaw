<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Businessregistration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "businessregistration";

    protected $fillable = [
        'id','doc_name','proposed_name1','proposed_name2','proposed_name3','business_nature','commencement_date',
        'plot_no_lr','street_name','postal_address','branch_address','telephone','email',
        'proprietor_partner1','proprietor_partner2','proprietor_partner3','nationality_citizenship',
        'nationality_origin','gender','place_residence','other_business_occupation','mobile_no',
        'document_status'];

    public function user()
    {
        //return $this->belongsTo('App\User');
    }
}
