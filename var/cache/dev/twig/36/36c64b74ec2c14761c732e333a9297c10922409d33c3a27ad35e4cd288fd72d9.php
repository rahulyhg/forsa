<?php

/* @AdminAdmin/AdminIndex.html.twig */
class __TwigTemplate_2926bac9277554520a278448387e465435b2c8035161d3493b44a8a83e225891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'notification' => array($this, 'block_notification'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/AdminIndex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/AdminIndex.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/plugins/codemirror/codemirror.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/plugins/codemirror/ambiance.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--------------rating bundle--------------->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("rating/rating.css"), "html", null, true);
        echo "\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/SidebarNav.min.css"), "html", null, true);
        echo "\" media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->

    <!-- js-->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

    <!--webfonts-->
    <link href=\"//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
    <!--//webfonts-->

    <!-- chart -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/Chart.js"), "html", null, true);
        echo "\"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/pie-chart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            \$('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            \$('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#owl-demo\").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>
<body class=\"cbp-spmenu-push\">
<div class=\"main-content\">
    <div class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left\" id=\"cbp-spmenu-s1\">
        <!--left-fixed -navigation-->
        <aside class=\"sidebar-left\">
            <nav class=\"navbar navbar-inverse\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".collapse\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"profile_details\">
                        <ul>
                            <li class=\"dropdown profile_details_drop\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"profile_img\">
                                        <span class=\"prfil-img\"> </span>
                                        <div class=\"user-name\">
                                            <p>Admin </p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class=\"fa fa-angle-down lnr\"></i>
                                        <i class=\"fa fa-angle-up lnr\"></i>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu drp-mnu\">

                                </ul>

                            </li>
                        </ul></div>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"sidebar-menu\">

                        <li class=\"header\">NAVIGATION PRINCIPALE</li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>Bons Plans</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Tous les bons plans</a></li>
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Gestion des bons plans</a></li>


                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>Evénements</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Promouvoirs</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Publicité</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Blog</a></li>
                            </ul>
                        </li>

                        <li class=\"treeview\">
                            <a href=\"\">
                                <i class=\"fa fa-edit\"></i> <span>Business</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">

                                <li> <a href=\"\"><i class=\"fa fa-angle-right\"></i> Tous les business </a></li>
                                <li> <a href=\"\"><i class=\"fa fa-angle-right\"></i> Ajouter Promotion </a></li>
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Gerer promotion </a></li>
                            </ul>
                        </li>
                       





                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </aside>
    </div>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <div >
        <div class=\"header-left\">
            <!--toggle button start-->
            <button id=\"showLeftPush\"><i class=\"fa fa-bars\"></i></button>
            ";
        // line 217
        $this->displayBlock('notification', $context, $blocks);
        // line 220
        echo "
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>


    ";
        // line 227
        $this->displayBlock('contenu', $context, $blocks);
        // line 228
        echo "
    <div class=\"footer\">

    </div>
    <!--//footer-->
</div>

<!-- new added graphs chart js-->

<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/utils.js"), "html", null, true);
        echo "\"></script>

<script>
    var MONTHS = [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"];
    var color = Chart.helpers.color;
    var barChartData = {
        labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
            borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
            borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]

    };

    window.onload = function() {
        var ctx = document.getElementById(\"canvas\").getContext(\"2d\");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        });

    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        var zero = Math.random() < 0.2 ? true : false;
        barChartData.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return zero ? 0.0 : randomScalingFactor();
            });

        });
        window.myBar.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
        var dsColor = window.chartColors[colorName];
        var newDataset = {
            label: 'Dataset ' + barChartData.datasets.length,
            backgroundColor: color(dsColor).alpha(0.5).rgbString(),
            borderColor: dsColor,
            borderWidth: 1,
            data: []
        };

        for (var index = 0; index < barChartData.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
        }

        barChartData.datasets.push(newDataset);
        window.myBar.update();
    });

    document.getElementById('addData').addEventListener('click', function() {
        if (barChartData.datasets.length > 0) {
            var month = MONTHS[barChartData.labels.length % MONTHS.length];
            barChartData.labels.push(month);

            for (var index = 0; index < barChartData.datasets.length; ++index) {
                //window.myBar.addData(randomScalingFactor(), index);
                barChartData.datasets[index].data.push(randomScalingFactor());
            }

            window.myBar.update();
        }
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        barChartData.datasets.splice(0, 1);
        window.myBar.update();
    });

    document.getElementById('removeData').addEventListener('click', function() {
        barChartData.labels.splice(-1, 1); // remove the label first

        barChartData.datasets.forEach(function(dataset, datasetIndex) {
            dataset.data.pop();
        });

        window.myBar.update();
    });
