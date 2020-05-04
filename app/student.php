<?php 
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\model;
class student  extends Authenticatable
{
protected $guarded = ['updated_at','created_at'];
}