<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelProduk;
use CodeIgniter\Config\View;
use CodeIgniter\HTTP\Request;

$request = \Config\Services::request();
class Produk extends Controller
{

    public function Index()
    {
        $prk = new ModelProduk();
        $data = [
            'tampildata' => $prk->tampildata()->getResult()
        ];
        echo View('viewtampilproduk', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo View('viewformtambah');
    }
    public function simpandata()
    {
        $data = [
            'ktp' => $this->request->getpost('ktp'),
            'nama' => $this->request->getpost('nama'),
            'judul1' => $this->request->getpost('judul1'),
            'judul2' => $this->request->getpost('judul2'),
            'algoritma' => $this->request->getpost('algoritma')

        ];
        $prk = new ModelProduk();

        $simpan = $prk->simpan($data);

        if ($simpan) {
            # code...
            return redirect()->to('/produk/index');
        }
    }
    function hapus()
    {
        $uri = service('uri');
        $ktp = $uri->getSegment('3');

        $prk = new ModelProduk();
        $prk->hapusdata($ktp);

        return redirect()->to('/produk/index');
    }
    function formedit()
    {
        helper('form');
        $uri = service('uri');
        $ktp = $uri->getSegment('3');

        $prk = new ModelProduk();

        $ambildata = $prk->ambildata($ktp);

        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();
            $data = [
                'ktp' => $ktp,
                'nama' => $row->nama,
                'judul1' => $row->judul1,
                'judul2' => $row->judul2,
                'algoritma' => $row->algoritma,
            ];
            echo View('viewformedit', $data);
        }
    }
    function updatedata()
    {
        $ktp = $this->request->getpost('ktp');
        $data = [
            'nama' => $this->request->getpost('nama'),
            'judul1' => $this->request->getpost('judul1'),
            'judul2' => $this->request->getpost('judul2'),
            'algoritma' => $this->request->getpost('algoritma'),
        ];
        $prk = new ModelProduk();

        $simpan = $prk->editdata($data, $ktp);

        if ($simpan) {
            # code...
            return redirect()->to('/produk/index');
        }
    }
}