</script>
<!-- new added graphs chart js-->

<!-- Classie --><!-- for toggle left push menu script -->
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/classie.js"), "html", null, true);
        echo "\"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/scripts.js"), "html", null, true);
        echo "\"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/SidebarNav.min.js"), "html", null, true);
        echo "\" type='text/javascript'></script>
<script>
    \$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- for index page weekly sales java script -->
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/SimpleChart.js"), "html", null, true);
        echo "\"></script>
<script>
    var graphdata1 = {
        linecolor: \"#CCA300\",
        title: \"Monday\",
        values: [
            { X: \"6:00\", Y: 10.00 },
            { X: \"7:00\", Y: 20.00 },
            { X: \"8:00\", Y: 40.00 },
            { X: \"9:00\", Y: 34.00 },
            { X: \"10:00\", Y: 40.25 },
            { X: \"11:00\", Y: 28.56 },
            { X: \"12:00\", Y: 18.57 },
            { X: \"13:00\", Y: 34.00 },
            { X: \"14:00\", Y: 40.89 },
            { X: \"15:00\", Y: 12.57 },
            { X: \"16:00\", Y: 28.24 },
            { X: \"17:00\", Y: 18.00 },
            { X: \"18:00\", Y: 34.24 },
            { X: \"19:00\", Y: 40.58 },
            { X: \"20:00\", Y: 12.54 },
            { X: \"21:00\", Y: 28.00 },
            { X: \"22:00\", Y: 18.00 },
            { X: \"23:00\", Y: 34.89 },
            { X: \"0:00\", Y: 40.26 },
            { X: \"1:00\", Y: 28.89 },
            { X: \"2:00\", Y: 18.87 },
            { X: \"3:00\", Y: 34.00 },
            { X: \"4:00\", Y: 40.00 }
        ]
    };
    var graphdata2 = {
        linecolor: \"#00CC66\",
        title: \"Tuesday\",
        values: [
            { X: \"6:00\", Y: 100.00 },
            { X: \"7:00\", Y: 120.00 },
            { X: \"8:00\", Y: 140.00 },
            { X: \"9:00\", Y: 134.00 },
            { X: \"10:00\", Y: 140.25 },
            { X: \"11:00\", Y: 128.56 },
            { X: \"12:00\", Y: 118.57 },
            { X: \"13:00\", Y: 134.00 },
            { X: \"14:00\", Y: 140.89 },
            { X: \"15:00\", Y: 112.57 },
            { X: \"16:00\", Y: 128.24 },
            { X: \"17:00\", Y: 118.00 },
            { X: \"18:00\", Y: 134.24 },
            { X: \"19:00\", Y: 140.58 },
            { X: \"20:00\", Y: 112.54 },
            { X: \"21:00\", Y: 128.00 },
            { X: \"22:00\", Y: 118.00 },
            { X: \"23:00\", Y: 134.89 },
            { X: \"0:00\", Y: 140.26 },
            { X: \"1:00\", Y: 128.89 },
            { X: \"2:00\", Y: 118.87 },
            { X: \"3:00\", Y: 134.00 },
            { X: \"4:00\", Y: 180.00 }
        ]
    };
    var graphdata3 = {
        linecolor: \"#FF99CC\",
        title: \"Wednesday\",
        values: [
            { X: \"6:00\", Y: 230.00 },
            { X: \"7:00\", Y: 210.00 },
            { X: \"8:00\", Y: 214.00 },
            { X: \"9:00\", Y: 234.00 },
            { X: \"10:00\", Y: 247.25 },
            { X: \"11:00\", Y: 218.56 },
            { X: \"12:00\", Y: 268.57 },
            { X: \"13:00\", Y: 274.00 },
            { X: \"14:00\", Y: 280.89 },
            { X: \"15:00\", Y: 242.57 },
            { X: \"16:00\", Y: 298.24 },
            { X: \"17:00\", Y: 208.00 },
            { X: \"18:00\", Y: 214.24 },
            { X: \"19:00\", Y: 214.58 },
            { X: \"20:00\", Y: 211.54 },
            { X: \"21:00\", Y: 248.00 },
            { X: \"22:00\", Y: 258.00 },
            { X: \"23:00\", Y: 234.89 },
            { X: \"0:00\", Y: 210.26 },
            { X: \"1:00\", Y: 248.89 },
            { X: \"2:00\", Y: 238.87 },
            { X: \"3:00\", Y: 264.00 },
            { X: \"4:00\", Y: 270.00 }
        ]
    };
    var graphdata4 = {
        linecolor: \"Random\",
        title: \"Thursday\",
        values: [
            { X: \"6:00\", Y: 300.00 },
            { X: \"7:00\", Y: 410.98 },
            { X: \"8:00\", Y: 310.00 },
            { X: \"9:00\", Y: 314.00 },
            { X: \"10:00\", Y: 310.25 },
            { X: \"11:00\", Y: 318.56 },
            { X: \"12:00\", Y: 318.57 },
            { X: \"13:00\", Y: 314.00 },
            { X: \"14:00\", Y: 310.89 },
            { X: \"15:00\", Y: 512.57 },
            { X: \"16:00\", Y: 318.24 },
            { X: \"17:00\", Y: 318.00 },
            { X: \"18:00\", Y: 314.24 },
            { X: \"19:00\", Y: 310.58 },
            { X: \"20:00\", Y: 312.54 },
            { X: \"21:00\", Y: 318.00 },
            { X: \"22:00\", Y: 318.00 },
            { X: \"23:00\", Y: 314.89 },
            { X: \"0:00\", Y: 310.26 },
            { X: \"1:00\", Y: 318.89 },
            { X: \"2:00\", Y: 518.87 },
            { X: \"3:00\", Y: 314.00 },
            { X: \"4:00\", Y: 310.00 }
        ]
    };
    var Piedata = {
        linecolor: \"Random\",
        title: \"Profit\",
        values: [
            { X: \"Monday\", Y: 50.00 },
            { X: \"Tuesday\", Y: 110.98 },
            { X: \"Wednesday\", Y: 70.00 },
            { X: \"Thursday\", Y: 204.00 },
            { X: \"Friday\", Y: 80.25 },
            { X: \"Saturday\", Y: 38.56 },
            { X: \"Sunday\", Y: 98.57 }
        ]
    };
    \$(function () {
        \$(\"#Bargraph\").SimpleChart({
            ChartType: \"Bar\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#sltchartype\").on('change', function () {
            \$(\"#Bargraph\").SimpleChart('ChartType', \$(this).val());
            \$(\"#Bargraph\").SimpleChart('reload', 'true');
        });
        \$(\"#Hybridgraph\").SimpleChart({
            ChartType: \"Hybrid\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Linegraph\").SimpleChart({
            ChartType: \"Line\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: false,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Areagraph\").SimpleChart({
            ChartType: \"Area\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Scatterredgraph\").SimpleChart({
            ChartType: \"Scattered\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Piegraph\").SimpleChart({
            ChartType: \"Pie\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            showpielables: true,
            data: [Piedata],
            legendsize: \"250\",
            legendposition: 'right',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });

        \$(\"#Stackedbargraph\").SimpleChart({
            ChartType: \"Stacked\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });

        \$(\"#StackedHybridbargraph\").SimpleChart({
            ChartType: \"StackedHybrid\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
    });

</script>
<!-- //for index page weekly sales java script -->


<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 217
    public function block_notification($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notification"));

        // line 218
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/AdminIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 227,  789 => 218,  780 => 217,  765 => 652,  504 => 394,  494 => 387,  487 => 383,  483 => 382,  457 => 359,  333 => 238,  329 => 237,  318 => 228,  316 => 227,  307 => 220,  305 => 217,  190 => 105,  186 => 104,  142 => 63,  130 => 54,  126 => 53,  122 => 52,  115 => 48,  105 => 41,  101 => 40,  94 => 36,  87 => 32,  81 => 29,  75 => 26,  68 => 22,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <title>Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


    <link href=\"{{ asset('Template/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Template/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Template/css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Template/css/plugins/codemirror/codemirror.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Template/css/plugins/codemirror/ambiance.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Template/css/style.css') }}\" rel=\"stylesheet\">
    <!--------------rating bundle--------------->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('rating/rating.css') }}\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('admin/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href=\"{{ asset('admin/css/style.css') }}\" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href=\"{{ asset('admin/css/font-awesome.css') }}\" rel=\"stylesheet\">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href=\"{{ asset('admin/css/SidebarNav.min.css') }}\" media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->

    <!-- js-->
    <script src=\"{{ asset('admin/js/jquery-1.11.1.min.js') }}\"></script>
    <script src=\"{{ asset('admin/js/modernizr.custom.js') }}\"></script>

    <!--webfonts-->
    <link href=\"//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
    <!--//webfonts-->

    <!-- chart -->
    <script src=\"{{ asset('admin/js/Chart.js') }}\"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src=\"{{ asset('admin/js/metisMenu.min.js') }}\"></script>
    <script src=\"{{ asset('admin/js/custom.js') }}\"></script>
    <link href=\"{{ asset('admin/css/custom.css') }}\" rel=\"stylesheet\">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src=\"{{ asset('admin/js/pie-chart.js') }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            \$('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            \$('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            \$('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    \$(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href=\"{{ asset('admin/css/owl.carousel.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('admin/js/owl.carousel.js') }}\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#owl-demo\").owlCarousel({
                items : 3,
                lazyLoad : true,
                autoPlay : true,
                pagination : true,
                nav:true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>
<body class=\"cbp-spmenu-push\">
<div class=\"main-content\">
    <div class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left\" id=\"cbp-spmenu-s1\">
        <!--left-fixed -navigation-->
        <aside class=\"sidebar-left\">
            <nav class=\"navbar navbar-inverse\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".collapse\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <div class=\"profile_details\">
                        <ul>
                            <li class=\"dropdown profile_details_drop\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"profile_img\">
                                        <span class=\"prfil-img\"> </span>
                                        <div class=\"user-name\">
                                            <p>Admin </p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class=\"fa fa-angle-down lnr\"></i>
                                        <i class=\"fa fa-angle-up lnr\"></i>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu drp-mnu\">

                                </ul>

                            </li>
                        </ul></div>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"sidebar-menu\">

                        <li class=\"header\">NAVIGATION PRINCIPALE</li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>Bons Plans</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Tous les bons plans</a></li>
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Gestion des bons plans</a></li>


                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>Evénements</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Promouvoirs</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Publicité</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Blog</a></li>
                            </ul>
                        </li>

                        <li class=\"treeview\">
                            <a href=\"\">
                                <i class=\"fa fa-edit\"></i> <span>Business</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">

                                <li> <a href=\"\"><i class=\"fa fa-angle-right\"></i> Tous les business </a></li>
                                <li> <a href=\"\"><i class=\"fa fa-angle-right\"></i> Ajouter Promotion </a></li>
                                <li><a href=\"\"><i class=\"fa fa-angle-right\"></i> Gerer promotion </a></li>
                            </ul>
                        </li>
                       





                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </aside>
    </div>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <div >
        <div class=\"header-left\">
            <!--toggle button start-->
            <button id=\"showLeftPush\"><i class=\"fa fa-bars\"></i></button>
            {% block notification %}

            {% endblock %}

            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>


    {% block contenu %}{% endblock %}

    <div class=\"footer\">

    </div>
    <!--//footer-->
</div>

<!-- new added graphs chart js-->

<script src=\"{{ asset('admin/js/Chart.bundle.js') }}\"></script>
<script src=\"{{ asset('admin/js/utils.js') }}\"></script>

<script>
    var MONTHS = [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"];
    var color = Chart.helpers.color;
    var barChartData = {
        labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
            borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
            borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]

    };

    window.onload = function() {
        var ctx = document.getElementById(\"canvas\").getContext(\"2d\");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        });

    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        var zero = Math.random() < 0.2 ? true : false;
        barChartData.datasets.forEach(function(dataset) {
            dataset.data = dataset.data.map(function() {
                return zero ? 0.0 : randomScalingFactor();
            });

        });
        window.myBar.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
        var dsColor = window.chartColors[colorName];
        var newDataset = {
            label: 'Dataset ' + barChartData.datasets.length,
            backgroundColor: color(dsColor).alpha(0.5).rgbString(),
            borderColor: dsColor,
            borderWidth: 1,
            data: []
        };

        for (var index = 0; index < barChartData.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
        }

        barChartData.datasets.push(newDataset);
        window.myBar.update();
    });

    document.getElementById('addData').addEventListener('click', function() {
        if (barChartData.datasets.length > 0) {
            var month = MONTHS[barChartData.labels.length % MONTHS.length];
            barChartData.labels.push(month);

            for (var index = 0; index < barChartData.datasets.length; ++index) {
                //window.myBar.addData(randomScalingFactor(), index);
                barChartData.datasets[index].data.push(randomScalingFactor());
            }

            window.myBar.update();
        }
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        barChartData.datasets.splice(0, 1);
        window.myBar.update();
    });

    document.getElementById('removeData').addEventListener('click', function() {
        barChartData.labels.splice(-1, 1); // remove the label first

        barChartData.datasets.forEach(function(dataset, datasetIndex) {
            dataset.data.pop();
        });

        window.myBar.update();
    });
</script>
<!-- new added graphs chart js-->

<!-- Classie --><!-- for toggle left push menu script -->
<script src=\"{{ asset('admin/js/classie.js') }}\"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src=\"{{ asset('admin/js/jquery.nicescroll.js') }}\"></script>
<script src=\"{{ asset('admin/js/scripts.js') }}\"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src=\"{{ asset('admin/js/SidebarNav.min.js') }}\" type='text/javascript'></script>
<script>
    \$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- for index page weekly sales java script -->
<script src=\"{{ asset('admin/js/SimpleChart.js') }}\"></script>
<script>
    var graphdata1 = {
        linecolor: \"#CCA300\",
        title: \"Monday\",
        values: [
            { X: \"6:00\", Y: 10.00 },
            { X: \"7:00\", Y: 20.00 },
            { X: \"8:00\", Y: 40.00 },
            { X: \"9:00\", Y: 34.00 },
            { X: \"10:00\", Y: 40.25 },
            { X: \"11:00\", Y: 28.56 },
            { X: \"12:00\", Y: 18.57 },
            { X: \"13:00\", Y: 34.00 },
            { X: \"14:00\", Y: 40.89 },
            { X: \"15:00\", Y: 12.57 },
            { X: \"16:00\", Y: 28.24 },
            { X: \"17:00\", Y: 18.00 },
            { X: \"18:00\", Y: 34.24 },
            { X: \"19:00\", Y: 40.58 },
            { X: \"20:00\", Y: 12.54 },
            { X: \"21:00\", Y: 28.00 },
            { X: \"22:00\", Y: 18.00 },
            { X: \"23:00\", Y: 34.89 },
            { X: \"0:00\", Y: 40.26 },
            { X: \"1:00\", Y: 28.89 },
            { X: \"2:00\", Y: 18.87 },
            { X: \"3:00\", Y: 34.00 },
            { X: \"4:00\", Y: 40.00 }
        ]
    };
    var graphdata2 = {
        linecolor: \"#00CC66\",
        title: \"Tuesday\",
        values: [
            { X: \"6:00\", Y: 100.00 },
            { X: \"7:00\", Y: 120.00 },
            { X: \"8:00\", Y: 140.00 },
            { X: \"9:00\", Y: 134.00 },
            { X: \"10:00\", Y: 140.25 },
            { X: \"11:00\", Y: 128.56 },
            { X: \"12:00\", Y: 118.57 },
            { X: \"13:00\", Y: 134.00 },
            { X: \"14:00\", Y: 140.89 },
            { X: \"15:00\", Y: 112.57 },
            { X: \"16:00\", Y: 128.24 },
            { X: \"17:00\", Y: 118.00 },
            { X: \"18:00\", Y: 134.24 },
            { X: \"19:00\", Y: 140.58 },
            { X: \"20:00\", Y: 112.54 },
            { X: \"21:00\", Y: 128.00 },
            { X: \"22:00\", Y: 118.00 },
            { X: \"23:00\", Y: 134.89 },
            { X: \"0:00\", Y: 140.26 },
            { X: \"1:00\", Y: 128.89 },
            { X: \"2:00\", Y: 118.87 },
            { X: \"3:00\", Y: 134.00 },
            { X: \"4:00\", Y: 180.00 }
        ]
    };
    var graphdata3 = {
        linecolor: \"#FF99CC\",
        title: \"Wednesday\",
        values: [
            { X: \"6:00\", Y: 230.00 },
            { X: \"7:00\", Y: 210.00 },
            { X: \"8:00\", Y: 214.00 },
            { X: \"9:00\", Y: 234.00 },
            { X: \"10:00\", Y: 247.25 },
            { X: \"11:00\", Y: 218.56 },
            { X: \"12:00\", Y: 268.57 },
            { X: \"13:00\", Y: 274.00 },
            { X: \"14:00\", Y: 280.89 },
            { X: \"15:00\", Y: 242.57 },
            { X: \"16:00\", Y: 298.24 },
            { X: \"17:00\", Y: 208.00 },
            { X: \"18:00\", Y: 214.24 },
            { X: \"19:00\", Y: 214.58 },
            { X: \"20:00\", Y: 211.54 },
            { X: \"21:00\", Y: 248.00 },
            { X: \"22:00\", Y: 258.00 },
            { X: \"23:00\", Y: 234.89 },
            { X: \"0:00\", Y: 210.26 },
            { X: \"1:00\", Y: 248.89 },
            { X: \"2:00\", Y: 238.87 },
            { X: \"3:00\", Y: 264.00 },
            { X: \"4:00\", Y: 270.00 }
        ]
    };
    var graphdata4 = {
        linecolor: \"Random\",
        title: \"Thursday\",
        values: [
            { X: \"6:00\", Y: 300.00 },
            { X: \"7:00\", Y: 410.98 },
            { X: \"8:00\", Y: 310.00 },
            { X: \"9:00\", Y: 314.00 },
            { X: \"10:00\", Y: 310.25 },
            { X: \"11:00\", Y: 318.56 },
            { X: \"12:00\", Y: 318.57 },
            { X: \"13:00\", Y: 314.00 },
            { X: \"14:00\", Y: 310.89 },
            { X: \"15:00\", Y: 512.57 },
            { X: \"16:00\", Y: 318.24 },
            { X: \"17:00\", Y: 318.00 },
            { X: \"18:00\", Y: 314.24 },
            { X: \"19:00\", Y: 310.58 },
            { X: \"20:00\", Y: 312.54 },
            { X: \"21:00\", Y: 318.00 },
            { X: \"22:00\", Y: 318.00 },
            { X: \"23:00\", Y: 314.89 },
            { X: \"0:00\", Y: 310.26 },
            { X: \"1:00\", Y: 318.89 },
            { X: \"2:00\", Y: 518.87 },
            { X: \"3:00\", Y: 314.00 },
            { X: \"4:00\", Y: 310.00 }
        ]
    };
    var Piedata = {
        linecolor: \"Random\",
        title: \"Profit\",
        values: [
            { X: \"Monday\", Y: 50.00 },
            { X: \"Tuesday\", Y: 110.98 },
            { X: \"Wednesday\", Y: 70.00 },
            { X: \"Thursday\", Y: 204.00 },
            { X: \"Friday\", Y: 80.25 },
            { X: \"Saturday\", Y: 38.56 },
            { X: \"Sunday\", Y: 98.57 }
        ]
    };
    \$(function () {
        \$(\"#Bargraph\").SimpleChart({
            ChartType: \"Bar\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#sltchartype\").on('change', function () {
            \$(\"#Bargraph\").SimpleChart('ChartType', \$(this).val());
            \$(\"#Bargraph\").SimpleChart('reload', 'true');
        });
        \$(\"#Hybridgraph\").SimpleChart({
            ChartType: \"Hybrid\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Linegraph\").SimpleChart({
            ChartType: \"Line\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: false,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Areagraph\").SimpleChart({
            ChartType: \"Area\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Scatterredgraph\").SimpleChart({
            ChartType: \"Scattered\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata4, graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
        \$(\"#Piegraph\").SimpleChart({
            ChartType: \"Pie\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            showpielables: true,
            data: [Piedata],
            legendsize: \"250\",
            legendposition: 'right',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });

        \$(\"#Stackedbargraph\").SimpleChart({
            ChartType: \"Stacked\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });

        \$(\"#StackedHybridbargraph\").SimpleChart({
            ChartType: \"StackedHybrid\",
            toolwidth: \"50\",
            toolheight: \"25\",
            axiscolor: \"#E6E6E6\",
            textcolor: \"#6E6E6E\",
            showlegends: true,
            data: [graphdata3, graphdata2, graphdata1],
            legendsize: \"140\",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in \$'
        });
    });

</script>
<!-- //for index page weekly sales java script -->


<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('admin/js/bootstrap.js') }}\"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>
</html>", "@AdminAdmin/AdminIndex.html.twig", "/opt/lampp/htdocs/forsaproject/src/Admin/AdminBundle/Resources/views/AdminIndex.html.twig");
    }
}
