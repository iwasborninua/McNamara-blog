<? use yii\helpers\Url;?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);?>"> <?= $article->category->title;?></a></h6>

                            <h1 class="entry-title"><a href="blog.html"><?= $article->title;?></a></h1>


                        </header>
                        <div class="entry-content">
                            <p><?= $article->content;?></p>
                        </div>
                        <div class="decoration">
                            <? foreach($tags as $tag):?>
                            <a href="#" class="btn btn-default"><?= $tag->title;?></a>
                            <? endforeach;?>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize"><?= $article->user->name;?> On <?= $article->getDate();?></span>
                        </div>
                    </div>
                </article>

                <div id="disqus_thread"></div>
                <script>
                    var disqus_config = function () {
                    this.page.url = '<?= \Yii::$app->request->getAbsoluteUrl(); ?>';  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = '<?= md5(\Yii::$app->request->getAbsoluteUrl()); ?>'; // R`eplace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://mcnamara.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </div>
            <?= $this->render('/partionals/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories
            ]);?>
        </div>
    </div>
</div>
<!-- end main content-->