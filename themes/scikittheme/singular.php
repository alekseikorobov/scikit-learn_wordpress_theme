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
    
        <?php  get_sidebar('post'); ?>        

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
                <span class="section-number"><?php the_title()?> <a class="headerlink"
                    href="#supervised-learning" title="Permalink to this headline">¶</a>
                </h1>
                <?php the_content();?>
            </div>


        </div>        
        <div class="container">
            <footer class="sk-content-footer">
            Если вы хотите помочь проекту с переводом, то можно обращаться по следующему адресу <a href="mailto:support@scikit-learn.ru">support@scikit-learn.ru</a>
            <br/>
                © 2007 - 2020, scikit-learn developers (BSD License).                
            </footer>        
        </div>
    </div>
</div>

<?php get_footer(); ?>