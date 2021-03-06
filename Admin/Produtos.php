<?php require_once("./vendor/header.php"); ?>
<?php require_once("./vendor/menu.php"); ?>
<?php require_once("./CRUD/READ.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Administrador</title>

    <script src="./js/jquery.maskMoney.js" type="text/javascript"></script>

    <script>
    $(document).ready(function() {
        $('#Tabela_Produtos').DataTable({
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

    #Produtos {
        transform: translate(5px);
        color: #0057b8;
        opacity: 100%;
    }

    #Produtos a {
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
    </style>
</head>

<body>
    <div id="Dinamica">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalCadastrarProduto">
            <ion-icon name="add-circle-sharp"></ion-icon>Cadastrar Produto
        </button>


        <section id="Tabela">

            <table id="Tabela_Produtos" class="table table-striped table-hover"
                style="width:100%; border:1px solid #f5f5f5;">

                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">Codigo De Barras</th>
                        <th class="text-center" style="width: 25%;">Nome</th>
                        <th class="text-center" style="width: 20%;">Categoria</th>
                        <th class="text-center" style="width: 5%;">Quantidade</th>
                        <th class="text-center" style="width: 10%;">Preco</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($rowProdutos as $data) { ?>

                    <tr>
                        <td class="text-center"><?php echo $data['COD_BARRAS'] ?></td>
                        <td class="text-center"><a href="./Produto.php?id=<?php echo $data['ID'] ?>"><?php echo $data['NOME'] ?></a></td>
                        <td class="text-center"><?php echo $data['CATEGORIA'] ?></td>
                        <td class="text-center"><?php echo $data['QUANTIDADE'] ?> </td>
                        <td class="text-center">R$ <?php echo $data['PRECO'] ?>,00 </td>
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
<div class="modal fade" id="ModalCadastrarProduto" tabindex="-1" role="dialog" aria-labelledby="ModalCadastrarProduto"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCadastrarProduto">Cadastro de Produtos</h5>
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
                    <label for="Descricao" class="form-label">Descricao</label>
                    <input type="text" class="form-control" name="descricao" id="descricao">
                </div>

                <label for="Categoria" class="form-label">Categoria</label>
                <select name="categoria" id="categoria" class="form-select" aria-label="Default">
                    <option value="Mercearia">Mercearia</option>
                    <option value="Hortifruti">Hortifruti</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Padaria">Padaria</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Limpeza">Limpeza</option>
                    <option value="Eletronicos">Eletronicos</option>
                    <option value="Informatica">Informatica</option>
                </select>

                <label for="Oferta" class="form-label">Oferta</label>
                <select name="oferta" id="oferta" class="form-select" aria-label="Default">
                    <option value="S">Sim</option>
                    <option value="N">Nao</option>
                </select>

                <div class="mb-3">
                    <label for="QNE" class="form-label">Quantidade no Estoque</label>
                    <input type="numeric" class="form-control int-number" name="quantidade" id="quantidade">
                </div>

                <div class="mb-3">
                    <label for="Preco" class="form-label">Preco</label>
                    <input type="text" class="form-control" name="preco" id="preco">
                </div>

                <label for="Foto" class="form-label">Foto</label>
                <input type="file" name="foto" name="foto" id="foto">

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Criar Produto</button>
                </div>
            </form>
        </div>
    </div>
</div>