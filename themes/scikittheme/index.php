<?php
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


<div class="container sk-landing-container pt-3 body" role="main">
  <div class="row no-gutters">
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="supervised_learning.html#supervised-learning"><h4 class="sk-card-title card-title">Classification</h4></a>
          <p class="card-text">Identifying which category an object belongs to.</p>
          <p class="card-text"><strong>Applications:</strong> Spam detection, image recognition.<br>
          <strong>Algorithms:</strong>
          <a href="modules/svm.html#svm-classification">SVM</a>,
          <a href="modules/neighbors.html#classification">nearest neighbors</a>,
          <a href="modules/ensemble.html#forest">random forest</a>,
          and <a href="supervised_learning.html#supervised-learning">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/classification/plot_classifier_comparison.html" aria-label="Classification">
          <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_classifier_comparison_001_carousel.png" class="sk-index-img" style="width:initial;max-width:initial" alt="Classifier comparison">
          </a>
        </div>
          <a href="auto_examples/index.html#classification" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="supervised_learning.html#supervised-learning"><h4 class="sk-card-title card-title">Regression</h4></a>
          <p class="card-text">Predicting a continuous-valued attribute associated with an object.</p>
          <p class="card-text"><strong>Applications:</strong> Drug response, Stock prices.<br>
          <strong>Algorithms:</strong>
          <a href="modules/svm.html#svm-regression">SVR</a>,
          <a href="modules/linear_model.html#ridge-regression">nearest neighbors</a>,
          <a href="modules/linear_model.html#lasso">random forest</a>,
          and <a href="supervised_learning.html#supervised-learning">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/ensemble/plot_adaboost_regression.html" aria-label="Regression">
          <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_adaboost_regression_thumb.png" class="sk-index-img" alt="Decision Tree Regression with AdaBoost">
          </a>
        </div>
          <a href="auto_examples/index.html#examples" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="modules/clustering.html#clustering"><h4 class="sk-card-title card-title">Clustering</h4></a>
          <p class="card-text">Automatic grouping of similar objects into sets.</p>
          <p class="card-text"><strong>Applications:</strong> Customer segmentation, Grouping experiment outcomes<br>
          <strong>Algorithms:</strong>
          <a href="modules/clustering.html#k-means">k-Means</a>,
          <a href="modules/clustering.html#spectral-clustering">spectral clustering</a>,
          <a href="modules/clustering.html#mean-shift">mean-shift</a>,
          and <a href="modules/clustering.html#clustering">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/cluster/plot_kmeans_digits.html" aria-label="Clustering">
          <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_kmeans_digits_thumb.png" class="sk-index-img" alt="A demo of K-Means clustering on the handwritten digits data">
          </a>
        </div>
          <a href="auto_examples/index.html#cluster-examples" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="modules/decomposition.html#decompositions"><h4 class="sk-card-title card-title">Dimensionality reduction</h4></a>
          <p class="card-text">Reducing the number of random variables to consider.</p>
          <p class="card-text"><strong>Applications:</strong> Visualization, Increased efficiency<br>
          <strong>Algorithms:</strong>
          <a href="modules/decomposition.html#pca">k-Means</a>,
          <a href="modules/feature_selection.html#feature-selection">feature selection</a>,
          <a href="modules/decomposition.html#nmf">non-negative matrix factorization</a>,
          and <a href="modules/decomposition.html#decompositions">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/decomposition/plot_pca_iris.html" aria-label="Dimensionality reduction">
          <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_pca_iris_thumb.png" class="sk-index-img" alt="PCA example with Iris Data-set">
          </a>
        </div>
          <a href="auto_examples/index.html#decomposition-examples" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="model_selection.html#model-selection"><h4 class="sk-card-title card-title">Model selection</h4></a>
          <p class="card-text">Comparing, validating and choosing parameters and models.</p>
          <p class="card-text"><strong>Applications:</strong> Improved accuracy via parameter tuning<br>
          <strong>Algorithms:</strong>
          <a href="modules/grid_search.html#grid-search">grid search</a>,
          <a href="modules/cross_validation.html#cross-validation">cross validation</a>,
          <a href="modules/model_evaluation.html#model-evaluation">metrics</a>,
          and <a href="model_selection.html">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/model_selection/plot_multi_metric_evaluation.html" aria-label="Model selection">
            <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_multi_metric_evaluation_thumb.png" class="sk-index-img" alt="Demonstration of multi-metric evaluation on cross_val_score and GridSearchCV">
          </a>
        </div>
          <a href="auto_examples/index.html#model-selection" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
    <div class="col-md-4 mb-3 px-md-2 sk-px-xl-4">
      <div class="card h-100">
        <div class="card-body">
          <a href="modules/preprocessing.html#preprocessing"><h4 class="sk-card-title card-title">Preprocessing</h4></a>
          <p class="card-text">Feature extraction and normalization.</p>
          <p class="card-text"><strong>Applications:</strong>  Transforming input data such as text for use with machine learning algorithms.<br>
          <strong>Algorithms:</strong>
          <a href="modules/preprocessing.html#preprocessing">preprocessing</a>,
          <a href="modules/feature_extraction.html#feature-extraction">feature extraction</a>,
          and <a href="modules/preprocessing.html#preprocessing">more...</a></p>
        </div>
        <div class="overflow-hidden mx-2 text-center flex-fill">
          <a href="auto_examples/preprocessing/plot_discretization_strategies.html" aria-label="Preprocessing">
          <img src="https://scikit-learn.org/stable/_images/sphx_glr_plot_discretization_strategies_thumb.png" class="sk-index-img" alt="Demonstrating the different strategies of KBinsDiscretizer">
          </a>
        </div>
          <a href="auto_examples/index.html#preprocessing" class="sk-btn-primary btn text-white btn-block" role="button">Examples</a>
      </div>
    </div>
  </div>
</div>

<?php

get_footer();