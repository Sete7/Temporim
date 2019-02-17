<?php
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];


$artigo = new Artigo();
$artigoController = new ArtigoController();
$helper = new Helper();

//LISTAR ARTIGO PELA URL
$listarArtigo = $artigoController->retornaUrlArtigo($urlCod);

if ($listarArtigo == null):
    echo 'Não existe Artigo cadastrado';

else:
    $codProd = $listarArtigo->getCod();
    $autor = $listarArtigo->getAutor();
    $thumb = $listarArtigo->getThumb();
    $sobreImg = $listarArtigo->getDescrever_imagem();
    $titulo = $listarArtigo->getTitulo();
    $data = $listarArtigo->getData();
    $descricao = html_entity_decode($listarArtigo->getDescricao());
?>
<main class="main-artic container">
    <div class="content">
        <section class="sec-artic">
            <h1 class="font-zero">Artigo Procurado</h1>
            <article class="art-artic">
                <p><strong>Por:</strong> <?= $autor; ?> as <span><?= $helper->converteData($data); ?></span></p>
                <div class="thumb-artic">
                    <img src="../upload/<?= $thumb; ?>" alt="<?= $titulo ?>" title="<?= $titulo ?>"/>
                    <?= $sobreImg; ?>
                    <div class="desc-artc">
                        <h2><?= $titulo; ?></h2>
                        <p>
                            <?= $descricao; ?>
                        </p>
                    </div>
                </div>
            </article>
            <!--END ARTICLE URL-->
            <?php
            endif;
            ?>
            <article class="art-form">
                <h2><span>.</span> Deixe uma resposta</h2>
                <p>
                    O seu endereço de e-mail não será publicado. Campos obrigatórios são marcados com *
                </p>

                <form class="form-article">
                    <label>
                        Comentário 
                    </label>
                    <textarea rows="6" cols="50" class="row-text">
                    
                    </textarea>
                    <label>
                        Nome * 
                    </label>
                    <input type="text" class="row-nome">
                    <label>
                        E-mail * 
                    </label>
                    <input type="email" class="row-email">
                    <div class="bx-btnComents">
                        <input type="submit" class="btnComents" value="Enviar Comentário">
                    </div>
                </form>
            </article>
            <!--END FORM COMENTS-->
            <article class="art-sugestion">
                <h2 class=""><strong>P</strong>ublicações <strong>S</strong>ugeridas</h2>
                <?php
                $listarArtigo = $artigoController->artigoSugeridoLimite(0, 3);
                foreach ($listarArtigo as $artigo):
                    ?>
                <div class="sugestion">
                    <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" class="thumb-sugestion">
                        <img class="card__img" src="<?= HOME; ?>/upload/<?= $artigo->getThumb(); ?>" alt="<?= $artigo->getTitulo(); ?>" title="<?= $artigo->getTitulo(); ?>"/>
                    </a>
                    <div class="desc-sugestion">
                        <h2><?= $helper->Words($artigo->getTitulo(), 3); ?></h2>
                        <p>
                            <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>">
                            <?= html_entity_decode($helper->Words($artigo->getDescricao(), 9)); ?>
                            </a>
                        </p>
                    </div>
                </div>
                <!--END ARTICLE SUGESTION-->
                <?php
                endforeach;
                ?>
            </article>
        </section>
        <!--END SECTION SUGESTION-->
        <aside class="sidebar-article">
            <section class="sec-sidebar">
                <h1 class="font-zero">Informação Geral e pesquisa</h1>
                <article class="search-aside">
                    <form class="form-search-aside" action="<?= HOME ?>/single-search">
                        <input type="search" class="search-aside" placeholder="Pesquise...">
                        <input type="submit" name="search" class="btnSearch" value="pesquise">
                    </form>
                </article>
                <!--END SEARCH ASIDE-->
                <article class="artc-last-post">
                    <h2><strong>Ú</strong>ltimos <strong>P</strong>osts</h2>
                    <?php
                        $listarArtigo = $artigoController->listarArtigoLimite(0, 3);
                        foreach ($listarArtigo as $artigo):
                            ?>
                    <div class="last-artc">
                        <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" class="thumb-last-artc">
                            <img class="card__img" src="<?= HOME; ?>/upload/<?= $artigo->getThumb(); ?>" alt="<?= $artigo->getTitulo(); ?>" title="<?= $artigo->getTitulo(); ?>"/>
                        </a>
                        <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" class="art-desc-lasr-art">
                            <p>
                               <?= html_entity_decode($helper->Words($artigo->getDescricao(), 15)); ?>
                            </p>
                        </a>
                    </div>
                    <!--END ARTICLE-->
                     <?php
                        endforeach;
                        ?>
                </article>
                <!--END ARTICLE SIDEBAR--> 
            </section>
        </aside>
        <div class="clear"></div>
    </div>
</main>