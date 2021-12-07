<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro Inclusivo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<?php?>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro Inclusivo</h3>
                    <div class="notification is-info">
                      <p>Infelizmente o sobrenome que você inseriu não consta como válido no nosso banco de dados!</p>
                    </div>
                    <div class="notification is-success">
                      <p>Se houve algum erro ao digitar <a href="index.php">pressione aqui</a> para corrigir!</p>
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar para avaliação</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>