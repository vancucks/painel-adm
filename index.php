<?php

include_once 'painel/bd/conexão.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);



if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'inicio':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'login':

            include_once 'painel/paginas/acesso/login.php';
            break;
        
        case 'inicial':

            include_once 'site/inicio.php';
            break;

        case 'produtos':
            //fazer uma consulta no banco e disponibilizar os resultados
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos');
            
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'produtositens':
           $id = $_GET ['id'];
            
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);
            
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtositens.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'servicos':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'contato':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'dashboard':
            //Página inicial do Painel ADM

            if (verificaLogin()) {
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                echo 'Login ou senha inválidos.';
            }
            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/dashboard.php';
}

