<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table = 'transaksi';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'id_barang', 'id_pembeli', 'jumlah', 'total_harga', 'alamat', 'ongkir', 'status','created_at','created_by','updated_at','updated_by'
	];
	protected $returnType = 'App\Entities\Transaksi';
	protected $useTimestamps = true;
}