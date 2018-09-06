<?php
    require_once('inc/functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="category_section mobile">
    <div class="article_title header_purple">
        <h2><a href="category.html" target="_self">Notícias</a></h2>
    </div>
    <?php if ($destaques) : ?>
    <?php foreach ($destaques as $destaque) : ?>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="#" target="_self"><img class="img-responsive" src="<?php echo BASEURL; ?><?php echo $destaque['nm_imagem']; ?>" alt="feature-top">
                    </a>
                </div>
            </div>
            <div class="col-md-6">

                <div class="category_article_title">
                    <h2><a href="#" target="_self"><?php echo $destaque['nm_titulo']; ?> </a></h2>
                </div>
                <div class="category_article_date"><?php echo date('d/m/Y - H:i', strtotime($destaque['dt_data'])); ?></div>
                <div class="category_article_content">
                <?php echo $destaque['ds_descricao']; ?>
                </div>
                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i><?php echo rand(1,100); ?> </a> Shares</span>
                    <span><i class="fa fa-comments-o"></i><a href="#"><?php echo rand(1,100); ?></a> Comentários</span>
                </div>
            </div>
        </div>
    </div>
                <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Nenhuma notícia encontrada.</td>
                    </tr>
                <?php endif; ?>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-12">
                <?php if ($noticias) : ?>
                <?php foreach ($noticias as $noticia) : ?>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="<?php echo BASEURL; ?><?php echo $noticia['nm_imagem']; ?>"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                       

                        <h3 class="media-heading"><a href="#" target="_self"><?php echo $noticia['nm_titulo']; ?></a></h3>
                        <span class="media-date"><?php echo date('d/m/Y - H:i', strtotime($noticia['dt_data'])); ?></span>

                        <div class="media_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i><?php echo rand(10,600); ?></a> Shares</span>
                            <span><a href="#"><i class="fa fa-comments-o"></i><?php echo rand(1,100); ?></a> Comentários</span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Nenhuma notícia encontrada.</td>
                    </tr>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    <p class="divider"><a href="#">Mais notícias&nbsp;&raquo;</a></p>
</div>
</div>
<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Mais populares</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo BASEURL; ?>assets/img/noticias/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="#" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec tortor aliquet velit molestie ullamcorper.</a>
            </h3> <span class="media-date">01-01-2000 - 10:00</span>

            <div class="widget_article_social">
                <span>
                    <a href="#" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="#" target="_self"><i class="fa fa-comments-o"></i>4</a> Comentários
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo BASEURL; ?>assets/img/noticias/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="#" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec tortor aliquet velit molestie ullamcorper.</a>
            </h3>
            <span class="media-date">01-01-2000 - 10:00</span>

            <div class="widget_article_social">
                <span>
                    <a href="#" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="#" target="_self"><i class="fa fa-comments-o"></i>4</a> Comentários
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo BASEURL; ?>assets/img/noticias/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="#" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec tortor aliquet velit molestie ullamcorper.</a>
            </h3>
            <span class="media-date">01-01-2000 - 10:00</span>

            <div class="widget_article_social">
                <span>
                    <a href="#" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="#" target="_self"><i class="fa fa-comments-o"></i>4</a> Comentários
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo BASEURL; ?>assets/img/noticias/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="#" target="_self">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec tortor aliquet velit molestie ullamcorper.</a>
            </h3>
            <span class="media-date">01-01-2000 - 10:00</span>

            <div class="widget_article_social">
                <span>
                    <a href="#" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="#" target="_self"><i class="fa fa-comments-o"></i>4</a> Comentários
                </span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">Mais notícias&nbsp;&raquo;</a></p>
</div>
</div>
</div>
</div>
</section>
<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">INSCREVA-SE</span> para receber as principais notícias</h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="INSCREVER-SE" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>

<?php include(FOOTER_TEMPLATE); ?>