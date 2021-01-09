<div id="sk-sidebar-wrapper" class="border-right">
        <div class="sk-sidebar-toc-wrapper">
            <div class="sk-sidebar-toc-logo">
                <a href="index.html">
                    <img class="sk-brand-img" src="https://scikit-learn.org/stable/_static/scikit-learn-logo-small.png"
                        alt="logo">
                </a>
            </div>            

            <div class="btn-group w-100 mb-2" role="group" aria-label="rellinks">
                <a href="user_guide.html" role="button" class="btn sk-btn-rellink py-1"
                    sk-rellink-tooltip="User Guide">Prev</a><a href="user_guide.html" role="button"
                    class="btn sk-btn-rellink py-1" sk-rellink-tooltip="User Guide">Up</a>
                <a href="modules/linear_model.html" role="button" class="btn sk-btn-rellink py-1"
                    sk-rellink-tooltip="1.1. Linear Models">Next</a>
            </div>
            <div class="alert alert-danger p-1 mb-2" role="alert">
                <p class="text-center mb-0">
                    <strong>scikit-learn 0.24.0</strong><br>
                    <a href="http://scikit-learn.org/dev/versions.html">Other versions</a>
                </p>
            </div>
            <div class="alert alert-warning p-1 mb-2" role="alert">
                <p class="text-center mb-0">
                    Please <a class="font-weight-bold" href="about.html#citing-scikit-learn">
                        <string>cite us</string>
                    </a> if you use the software.
                </p>
            </div>

            <?php
                if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('sk-sidebar-toc');
                /*
                Должны выводить список постов из определенной категории, как это сделать можно посмотреть тут
                https://youtu.be/gIDId7lej80?list=PL3LQJkGQtzc6Nwz67GGrMdqxim1c0H5DC&t=1589
                пока возникает вопрос, как выводить для определенной страницы свою категорию
                */
                 
            ?>

            <!-- <div class="sk-sidebar-toc">

                <ul>
                    <li>
                        <a href="user_guide.html" class="sk-toc-active">User Guide</a>
                    </li>
                    <ul>

                        <li>
                            <a href="" class="sk-toc-active">1. Supervised learning</a>

                            <ul>

                                <li class="sk-toctree-l3">
                                    <a href="modules/linear_model.html">1.1. Linear Models</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/lda_qda.html">1.2. Linear and Quadratic Discriminant Analysis</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/kernel_ridge.html">1.3. Kernel ridge regression</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/svm.html">1.4. Support Vector Machines</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/sgd.html">1.5. Stochastic Gradient Descent</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/neighbors.html">1.6. Nearest Neighbors</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/gaussian_process.html">1.7. Gaussian Processes</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/cross_decomposition.html">1.8. Cross decomposition</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/naive_bayes.html">1.9. Naive Bayes</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/tree.html">1.10. Decision Trees</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/ensemble.html">1.11. Ensemble methods</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/multiclass.html">1.12. Multiclass and multioutput algorithms</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/feature_selection.html">1.13. Feature selection</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/semi_supervised.html">1.14. Semi-supervised learning</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/isotonic.html">1.15. Isotonic regression</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/calibration.html">1.16. Probability calibration</a>
                                </li>

                                <li class="sk-toctree-l3">
                                    <a href="modules/neural_networks_supervised.html">1.17. Neural network models
                                        (supervised)</a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="unsupervised_learning.html" class="">2. Unsupervised learning</a>

                        </li>

                        <li>
                            <a href="model_selection.html" class="">3. Model selection and evaluation</a>

                        </li>

                        <li>
                            <a href="inspection.html" class="">4. Inspection</a>

                        </li>

                        <li>
                            <a href="visualizations.html" class="">5. Visualizations</a>

                        </li>

                        <li>
                            <a href="data_transforms.html" class="">6. Dataset transformations</a>

                        </li>

                        <li>
                            <a href="datasets.html" class="">7. Dataset loading utilities</a>

                        </li>

                        <li>
                            <a href="computing.html" class="">8. Computing with scikit-learn</a>

                        </li>

                        <li>
                            <a href="modules/model_persistence.html" class="">9. Model persistence</a>

                        </li>

                        <li>
                            <a href="common_pitfalls.html" class="">10. Common pitfalls and recommended practices</a>

                        </li>

                    </ul>
                </ul>
            </div> -->
        </div>
    </div>