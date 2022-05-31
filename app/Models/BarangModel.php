<?php namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
	protected $table = 'barang';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama','harga','stok','gambar','created_at','created_by','updated_at','updated_by'
	];
	protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = true;
}
