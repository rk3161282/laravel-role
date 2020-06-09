<?php 
namespace App;

use Zizaco\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Role extends Eloquent
{
    // use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['name','display_name','description'];




}