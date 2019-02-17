<?php
$slider = new Slider();
$sliderController = new SliderController();
?>
<div class="slide container">                 
    <!--banner rotativos -->        
    <div class="wrapper">            
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>  
                     <!--LISTAR IMAGENS DO BANCO PARA O SLIDER-->
                        <?php
                        $tamDesktop = "q";
                        $sliderDesktop = $sliderController->ListarTamanhoSlider($tamDesktop);
                        foreach ($sliderDesktop as $sli):
                            ?>
                            <li>
                                <a href="<?= $sli->getSlider_link(); ?>" target="_blank">
                                    <img  class="confZoomImage" id="thumb-slider" src="<?= HOME; ?>/upload/<?= $sli->getSlider_thumb(); ?>" alt="<?= $sli->getSlider_titulo(); ?>" title="<?= $sli->getSlider_titulo(); ?>">
                                </a>
                            </li>                                    
                            <?php
                        endforeach;
                        ?>
                </ul>
            </div>
            <!--                                                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                                                            <a href="#" class="jcarousel-control-next">&rsaquo;</a>-->
            <p class="jcarousel-pagination"></p>
        </div>
    </div> 
    <!--banner rotativos -->
    <div class="clear"></div>             
</div>
<!--FIM SLIDER-->