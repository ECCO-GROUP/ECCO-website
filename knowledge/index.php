<?php
    /* define page vars */
    $include_path = '../';
    $page_title = "ECCO | Frequently Asked Questions";
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
                                Automatic Differentiation (AD) is a technology for automatically augmenting computer programs, including arbitrarily complex simulations, with statements for the computation of derivatives (tangent linear, adjoint, Hessian, etc.), also known as sensitivities. AD tools in our context provide source-to-source transformation of a function, given as computer code, to generate efficient and accurate (truncation-free) code for computing first, second and higher-order derivatives of the given function.
                                <br /><br />
                                <a href="automatic-differentiation/">&rsaquo; Read more</a>
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is Adjoint Method?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br /><br />
                                <a href="adjoint-method/">&rsaquo; Read more</a>
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is Optimization?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br /><br />
                                <a href="optimization/">&rsaquo; Read more</a>
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>What is Kalman Filter and Smoother?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br /><br />
                                <a href="kalman-filter-and-smoother/">&rsaquo; Read more</a>
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                        <p>
                            <span>How to close budgets?</span>
                        </p>
                        <div class="accordion">
                            <div class="accordion-section pad-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br /><br />
                                <a href="closing-budgets/">&rsaquo; Read more</a>
                            </div><!-- //.accordion-section -->
                        </div><!-- //.accordion -->

                    </div><!-- //.faq-list-item -->
                </div><!-- //.faq-container -->
              </div><!-- //.wysiwyg_content -->
            </div><!-- //#primary_column -->
            <div id='secondary_column'>
            <?php
                include_once($include_path . 'includes/sidebar/relatedlinks.inc.php'); 
            ?>
            </div>
          </article>
        </div>
      </section>
      <!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>