<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="scikit-learn: machine learning in Python">

  
  <title>scikit-learn: machine learning in Python &mdash; scikit-learn 0.23.2 documentation</title>
  
  <link rel="canonical" href="https://scikit-learn.org/stable/index.html" />

  
  <link rel="shortcut icon" href="https://scikit-learn.org/stable/_static/favicon.ico"/>
  
  <!-- <link rel="stylesheet" href="https://scikit-learn.org/stable/_static/css/vendor/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="https://scikit-learn.org/stable/_static/gallery.css" type="text/css" />
  <link rel="stylesheet" href="https://scikit-learn.org/stable/_static/gallery-binder.css" type="text/css" />
  <link rel="stylesheet" href="https://scikit-learn.org/stable/_static/gallery-dataframe.css" type="text/css" />
  <link rel="stylesheet" href="https://scikit-learn.org/stable/_static/css/theme.css" type="text/css" /> -->

  <?php wp_head() ?>
<!-- <script id="documentation_options" data-url_root="./" src="https://scikit-learn.org/stable/_static/documentation_options.js"></script>
<script src="https://scikit-learn.org/stable/_static/jquery.js"></script>  -->
</head>
<body>

<nav id="navbar" class="sk-landing-navbar navbar navbar-expand-md navbar-light bg-light py-0">
  <div class="container-fluid sk-landing-container px-0">
      <a class="navbar-brand py-0" href="#">
        <img
          class="sk-brand-img"
          src="https://scikit-learn.org/stable/_static/scikit-learn-logo-small.png"
          alt="logo"/>
      </a>
    <button
      id="sk-navbar-toggler"
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="sk-navbar-collapse collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="sk-nav-link nav-link" href="install.html">Install</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link" href="user_guide.html">User Guide</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link" href="modules/classes.html">API</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link" href="auto_examples/index.html">Examples</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="getting_started.html">Getting Started</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="tutorial/index.html">Tutorial</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="whats_new/v0.23.html">What's new</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="glossary.html">Glossary</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="developers/index.html">Development</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="faq.html">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="related_projects.html">Related packages</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="roadmap.html">Roadmap</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="about.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="https://github.com/scikit-learn/scikit-learn">GitHub</a>
        </li>
        <li class="nav-item">
          <a class="sk-nav-link nav-link nav-more-item-mobile-items" href="https://scikit-learn.org/dev/versions.html">Other Versions</a>
        </li>
        <li class="nav-item dropdown nav-more-item-dropdown">
          <a class="sk-nav-link nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="sk-nav-dropdown-item dropdown-item" href="getting_started.html">Getting Started</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="tutorial/index.html">Tutorial</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="whats_new/v0.23.html">What's new</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="glossary.html">Glossary</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="developers/index.html">Development</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="faq.html">FAQ</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="related_projects.html">Related packages</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="roadmap.html">Roadmap</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="about.html">About us</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="https://github.com/scikit-learn/scikit-learn">GitHub</a>
              <a class="sk-nav-dropdown-item dropdown-item" href="https://scikit-learn.org/dev/versions.html">Other Versions</a>
          </div>
        </li>
      </ul>
      <div id="searchbox" role="search">
          <div class="searchformwrapper">
          <form class="search" action="search.html" method="get">
            <input class="sk-search-text-input" type="text" name="q" aria-labelledby="searchlabel" />
            <input class="sk-search-text-btn" type="submit" value="Go" />
          </form>
          </div>
      </div>
    </div>
  </div>
</nav>