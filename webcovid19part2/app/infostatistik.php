<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class infostatistik extends Model {
  public $table = 'infostatistik';

  protected $fillable = [
    'Provinsi', 'Odp', 'Pdp', 'ProsesOdp', 'SelesaiOdp', 'ProsesPdp', 'SelesaiPdp'
  ];
}

 ?>
