<?php
require_once 'inc/slider.php';

$projetos = new Portifolio();
$projetosController = new PortfolioController();
$artigo = new Artigo();
$artigoController = new ArtigoController();
$helper = new Helper();
?>
<!--CONTENT INDEX DIVISION PAGES-->
<main class="main-content container">
    <div class="content">
<!--        <div class="bx-pino-mobile">
            <div class="bx-pino">
                <img src="<?= REQUIRE_PATH; ?>/assets/image/thumb-pino.jpg" alt=""/>
            </div>
        </div>-->


<div class="full-pino" id="servicos">
            <div class="pino">
                <img src="<?= REQUIRE_PATH; ?>/assets/image/pinos.jpg" alt=""/>
            </div>
        </div>
    </div>
    <!--END PINOS-->

    <section class="bx-info-top container" id="area-atuacao">
        <h1 class="font-zero">Especializações Temporim Engenharia</h1>
        <div class="content  animeTop">
            <?php
            require_once 'inc/pinosTop.php';
            ?>
        </div>
    </section>
    <!--END INFO TOP-->


    <section class="sec-area-perfomance container">
        <h1 class="font-zero">Área de atuação Temporim</h1>
        <div class="content animeTop">
            <article class="art-info-atuacion">
                <h2>ÁREAS DE ATUAÇÃO</h2>
                <p>
                    Temporim Engenharia realiza diversos tipos de reparos,
                    reformas e construções. Fazemos serviços especializados
                    para condomínios desde a execução de serviços à inspeção predial. 
                </p>
                <p>
                    Nossos serviços garantem o mínimo de sujeira e o máximo de
                    cuidado com seu patrimônio equipe com profissionais 
                    especializados, sob a supervisão de engenheiro civil e arquiteto.
                </p>
            </article>
            <div class="bx-atuacion">
                <article class="art-atuacion animeLeft">                    
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Manutenção</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Pisos E Revestimentos</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Telhados E Coberturas</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Projetos</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Planejamento E Projeto De Móveis Sob Medida</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Recuperação De Fachada</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Impermeabilização</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2> Avaliação De Imóveis</h2>
                        </div>
                    </div>
                </article>
                <article class="art-atuacion animeRight">
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2> Elétrica</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Pintura, Textura E Gesso</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Carpintaria</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Alvenaria</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Instalações Hidráulicas</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Instalações Hidrossanitárias</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Instalação De Vidros E Esquadrias</h2>
                        </div>
                    </div>
                    <div class="bx-atuacion">
                        <div class="icon-atuacion">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-checkbox.png" alt=""/>
                        </div>
                        <div class="desc-atuacion">
                            <h2>Execução De Serviços Na ÁRea De Edificações Prediais</h2>
                        </div>
                    </div>

                </article>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <!--END AREA PERFORMANCE-->


    <section class="sec-contact-one container"  id="contato">
        <h1 class="font-zero">Contato Temporim</h1>
        <div class="content animeTop">
            <article class="artc-contact">
                <h2>CONTATO</h2>
                <form class="form-contato">
                    <div class="form-group">
                        <input type="text" name="nome" class="name" placeholder="SEU NOME">
                        <div class="bx-icon">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-user.png" alt=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nome" class="email" placeholder="E-MAIL">
                        <div class="bx-icon">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-envelope.png" alt=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="msg" name="msg" class="msg"></textarea>
                        <div class="bx-icon">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-pencil.png" alt=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nome" class="phone" placeholder="TELEFONE">
                        <div class="bx-icon">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-phone-contact.png" alt=""/>
                        </div>
                    </div>

                    <input type="submit" class="btnEnviar" value="ENVIAR">
                </form>
            </article>
        </div>
        <div class="clear"></div>
    </section>
    <!--END AREA CONTACT-->
    <section class="sec-portfolion container">
        <h1 class="font-zero">Portfólio Temporim</h1>
        <div class="content animeTop">
            <article class="artc-portfolio" id="portfolio">
                <div class="bx-title">
                    <h2><span>P</span>ORTFÓLIO</h2>   
                </div>
                <div class="bx-portifolio">
                    <?php
//                    LISTAR PROJETOS COM LIMITE DE PUBLICACAO
                    $listarProjeto = $projetosController->listarProjetos(0, 10);
                    foreach ($listarProjeto as $projetos):
                        ?>
                        <div class="portifolio animeLeft">
                            <img class="card__img" src="<?= HOME; ?>/upload/<?= $projetos->getThumb(); ?>" alt="<?= $projetos->getTitulo(); ?>" title="<?= $projetos->getTitulo(); ?>"/>
                            <div class="card__text">
                                <h3 class="card__title"><?= $projetos->getTitulo(); ?></h3>
                                <p class="card__body"><?= html_entity_decode($helper->Words($projetos->getDescricao(), 6)); ?></p>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>

            </article>
        </div>
    </section>
    <!--END AREA PORTIFOLIO-->
    <section class="sec-about container">
        <h1 class="font-zero">Artigos do Site</h1>
        <div class="content animeTop">

            <div class="blog">
                <div class="bx-title">
                    <h2> <span>B</span>LOG</h2>   
                </div>
                <?php
                $listarArtigo = $artigoController->listarArtigoLimite(0, 3);
                foreach ($listarArtigo as $artigo):
                    ?>
                    <article class="art-article animeLeft">
                        <a href="<?= HOME; ?>/artigo/<?= $artigo->getUrl(); ?>" class="">
                            <div class="bx-thumb-blog">
                                <img class="card__img" src="<?= HOME; ?>/upload/<?= $artigo->getThumb(); ?>" alt="<?= $artigo->getTitulo(); ?>" title="<?= $artigo->getTitulo(); ?>"/>
                                <div class="card__text">
                                    <h3 class="card__title">Veja Mais</h3>
                                    <p class="card__body"><?= $helper->Words(html_entity_decode($artigo->getDescrever_imagem()), 8); ?></p>
                                </div>
                            </div>
                            <div class="desc-article">
                                <h2><?= $helper->Words($artigo->getTitulo(), 3); ?></h2>
                                <p>
                                    <?= html_entity_decode($helper->Words($artigo->getDescricao(), 25)); ?>
                                </p>
                            </div>
                        </a>
                    </article>
                    <?php
                endforeach;
                ;
                ?>

                <div class="veja-mais">
                    <a href="<?= HOME; ?>/blog">Veja Mais</a>
                </div>
            </div>

        </div>
    </section>
    <!--END AREA ABOUT-->        
</main>
<!--FIM CONTENT INDEX DIVISION PAGES-->