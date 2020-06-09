<?php
namespace App;

use Zizaco\Entrust\EntrustPermission;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Permission extends Eloquent
{
    // use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['name','description','display_name'];
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}