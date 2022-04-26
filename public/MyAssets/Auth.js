$(document).ready(
    function () {
        $("#login").submit((e) => {
            e.preventDefault();
            $.ajax({
                url: "/ceklogin",
                method: "post",
                data: $("#login").serialize(),
                dataType:"JSON",
                success: (Response) => {
                    if(Response){
                        if(Response.status == 'salah'){
                            if(Response.errors){
                                if(Response.errors.username){
                                    $('#username').addClass('is-invalid');
                                    $('#invalidUsername').html(Response.errors.username);
                                } else {
                                    $('#username').removeClass('is-invalid').addClass('is-valid');
                                }
                                if(Response.errors.password){
                                    $('#password').addClass('is-invalid');
                                    $('#invalidPassword').html(Response.errors.password);
                                } else {
                                    $('#password').removeClass('is-invalid').addClass('is-valid');
                                }
                            }
                        }
                        else if (Response.status == 'berhasil')
                        {
                            window.location = Response.data;
                        }
                    }
                } 
            })
        })



    }
)