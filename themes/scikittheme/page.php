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
                    <span class="section-number">1. </span>Supervised learning<a class="headerlink"
                        href="#supervised-learning" title="Permalink to this headline">¶</a></h1>
                <div class="toctree-wrapper compound">
                    <ul>
                        <li class="toctree-l1"><a class="reference internal" href="modules/linear_model.html">1.1.
                                Linear Models</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#ordinary-least-squares">1.1.1. Ordinary Least
                                        Squares</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#ridge-regression-and-classification">1.1.2.
                                        Ridge regression and classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#lasso">1.1.3. Lasso</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#multi-task-lasso">1.1.4. Multi-task Lasso</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#elastic-net">1.1.5. Elastic-Net</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#multi-task-elastic-net">1.1.6. Multi-task
                                        Elastic-Net</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#least-angle-regression">1.1.7. Least Angle
                                        Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#lars-lasso">1.1.8. LARS Lasso</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#orthogonal-matching-pursuit-omp">1.1.9.
                                        Orthogonal Matching Pursuit (OMP)</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#bayesian-regression">1.1.10. Bayesian
                                        Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#logistic-regression">1.1.11. Logistic
                                        regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#generalized-linear-regression">1.1.12.
                                        Generalized Linear Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#stochastic-gradient-descent-sgd">1.1.13.
                                        Stochastic Gradient Descent - SGD</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#perceptron">1.1.14. Perceptron</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#passive-aggressive-algorithms">1.1.15. Passive
                                        Aggressive Algorithms</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#robustness-regression-outliers-and-modeling-errors">1.1.16.
                                        Robustness regression: outliers and modeling errors</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/linear_model.html#polynomial-regression-extending-linear-models-with-basis-functions">1.1.17.
                                        Polynomial regression: extending linear models with basis functions</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/lda_qda.html">1.2. Linear and
                                Quadratic Discriminant Analysis</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/lda_qda.html#dimensionality-reduction-using-linear-discriminant-analysis">1.2.1.
                                        Dimensionality reduction using Linear Discriminant Analysis</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/lda_qda.html#mathematical-formulation-of-the-lda-and-qda-classifiers">1.2.2.
                                        Mathematical formulation of the LDA and QDA classifiers</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/lda_qda.html#mathematical-formulation-of-lda-dimensionality-reduction">1.2.3.
                                        Mathematical formulation of LDA dimensionality reduction</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/lda_qda.html#shrinkage-and-covariance-estimator">1.2.4. Shrinkage
                                        and Covariance Estimator</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/lda_qda.html#estimation-algorithms">1.2.5. Estimation
                                        algorithms</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/kernel_ridge.html">1.3.
                                Kernel ridge regression</a></li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/svm.html">1.4. Support Vector
                                Machines</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#classification">1.4.1. Classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#regression">1.4.2. Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#density-estimation-novelty-detection">1.4.3. Density
                                        estimation, novelty detection</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#complexity">1.4.4. Complexity</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#tips-on-practical-use">1.4.5. Tips on Practical Use</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#kernel-functions">1.4.6. Kernel functions</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#mathematical-formulation">1.4.7. Mathematical
                                        formulation</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/svm.html#implementation-details">1.4.8. Implementation details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/sgd.html">1.5. Stochastic
                                Gradient Descent</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#classification">1.5.1. Classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#regression">1.5.2. Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#stochastic-gradient-descent-for-sparse-data">1.5.3.
                                        Stochastic Gradient Descent for sparse data</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#complexity">1.5.4. Complexity</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#stopping-criterion">1.5.5. Stopping criterion</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#tips-on-practical-use">1.5.6. Tips on Practical Use</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#mathematical-formulation">1.5.7. Mathematical
                                        formulation</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/sgd.html#implementation-details">1.5.8. Implementation details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/neighbors.html">1.6. Nearest
                                Neighbors</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#unsupervised-nearest-neighbors">1.6.1. Unsupervised
                                        Nearest Neighbors</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#nearest-neighbors-classification">1.6.2. Nearest
                                        Neighbors Classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#nearest-neighbors-regression">1.6.3. Nearest
                                        Neighbors Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#nearest-neighbor-algorithms">1.6.4. Nearest
                                        Neighbor Algorithms</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#nearest-centroid-classifier">1.6.5. Nearest
                                        Centroid Classifier</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#nearest-neighbors-transformer">1.6.6. Nearest
                                        Neighbors Transformer</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neighbors.html#neighborhood-components-analysis">1.6.7.
                                        Neighborhood Components Analysis</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/gaussian_process.html">1.7.
                                Gaussian Processes</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/gaussian_process.html#gaussian-process-regression-gpr">1.7.1.
                                        Gaussian Process Regression (GPR)</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/gaussian_process.html#gpr-examples">1.7.2. GPR examples</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/gaussian_process.html#gaussian-process-classification-gpc">1.7.3.
                                        Gaussian Process Classification (GPC)</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/gaussian_process.html#gpc-examples">1.7.4. GPC examples</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/gaussian_process.html#kernels-for-gaussian-processes">1.7.5.
                                        Kernels for Gaussian Processes</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal"
                                href="modules/cross_decomposition.html">1.8. Cross decomposition</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/cross_decomposition.html#plscanonical">1.8.1. PLSCanonical</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/cross_decomposition.html#plssvd">1.8.2. PLSSVD</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/cross_decomposition.html#plsregression">1.8.3. PLSRegression</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/cross_decomposition.html#canonical-correlation-analysis">1.8.4.
                                        Canonical Correlation Analysis</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/naive_bayes.html">1.9. Naive
                                Bayes</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#gaussian-naive-bayes">1.9.1. Gaussian Naive
                                        Bayes</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#multinomial-naive-bayes">1.9.2. Multinomial Naive
                                        Bayes</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#complement-naive-bayes">1.9.3. Complement Naive
                                        Bayes</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#bernoulli-naive-bayes">1.9.4. Bernoulli Naive
                                        Bayes</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#categorical-naive-bayes">1.9.5. Categorical Naive
                                        Bayes</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/naive_bayes.html#out-of-core-naive-bayes-model-fitting">1.9.6.
                                        Out-of-core naive Bayes model fitting</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/tree.html">1.10. Decision
                                Trees</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#classification">1.10.1. Classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#regression">1.10.2. Regression</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#multi-output-problems">1.10.3. Multi-output problems</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#complexity">1.10.4. Complexity</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#tips-on-practical-use">1.10.5. Tips on practical use</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#tree-algorithms-id3-c4-5-c5-0-and-cart">1.10.6. Tree
                                        algorithms: ID3, C4.5, C5.0 and CART</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#mathematical-formulation">1.10.7. Mathematical
                                        formulation</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/tree.html#minimal-cost-complexity-pruning">1.10.8. Minimal
                                        Cost-Complexity Pruning</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/ensemble.html">1.11. Ensemble
                                methods</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#bagging-meta-estimator">1.11.1. Bagging
                                        meta-estimator</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#forests-of-randomized-trees">1.11.2. Forests of
                                        randomized trees</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#adaboost">1.11.3. AdaBoost</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#gradient-tree-boosting">1.11.4. Gradient Tree
                                        Boosting</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#histogram-based-gradient-boosting">1.11.5.
                                        Histogram-Based Gradient Boosting</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#voting-classifier">1.11.6. Voting Classifier</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#voting-regressor">1.11.7. Voting Regressor</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/ensemble.html#stacked-generalization">1.11.8. Stacked
                                        generalization</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/multiclass.html">1.12.
                                Multiclass and multioutput algorithms</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/multiclass.html#multiclass-classification">1.12.1. Multiclass
                                        classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/multiclass.html#multilabel-classification">1.12.2. Multilabel
                                        classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/multiclass.html#multiclass-multioutput-classification">1.12.3.
                                        Multiclass-multioutput classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/multiclass.html#multioutput-regression">1.12.4. Multioutput
                                        regression</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/feature_selection.html">1.13.
                                Feature selection</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#removing-features-with-low-variance">1.13.1.
                                        Removing features with low variance</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#univariate-feature-selection">1.13.2.
                                        Univariate feature selection</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#recursive-feature-elimination">1.13.3.
                                        Recursive feature elimination</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#feature-selection-using-selectfrommodel">1.13.4.
                                        Feature selection using SelectFromModel</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#sequential-feature-selection">1.13.5.
                                        Sequential Feature Selection</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/feature_selection.html#feature-selection-as-part-of-a-pipeline">1.13.6.
                                        Feature selection as part of a pipeline</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/semi_supervised.html">1.14.
                                Semi-supervised learning</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/semi_supervised.html#self-training">1.14.1. Self Training</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/semi_supervised.html#label-propagation">1.14.2. Label
                                        Propagation</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/isotonic.html">1.15. Isotonic
                                regression</a></li>
                        <li class="toctree-l1"><a class="reference internal" href="modules/calibration.html">1.16.
                                Probability calibration</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/calibration.html#calibration-curves">1.16.1. Calibration
                                        curves</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/calibration.html#calibrating-a-classifier">1.16.2. Calibrating a
                                        classifier</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/calibration.html#usage">1.16.3. Usage</a></li>
                            </ul>
                        </li>
                        <li class="toctree-l1"><a class="reference internal"
                                href="modules/neural_networks_supervised.html">1.17. Neural network models
                                (supervised)</a>
                            <ul>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#multi-layer-perceptron">1.17.1.
                                        Multi-layer Perceptron</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#classification">1.17.2.
                                        Classification</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#regression">1.17.3. Regression</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#regularization">1.17.4.
                                        Regularization</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#algorithms">1.17.5. Algorithms</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#complexity">1.17.6. Complexity</a>
                                </li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#mathematical-formulation">1.17.7.
                                        Mathematical formulation</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#tips-on-practical-use">1.17.8.
                                        Tips on Practical Use</a></li>
                                <li class="toctree-l2"><a class="reference internal"
                                        href="modules/neural_networks_supervised.html#more-control-with-warm-start">1.17.9.
                                        More control with warm_start</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
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