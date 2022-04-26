<?php

namespace App\Controllers;

use App\Models\ProductModel;


class ProductController extends BaseController
{
    protected $ProductModel;
    public function __construct()
    {

        $this->ProductModel = new ProductModel();
    }

    // VIEW DATA
    public function index()
    {
        $product = $this->ProductModel->product_view();
        $data = [
            'product' => $product,
            'pagekey' => 'product'

        ];
        return view('page/TabelBarang', $data);
    }
    // TAMBAH DATA
    public function tambah()
    {
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'namabarang' => [
                'rules' => 'required|is_unique[product.nama_product,id,{id}]',
                'errors' => [
                    'required' => 'harus di isi',
                    'is_unique' => 'nama barang sudah ada'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harus di isi'
                ]
            ],
            'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harus di isi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harus di isi'
                ]
            ],
            'hargaJual' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harus di isi'
                ]
            ]
        ])) {
            $json = [
                'status' => 'gagal',
                'errors' => [
                    'namabarang' => $validation->getError('namabarang'),
                    'kategori' => $validation->getError('kategori'),
                    'jumlah' => $validation->getError('jumlah'),
                    'harga' => $validation->getError('harga'),
                    'hargaJual' => $validation->getError('hargaJual')
                ]
            ];
            return json_encode($json);
        }

        $tambahbarang = [
            'id' => $this->request->getPost('id'),
            'category_id' => $this->request->getPost('kategori'),
            'nama_product' => $this->request->getPost('namabarang'),
            'jumlah_product' => $this->request->getPost('jumlah'),
            'harga_product' => $this->request->getPost('harga'),
            'harga_jual' => $this->request->getPost('hargaJual')
        ];

        $hasil = $this->ProductModel->save($tambahbarang);
        if ($hasil) {
            $json = [
                'status' => 'data berhasil di tambahkan'
            ];
            return json_encode($json);
        };
    }
    // MENGAMBIL DATA MENAMPILKAN JSON
    public function ambildata()
    {
        $daftarProduct =  $this->ProductModel->data($this->request->getPost('id'));

        return json_encode($daftarProduct);
    }

    public function deletedata()
    {
        $id = $this->request->getPost('id');
        $data = $this->ProductModel->hapusid($id);
        if ($data) {
            $json = [
                'status' => 'berhasil'
            ];
            return json_encode($json);
        };
    }
}
