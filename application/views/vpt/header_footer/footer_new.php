
</div>

        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/bower_components/foundation-sites/dist/foundation.min.js"></script>
        <script src="/js/Chart.js" type="text/javascript"></script>
        <script src="/js/bootstrap-select.js"></script>
        <script src="/js/main.js"></script>
        <script type="text/javascript">
        //these options are common to all skills
        var options = {

            //prevents the text vanishing on redraw (when tooltip shows)
            showTooltips: false,

            //bit smoother with less steps
            animationSteps: 40,

            percentageInnerCutout : 80
        };

        $(document).ready(function () {

            //cycle through each skill
            $('.pct-break').each(function () {

                //get this skill's percentage
                var protein = $(this).attr('protein-pct');
                protein = parseInt(protein);
                var carb = $(this).attr('carb-pct');
                carb = parseInt(carb);
                var fat = $(this).attr('fat-pct');
                fat = parseInt(fat);

                //create a custom data set
                var data = [{
                    value: protein,
                    color: '#3599D4'
                }, {
                    value: carb,
                    color: '#C7A06B'
                }, {
                    value: fat,
                    color: '#1BAF1B'
                }];

                //now draw the chart on this skill canvas with the custom data set
                var ctx = $(this).get(0).getContext("2d");
                chart = new Chart(ctx).Doughnut(data,options);
            });

       
        });


        </script>

        <?php 
            if (isset($home)) {
                ?>
                    <script type="text/javascript">
                        var stickyNavTop = $('.stickMe').offset().top;
       
                        var stickyNav = function(){
                        var scrollTop = $(window).scrollTop();
                              
                        if (scrollTop > stickyNavTop) { 
                            $('.stickMe').addClass('-is-sticky');
                        } else {
                            $('.stickMe').removeClass('-is-sticky'); 
                        }
                        };

                        stickyNav();

                        $(window).scroll(function() {
                          stickyNav();
                        });
                    </script>
                <?php
            }
        ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>
