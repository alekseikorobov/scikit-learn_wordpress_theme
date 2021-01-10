<?php
get_header();

?>
<?php
    //header_content()
?>



<div class="d-flex" id="sk-doc-wrapper">
    <input type="checkbox" name="sk-toggle-checkbox" id="sk-toggle-checkbox">
    <label id="sk-sidemenu-toggle" class="sk-btn-toggle-toc btn sk-btn-primary" for="sk-toggle-checkbox">Toggle
        Menu</label>
    
        <?php  get_sidebar(); ?>


    <div id="sk-page-content-wrapper">
        <div class="sk-page-content container-fluid body px-md-3" role="main">

            <style type="text/css">
                div.body div.toctree-wrapper ul {
                    padding-left: 0;
                }

                div.body li.toctree-l1 {
                    padding: 0 0 0.5em 0;
                    list-style-type: none;
                    font-size: 150%;
                    font-weight: bold;
                }

                div.body li.toctree-l2 {
                    font-size: 70%;
                    list-style-type: square;
                    font-weight: normal;
                    margin-left: 40px;
                }

                div.body li.toctree-l3 {
                    font-size: 85%;
                    list-style-type: circle;
                    font-weight: normal;
                    margin-left: 40px;
                }

                div.body li.toctree-l4 {
                    margin-left: 40px;
                }
            </style>
            <div class="section" id="supervised-learning">
                <span id="id1"></span>
                <h1>
                <?php
                    $curent_cats = get_the_category();
                    echo $current_category_name = $curent_cats[0]->name;
                ?>
                
                </h1>
                <div class="toctree-wrapper compound">
                    <ul>
                    <?php
                        if (have_posts()){
                            while(have_posts()){
                                the_post();
                                ?>
                                <li class="toctree-l1"><a class="reference internal" href="<?php the_permalink();?>">
                                    <!-- 1.1.Linear Models -->
                                    <?php the_title(); ?>
                                    <ul>
                                        <?php echo get_the_excerpt(); ?>
                                    </ul>
                                </a>

                            <?php } //end while
                        }//end if
                    ?>                    
                    </ul>
                </div><!--  END toctree-wrapper compound -->
            </div>

            
        </div>
        <div class="container">
            <footer class="sk-content-footer">
                © 2007 - 2020, scikit-learn developers (BSD License).
                <a href="_sources/supervised_learning.rst.txt" rel="nofollow">Show this page source</a>
            </footer>
        </div>
    </div>
</div>

<?php get_footer(); ?>