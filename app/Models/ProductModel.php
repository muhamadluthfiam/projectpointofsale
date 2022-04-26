<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'category_id',
        'nama_product',
        'jumlah_product',
        'harga_product',
        'harga_jual'
    ];

    // MENAMPILKAN SEMUA DATA
    public function product_view()
    {
        $this->select('product.*, product_category.nama_category as kategori');
        $this->join('product_category', 'product_category.id = product.category_id');
        $query = $this->get();
        return $query->getResultArray();
    }

    // MENGAMBIL PRODUK BERDASAR KAN ID
    public function data($id)
    {
        $this->select('product.*, product_category.nama_category as kategori');
        $this->join('product_category', 'product_category.id = product.category_id');
        $this->where([
            'product.id' => $id
        ]);
        $query = $this->get();
        return $query->getRow();
    }

    public function hapusid($id)
    {
        return $this->delete([
            'id' => $id
        ]);
    }













    // public function product()
    // {
    //     $build = $this->db->table('product');
    //     $build->select('*');
    //     $build->join('product_category', 'id_category = category_product');
    //     return $build->get();
    // }

    // public function simpanproduct($data)
    // {
    //     $query = $this->db->table('product')->insert($data);
    //     return $query;
    // }

    // public function updateproduct($data, $id)
    // {
    //     $query = $this->db->table('product')->update($data, array('id_product' => $id));
    //     return $query;
    // }

    // public function deleteproduct($id)
    // {
    //     $query = $this->db->table('product')->delete(array('id_product' => $id));
    //     return $query;
    // }
}
