<?php
$artigoController = new ArtigoController();
$helper = new Helper();

$search = filter_input(INPUT_POST, "search", FILTER_SANITIZE_SPECIAL_CHARS);
$listarPesquisa = $artigoController->buscarSearch($search);
?>
<main class="main-blog container">
    <div class="content">
        <section class="sec-blog">
            <h1 class="font-zero">Listagem de Todos os artigos Temporim</h1>
            <div class = "box-search">
                <?php
                if ($search != null):
                    ?>
                    <article class = "row-search">
                        <h1 class="titulo_search">Opsss, não existe esse titulo cadastrado!</h1> 
                    </article>                 
                    <?php
                else:
                    ?>

                    <?php
                    if ($listarPesquisa == null):
                        ?>
                        <article class = "row-search">
                            <h1 class="titulo_search">Opsss, não existe esse titulo cadastrado!</h1> 
                        </article> 
                        <?php
                    else:                    
                        ?>  
                        <section class="sec-thumb-pacotes">            
                            <div class="artigo_search">
                                <?php
                                foreach ($listarPesquisa as $artigo):
                                    ?>
                                    <article class = "art-blog">
                                        <a href = "<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" >
                                            <img class="card__img" src="<?= HOME; ?>/upload/<?= $artigo->getThumb(); ?>" alt="<?= $artigo->getTitulo(); ?>" title="<?= $artigo->getTitulo(); ?>"/>
                                        </a>
                                        <div class="desc-blog">
                                            <h2><?= $helper->Words($artigo->getTitulo(), 3); ?></h2>                
                                            <h6><?= $artigo->getAutor(); ?></h6>                
                                            <p><?= $helper->Words(html_entity_decode($artigo->getDescricao()), 10) ?></p>
                                            <a href = "<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>"  class="btnSaiba">Saiba Mais</a>
                                        </div>
                                    </article>
                                    <hr>               
                                    <?php
                                endforeach;
                                ?>
                            </div>
                        </section>
                    </div>
            </div>
        <?php
        endif;
        ?>
    <?php
    endif;
    ?>

</div>
</section>
<div class="clear"></div>
</div>
</main>