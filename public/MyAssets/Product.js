$(document).ready(
    function () {
        $('#form-submit-barang').submit((e) => {
            e.preventDefault();
            $.ajax({
                url: "/tambah-barang",
                method: "post",
                data: $("#form-submit-barang").serialize(),
                dataType:"JSON",
                success: (Response) => {
                    if(Response) {
                        if(Response.status == 'gagal'){
                            if(Response.errors){
                                if(Response.errors.namabarang){
                                    $('#namabarang').addClass('is-invalid');
                                    $('#invalid-nama-barang').html(Response.errors.namabarang);                  
                                } else {
                                    $('#namabarang').removeClass('is-invalid').addClass('is-valid');
                                }
                                if(Response.errors.kategori){
                                    $('#kategori').addClass('is-invalid');
                                    $('#invalid-kategori').html(Response.errors.kategori);                  
                                } else {
                                    $('#kategori').removeClass('is-invalid').addClass('is-valid');
                                }
                                if(Response.errors.jumlah){
                                    $('#jumlah').addClass('is-invalid');
                                    $('#invalid-jumlah').html(Response.errors.jumlah);                  
                                } else {
                                    $('#jumlah').removeClass('is-invalid').addClass('is-valid');
                                }
                                if(Response.errors.harga){
                                    $('#harga').addClass('is-invalid');
                                    $('#invalid-harga').html(Response.errors.harga);                  
                                } else {
                                    $('#harga').removeClass('is-invalid').addClass('is-valid');
                                }
                                if(Response.errors.hargaJual){
                                    $('#hargaJual').addClass('is-invalid');
                                    $('#invalid-hargaJual').html(Response.errors.hargaJual);                  
                                } else {
                                    $('#hargaJual').removeClass('is-invalid').addClass('is-valid');
                                }
                            }
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: Response.status
                            });
                            $('#modalBarang').modal('hide');
                        }

                    }
                }
            })
        })
        $('.editBarang').click(function(){
            let id = $(this).data('id')
            $('#modalEdit').modal('show')
        $('#idBarang').val(id);
        $.ajax({
            url: "/edit-barang",
            method: "post",
            data: {id:id},
            dataType:"JSON",
            success: (Response) => {
                if(Response) {
                    $('#editnamabarang').val(Response.nama_product);
                    $('#editjumlah').val(Response.jumlah_product);
                    $('#editharga').val(Response.harga_product);
                    $('#edithargaJual').val(Response.harga_jual);
                } else {
                    swal({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'data berhasil diubah'
                    })
                }
            }
        })
        });
        $('.hapusBarang').click(function(){
            let id = $(this).data('id');
            let confirmalert = Swal.fire({
                title: 'Apa kamu yakin ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus barang tersebut!'
              }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/hapus-barang',
                        type: 'post',
                        data: {id:id},
                        dataType:'JSON',
                        success: function(response){
                            if(response.status == 'berhasil'){
                                Swal.fire(
                                        'Terhapus',
                                        'Barang tersebut berhasil dihapus.',
                                        'success'
                                      )
                            }else{
                                alert('gagal');
                            }
                        }
                    })

                }
              });
           
        });

    }
)
