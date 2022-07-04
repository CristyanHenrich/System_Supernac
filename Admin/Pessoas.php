<?php require_once("./vendor/header.php"); ?>
<?php require_once("./vendor/menu.php"); ?>
<?php require_once("./CRUD/READ.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas | Administrador</title>

    <script src="./js/jquery.maskMoney.js" type="text/javascript"></script>

    <script>
    $(document).ready(function() {
        $('#Tabela_Pessoas').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros",
                "zeroRecords": "Nenhum registro encontrado!",
                "info": "Mostrando _PAGE_ de _PAGES_ paginas",
                "infoFiltered": "(Filtrandeo do total de _MAX_ registros)",
                "search": "<ion-icon name='search-outline' style='width: 42px; hight: 42px;'></ion-icon>",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo"
                }
            }
        });
    });
    </script>

    <style>
    #Dinamica {
        margin-top: 25px;
        margin-left: 130px;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        gap: 30px;
        align-content: flex-start;
    }

    #Pessoas {
        transform: translate(5px);
        color: #0057b8;
        opacity: 100%;
    }

    #Pessoas a {
        text-decoration: none;
        color: #0057b8;
    }

    #AdicionarProduto {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #Tabela {
        width: 100%;
        padding: 50px;
    }

    form {
        padding: 20px;
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        flex-wrap: nowrap;
        flex-direction: row;
        gap: 10px;
    }

    .Administrador{
        color: green;
    }

    .Cliente{
        color: orange;
    }

    .Funcionario{
        color: blue;
    }
    </style>
</head>

<body>
    <div id="Dinamica">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalCadastrarPessoas">
            <ion-icon name="add-circle-sharp"></ion-icon>Cadastrar Pessoa
        </button>


        <section id="Tabela">

            <table id="Tabela_Pessoas" class="table table-striped table-hover"
                style="width:100%; border:1px solid #f5f5f5;">

                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%;">Foto</th>
                        <th class="text-center" style="width: 25%;">Nome</th>
                        <th class="text-center" style="width: 30%;">Email</th>
                        <th class="text-center" style="width: 10%;">CPF</th>
                        <th class="text-center" style="width: 15%;">Acesso</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($rowPessoas as $data) { ?>

                    <tr>
                        <td class="text-center"><img style="width: 60px; heigth: 60px; border-radius: 50%;" src="../STORAGE/<?php echo $data['FOTO'] ?>"></td>
                        <td class="text-center"><a href="./Pessoa.php?id=<?php echo $data['ID'] ?>"><?php echo $data['NOME'] ?></a></td>
                        <td class="text-center"><?php echo $data['EMAIL'] ?></td>
                        <td class="text-center"><?php echo $data['CPF'] ?> </td>
                        <td class="<?php echo $data['TIPO'] ?> text-center"><?php echo $data['TIPO'] ?></td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>

            </table>

        </section>

    </div>
</body>

</html>



<!-- Modal Cadastrar Produto -->
<div class="modal fade" id="ModalCadastrarPessoas" tabindex="-1" role="dialog" aria-labelledby="ModalCadastrarPessoas"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCadastrarPessoas">Cadastro de Pessoas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="./CRUD/CREATE.php" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="Nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>

                <div class="mb-3">
                    <label for="Descricao" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>

                <div class="mb-3">
                    <label for="Descricao" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="mb-3">
                    <label for="Descricao" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>

                <label for="acesso" class="form-label">Acesso</label>
                <select name="acesso" id="acesso" class="form-select" aria-label="Default">
                    <option value="Cliente" selected>Cliente</option>
                    <option value="Funcionario">Funcionario</option>
                    <option value="Administrador">Administrador</option>
                </select>

                <label for="Foto" class="form-label">Foto</label>
                <input type="file" name="foto" name="foto" id="foto">

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Criar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>