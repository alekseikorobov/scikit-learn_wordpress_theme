<?php
/*
Template Name: page for example
Template Post Type: example
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
    
        <?php  get_sidebar('post'); ?>

        
        

    <div id="sk-page-content-wrapper">
        <div class="sk-page-content container-fluid body px-md-3" role="main">

            
            
                <?php the_content();?>
            


        </div>
        <div class="container">
            <footer class="sk-content-footer">
                © 2007 - 2020, scikit-learn developers (BSD License).
                <a href="_sources/supervised_learning.rst.txt" rel="nofollow">Show this page source</a>
            </footer>
        </div>
    </div>
</div>

<?php 
get_footer(); 
?>