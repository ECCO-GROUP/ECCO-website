<?php
    /* define page vars */
    $include_path = '../../';
    $page_title = "ECCO | FAQs";
    $page_id = 'faq';
    $theme = 'light_background'; //dark_background || light_background
    $include_other = "";
    include_once($include_path . 'includes/header.inc.php');
?>
      <!-- START CONTENT -->
      <script type="text/javascript">
        $(function(){
            // accordion
            var faqShowID;
            $(".faq-list-item p").on("click", function(event){
                event.preventDefault();
                event.stopPropagation();
                $(this).toggleClass("faq-selected");
                $(this).next(".accordion").stop().slideToggle();
            });
        });
      </script>   
      <div class='header_mask'></div>

      <section class='content_page module'>
        <div class='grid_layout'>
          <article>
            <header id='page_header'>
              <h1 class='article_title'>Frequently Asked Questions</h1>
            </header>
            <div class='clearfix' id='primary_column'>
              <div class='wysiwyg_content'>

                <div class="faq-container text-l">
                    <div class="faq-list-item">
                        <p>
                            <span>What is Automatic Differentiation?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Automatic Differentiation (AD) is a technology for automatically augmenting computer programs, including arbitrarily complex simulations, with statements for the computation of derivatives (tangent linear, adjoint, Hessian, etc.), also known as sensitivities. In ECCO, the adjoint model is obtained by an AD tool. AD tools in our context provide source-to-source transformation of a function, given as computer code, to generate efficient and accurate (truncation-free) code for computing first, second and higher-order derivatives of the given function.
                                <!-- <br /><br /><a href="automatic-differentiation/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is Adjoint Method?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Adjoint method is an algorithmic technique to solve a constrained
                                optimization problem. The adjoint of the constraint (e.g., model) provides a
                                computationally efficient means to evaluate the gradient (sensitivity)
                                of what is being optimized, such as model-data differences, with
                                respect to the problem's independent variables (controls). To solve
                                the problem, the adjoint method uses this information in
                                gradient-based optimization algorithms (e.g., steepest descent,
                                quasi-Newton, conjugate gradient methods). 4dvar (4-dimensional
                                variational method) is synonymous with adjoint method."
                                <!--<br /><br /><a href="adjoint-method/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What are Kalman Filter and RTS Smoother?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Filters and smoothers are sequential techniques to correct models with
                                observations. They are "sequential" as the correction takes place
                                sequentially in time; e.g., model state at time "n" is corrected,
                                followed by that at time "n+1". Filters correct models using
                                observations formally in the past; smoothers use observations both
                                formally in the future as well as the past. A Kalman filter and
                                Rauch-Tung-Striebel (RTS) smoother are particular forms of these
                                recursive least-squares estimators.
                                <!--<br /><br /><a href="optimization/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is State Estimation?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                State estimation is an act of inferring the state of a dynamic system
                                from observations of that system. State estimation belongs to the
                                field of estimation and control theories, well-established
                                mathematical subjects with roots in engineering applications (e.g.,
                                ballistics).
                                <!--<br /><br /><a href="kalman-filter-and-smoother/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is Data Assimilation?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Data assimilation is a process of correcting dynamical models with
                                observations. Data assimilation has roots in numerical weather
                                forecasting; viz., the process of using observations to initialize
                                numerical weather models for forecasting. As such, data assimilation
                                is largely a filtering problem.
                                <!--<br /><br /><a href="closing-budgets/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->
                        
                         <p>
                            <span>What are issues with Closing Budgets?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Filtered solutions do not satisfy model constraints due to the
                                filters' corrections using data. These constraints include
                                conservation laws embodied in models. As such, filtered property
                                budgets cannot be closed in terms of processes that the models
                                resolve, making causal mechanisms underlying filtered solutions
                                difficult to ascertain.
                                <br /><br />
                                Smoothed solutions, in comparison, generally do satisfy model
                                constraints as they include estimates of model error sources consistent
                                with corrections to the state. Among ECCO products, those using either the adjoint method or
   the RTS smoother are such smoothed solutions that allow budget closures.
                                <!--<br /><br /><a href="kalman-filter-and-smoother/">&rsaquo; Read more</a>-->
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                    </div><!-- //.faq-list-item -->
                </div><!-- //.faq-container -->
              </div><!-- //.wysiwyg_content -->
            </div><!-- //#primary_column -->
            <div id='secondary_column'>
            <?php /*
            <?php
                include_once($include_path . 'includes/sidebar/relatedlinks.inc.php'); 
            ?>
            */ ?>
            </div>
          </article>
        </div>
      </section>
      <!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
