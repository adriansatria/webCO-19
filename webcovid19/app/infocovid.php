<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class infocovid extends Model {
  public $table = 'infocovid';

  protected $fillable = [
    'Tanggal', 'Pasien_positif', 'Pasien_sembuh', 'Pasien_meninggal', 'Provinsi', 'Zona_daerah'
  ];
}

 ?>
