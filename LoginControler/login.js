$('#formLogin').submit(function (e) {
    e.preventDefault();
    var email = $.trim($("#email").val());
    var senha = $.trim($("#senha").val());

    if (email.length == "" || senha == "") {
        Swal.fire({
            type: 'warning',
            title: 'Você deve preencher os campos de login!',
        });
        return false;
    } else {
        $.ajax({
            url: "./LoginControler/login.php",
            type: "POST",
            datatype: "json",
            data: {email: email, senha: senha},
            success: function (data) {

                console.log(data);

                if (data == '"NA"') {

                    Swal.fire({
                        type: 'error',
                        title: 'Usuário ou senha incorretos!',
                    });

                } else {

                    if (data == '"Administrador"') {
                        //alert("Voce e adminstrador");
                        window.location.href = "./Admin/index.php";

                    } else if (data == '"Cliente"') {
                        //alert("Voce e Cliente");
                        //window.location.href = "";

                    } else if (data == '"Funcionario"') {
                        //alert("Voce e Funcionario");
                        //window.location.href = "";

                    }
                }
            }

        });
    }
});