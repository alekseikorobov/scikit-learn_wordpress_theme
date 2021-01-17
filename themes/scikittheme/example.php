<?PHP 
/*
Template Name: example
*/

?>


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
    
        <?php  get_sidebar('example'); ?>


    <div id="sk-page-content-wrapper">
        <div class="sk-page-content container-fluid body px-md-3" role="main">

            <div class="section" id="example">
                <span id="id1"></span>
                <h1>Примеры</h1>
                
                    <div class="sphx-glr-clear"></div>
                    <?php
                        $terms = get_terms('category_example');
                        
                        foreach ($terms as $term) {
                        ?>
                            <h2><?php echo $term->name ?></h2>
                            <p><?php echo $term->description?></p>
                            
                        <?php 

                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category_example',
                                        'field'    => 'slug',
                                        'terms'    => $term->slug
                                    )
                                )
                            );
                            
                            // Запрос. $args - параметры запроса
                            query_posts( $args );

                            // Цикл WordPress
                            if( have_posts() ){ 
                                while( have_posts() ){ 
                                    the_post();

                                    ?>

                            <div class="sphx-glr-thumbcontainer">
                                <div class="figure align-default" id="id2">
                                    <!-- <img alt="<?php the_title();?>" src="../_images/sphx_glr_plot_release_highlights_0_23_0_thumb.png"> -->
                                    <?php the_post_thumbnail(array(160,112))?>
                                    <p class="caption">
                                        <span class="caption-text">
                                            <a class="reference internal" href="<?php the_permalink()?>">
                                            <span class="std std-ref"><?php the_title();?></span>
                                            </a>
                                            </span><a class="headerlink" href="#id2" title="Permalink to this image">¶</a>
                                            </p>
                                </div>
                            </div>
                            <div class="toctree-wrapper compound">
                            </div>

                                    <?php

                                    
                                }
                                wp_reset_query();
                            }
                            //wp_reset_postdata();
                            // else {
                            // // текст/код, если постов нет
                            // }
                            ?>
                            
                            

                            <div class="sphx-glr-clear"></div>
                        <?php 
                        }
                    ?>
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