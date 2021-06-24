<?php

namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;


class ModelProduk extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('pencocokanproduk')->get();
    }

    function simpan($data)
    {
        return $this->db->table('pencocokanproduk')->insert($data);
    }
    function hapusdata($ktp)
    {
        return $this->db->table('pencocokanproduk')->delete(['ktp' => $ktp]);
    }
    function ambildata($ktp)
    {
        return $this->db->table('pencocokanproduk')->getWhere(['ktp' => $ktp]);
    }
    function editdata($data, $ktp)
    {
        return $this->db->table('pencocokanproduk')->update($data, ['ktp' => $ktp]);
    }
}
