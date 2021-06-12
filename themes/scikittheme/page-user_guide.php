


<?php
get_header();

?>
<?php
    //header_content()
?>

<div class="d-flex" id="sk-doc-wrapper">
    <input type="checkbox" name="sk-toggle-checkbox" id="sk-toggle-checkbox">
    <label id="sk-sidemenu-toggle" class="sk-btn-toggle-toc btn sk-btn-primary" for="sk-toggle-checkbox">Toggle Menu</label>
    
    <?php  get_sidebar(); ?>

    <div id="sk-page-content-wrapper">
        <div class="sk-page-content container-fluid body px-md-3" role="main">
            <div id="user-guide">
                <h1><?php the_title(); ?></h1>
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
                <script>
                    window.addEventListener('DOMContentLoaded', function() {
                        (function($) {
                    //Function to make the index toctree collapsible
                    $(function () {
                        $('div.body .toctree-l2')
                            .click(function(event){
                                if (event.target.tagName.toLowerCase() != "a") {
                                    if ($(this).children('ul').length > 0) {
                                        $(this).attr('data-content',
                                            (!$(this).children('ul').is(':hidden')) ? '\u25ba' : '\u25bc');
                                        $(this).children('ul').toggle();
                                    }
                                    return true; //Makes links clickable
                                }
                            })
                            .mousedown(function(event){ return false; }) //Firefox highlighting fix
                            .children('ul').hide();
                        // Initialize the values
                        $('div.body li.toctree-l2:not(:has(ul))').attr('data-content', '-');
                        $('div.body li.toctree-l2:has(ul)').attr('data-content', '\u25ba');
                        $('div.body li.toctree-l2:has(ul)').css('cursor', 'pointer');

                        $('div.body .toctree-l2').hover(
                            function () {
                                if ($(this).children('ul').length > 0) {
                                    $(this).css('background-color', '#e5e5e5').children('ul').css('background-color', '#F0F0F0');
                                    $(this).attr('data-content',
                                        (!$(this).children('ul').is(':hidden')) ? '\u25bc' : '\u25ba');
                                }
                                else {
                                    $(this).css('background-color', '#F9F9F9');
                                }
                            },
                            function () {
                                $(this).css('background-color', 'white').children('ul').css('background-color', 'white');
                                if ($(this).children('ul').length > 0) {
                                    $(this).attr('data-content',
                                        (!$(this).children('ul').is(':hidden')) ? '\u25bc' : '\u25ba');
                                }
                            }
                        );
                    });
                        })(jQuery);
                    });
                </script>

                <style type="text/css">
                    div.body li, div.body ul {
                        transition-duration: 0.2s;
                    }

                    div.body li.toctree-l1 {
                        padding: 5px 0 0;
                        list-style-type: none;
                        font-size: 150%;
                        background-color: #f2f2f2;
                        font-weight: normal;
                        color: #20435c;
                        margin-left: 0;
                        margin-bottom: 1.2em;
                        font-weight: bold;
                        }

                    div.body li.toctree-l1 a {
                        color: #314F64;
                    }

                    div.body li.toctree-l1 > a {
                        margin-left: 0.75rem;
                    }

                    div.body li.toctree-l2 {
                        padding: 0.25em 0 0.25em 0 ;
                        list-style-type: none;
                        background-color: #FFFFFF;
                        font-size: 85% ;
                        font-weight: normal;
                        margin-left: 0;
                    }

                    div.body li.toctree-l2 ul {
                        padding-left: 40px ;
                    }

                    div.body li.toctree-l2:before {
                        content: attr(data-content);
                        font-size: 1rem;
                        color: #777;
                        display: inline-block;
                        width: 1.5rem;
                    }

                    div.body li.toctree-l3 {
                        font-size: 88% ;
                        list-style-type: square;
                        font-weight: normal;
                        margin-left: 0;
                    }

                    div.body li.toctree-l4 {
                        font-size: 93% ;
                        list-style-type: circle;
                        font-weight: normal;
                        margin-left: 0;
                    }

                    div.body div.topic li.toctree-l1 {
                        font-size: 100% ;
                        font-weight: bold;
                        background-color: transparent;
                        margin-bottom: 0;
                        margin-left: 1.5em;
                        display:inline;
                    }

                    div.body div.topic p {
                        font-size: 90% ;
                        margin: 0.4ex;
                    }

                    div.body div.topic p.topic-title {
                        display:inline;
                        font-size: 100% ;
                        margin-bottom: 0;
                    }
                </style>

                <div class="toctree-wrapper compound">
                    <ul>
                        <?php
                            $terms = get_terms('category');
                            foreach ($terms as $term) {
        ?>
                                <li class="toctree-l1">
                                <a class="reference internal" href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a>
                                    <ul>
        <?php
                                    get_html_posts_by_category_id($term->term_id);
        ?>
                                    </ul>
                                </li>
        <?php
                            }

                            function get_html_posts_by_category_id($category_id){
                                global $post;
                                $args = array('category' => $category_id);
                                $posts = get_posts($args);

                                foreach( $posts as $post ){ 
                                    setup_postdata($post);
        ?>
                            <li class="toctree-l2" data-content="►" style="cursor: pointer; background-color: white;">
                                <a class="reference internal" href="<?php the_permalink();?>"><?php the_title(); ?></a>
        <?php
                                    ?>
                                <ul style="display: none; background-color: white;"><?php echo get_the_excerpt(); ?></ul>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>