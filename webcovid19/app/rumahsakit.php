<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class rumahsakit extends Model {
  public $table = 'rumahsakit';

  protected $fillable = [
    'nama_rs', 'alamat', 'call_center', 'call_center2', 'call_center3', 'website'
  ];
}

 ?>
