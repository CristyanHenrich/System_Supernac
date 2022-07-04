$('#FormCadastrar').submit(function (e) {
    e.preventDefault();
    var nome = $.trim($("#nome").val());
    var cpf = $.trim($("#cpf").val());
    var email = $.trim($("#email").val());
    var senha = $.trim($("#senha").val());
    var foto = $.trim($("#UploadFoto").val());

    if (nome.length == "" || cpf == "" || email == "" || senha == "" || foto == "") {
        Swal.fire({
            type: 'warning',
            title: 'Você deve preencher os campos de Cadastro!',
        });
        return false;
    } else {

        alert("TESTE");

		var FormCadastrar = document.getElementById('FormCadastrar');
		var formData = new FormData(FormCadastrar);

        $.ajax({
            url: "./LoginControler/Cadastro.php",
            type: "POST",
            data: formData,
            datatype: "json",
            processData: false,  
            contentType: false,
            success: function (data) {

            }
        });

        /*
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
                        window.location.href = "./Cliente/index.php";

                    } else if (data == '"Funcionario"') {
                        //alert("Voce e Funcionario");
                        //window.location.href = "";

                    }
                }
            }

        });
        */
    }

    $("input[type=file]").on("change", function(){
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return;
 
        if (/^image/.test( files[0].type)){
            var reader = new FileReader();
            reader.readAsDataURL(files[0]);
 
            reader.onload = function(){
                $("#imagem").attr('src', this.result);
            }
        }
    });
    
});