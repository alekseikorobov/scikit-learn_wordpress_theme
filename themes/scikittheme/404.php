<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div class="container-fluid sk-landing-bg py-3">
  <div class="container sk-landing-container">
    <div class="row">
      <div class="col-md-6 mb-3 mb-md-0">
        <h1 class="sk-landing-header text-white text-monospace">scikit-learn</h1>
        <h4 class="sk-landing-subheader text-white font-italic mb-3">Machine Learning in Python</h4>
        <a class="btn sk-landing-btn mb-1" href="getting_started.html" role="button">Getting Started</a>
        <a class="btn sk-landing-btn mb-1" href="auto_examples/release_highlights/plot_release_highlights_0_23_0.html" role="button">Release Highlights for 0.23</a>
        <a class="btn sk-landing-btn mb-1" href="https://github.com/scikit-learn/scikit-learn" role="button">GitHub</a>
      </div>
      <div class="col-md-6 d-flex">
        <ul class="sk-landing-header-body">
          <li>Simple and efficient tools for predictive data analysis</li>
          <li>Accessible to everybody, and reusable in various contexts</li>
          <li>Built on NumPy, SciPy, and matplotlib</li>
          <li>Open source, commercially usable - BSD license</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="container">
Страница на которую вы перешли не существует.
Если вы хотите помочь проекту с переводом, то можно обращаться по следующему адресу <a href="mailto:support@scikit-learn.ru">support@scikit-learn.ru</a>
</div>
<?php
get_footer();
