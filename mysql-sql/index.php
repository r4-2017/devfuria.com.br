<?php
/**
 * MYSQL & SQL - index
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Mysql-SQL');
        $view->head->setDescription('Curso de SQL através do Mysql, descubra o que o SQL pode fazer por você.');
        $view->head->setkeywords("curso de mysql; curso de sql; curso gratuito de mysql");
//        $view->head->setkeywords("sql; mysql; sql básico; sql fácil; sql início; sql iniciante; " .
//            "sql iniciando; sql iniciante; começando com sql; começando no sql; " .
//            "sql descomplicado; aprendendo sql; matéria sobre sql; aula sobre sql; " .
//            "mysql básico; mysql fácil; mysql início; mysql iniciante; " .
//            "mysql iniciando; mysql iniciante; começando com mysql; começando no mysql; " .
//            "mysql descomplicado; aprendendo mysql; matéria sobre mysql; aula sobre mysql; "
//        );
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/mysql/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>
    </head>
    <body>
        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_MYSQL;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Mysql & SQL<small></small></h1>

                <p class="lead">Curso de SQL através do MySql</p>

                <p>Eu estava na dúvida se fazia um curso apenas de SQL ou se envolvia um Banco de Dados.</p>

                <p>É certo que a SQL é um padrão (ou pelo menos deveria ser) e que indepênde de banco de dados, mas por outro lado,</p>

                <p><strong>como aprender SQL sem ao menos um banco de dados?</strong></p>

                <p>Minha escolha pelo MySql é óbvia: é um DB "pau para toda obra", é o companheiro inseparável do PHP e é muito fácil começar por ele.</p>

                <p><strong>Se o curso é sobre SQL porque chama-se Mysql?</strong></p>

                <p>É porque eu não gostaria que alguém que estivesse procurando por SQL, </p>

                <p>entra-se no curso achando que vai aprender apenas SQL e na verdade irá aprender SQL juntamente com o MySql.</p>

                <p>Pode parecer bobagem mas eu quis tomar esse cuidado.</p>

                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>
        <?php
        $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_MYSQL);
        $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_MYSQL, Conteudo::SUB_SECAO_CURSO);
        include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>