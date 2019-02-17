<?php

sleep(1);
require_once '../app/config.php';

$artigoController = new ArtigoController();
$helper = new Helper();

switch ($_POST['acao']):

    case 'ler':

        $offset = $_POST['offset'];
        $limit = $_POST['limit'];

        $postPacotes = $artigoController->listarArtigoLimite($offset, $limit);
        if ($postPacotes):
            foreach ($postPacotes as $post):
                echo '<article class = "art-blog">';
                echo '<a href = "./artigo/' . $post->getUrl() . '" >';
                echo '<img src=" '. HOME .'/upload/'. $post->getThumb().' " title="' . $post->getTitulo() . '" alt="' . $post->getTitulo() . '">';
                echo '</a>';
                echo '<div class="desc-blog">';
                 echo '<h2>' . $post->getTitulo() . '</h2>';                
                echo '<p>' . $helper->Words(html_entity_decode($post->getDescricao()), 10) . '</p>';
                 echo '<a href = "./artigo/' . $post->getUrl() . '"  class="btnSaiba">';
                 echo 'Saiba Mais';
                 echo '</a>';
                echo '</div>';
                echo '</article>';
                echo '<hr>';
            endforeach;
        else:
            echo '3';
        endif;
        break;

    default :
        echo '2';
endswitch;








