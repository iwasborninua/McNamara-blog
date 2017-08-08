<?php
    use yii\helpers\Url;
?>
<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
            <? foreach ($popular as $article):?>
                <div class="popular-post">
                    <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]);?>" class="text-uppercase"><?= $article->title;?></a>
                        <span class="p-date"><?= $article->getDate();?></span>
                    </div>
                </div>
            <? endforeach;?>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

            <? foreach ($recent as $article):?>
                <div class="thumb-latest-posts">
                    <div class="media">
                        <div class="media-left">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]);?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                                <div class="p-overlay"></div>
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]);?>" class="text-uppercase"><?= $article->title;?></a>
                            <span class="p-date"><?= $article->getDate();?></span>
                        </div>
                    </div>
                </div>
            <? endforeach;?>

        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
            <ul>
                <? foreach ($categories as $category):?>
                    <li>
                        <a href="<?= Url::toRoute(['site/category', 'id' => $category->id]);?>"><?= $category->title;?></a>
                        <span class="post-count pull-right"> (<?= $category->getArticles()->count();?>)</span>
                    </li>
                <? endforeach;?>
            </ul>
        </aside>
    </div>
</div>