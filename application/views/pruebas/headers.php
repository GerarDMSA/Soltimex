<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soltimex</title>
    <!-- jQuery -->
    <script src="<?php echo base_url("assets/js/jquery-3.1.1.js");  ?> " /></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?> " /></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?> "  rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/css/modern-business.css"); ?> " rel="stylesheet"/>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url("assets/js/scripts.js") ?>" /></script>
<a href="<?php echo base_url("http://bootsnipp.com/mouse0270/snippets/4l0k2"); ?> " class="btn btn-danger hide" id="back-to-bootsnipp">Back to Bootsnipp</a>
<script src="<?php echo base_url("assets/js/scriptslist.js"); ?>" /></script>
<link href="<?php echo base_url("assets/css/estilos.css"); ?> "  rel="stylesheet">
    


</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url("/index.php/Cursos")?> ">Soltimex</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="div-about" href="<?php echo base_url("/index.php/Cursos/clientes"); ?> ">Clientes</a>
                    </li>
                    <li>
                        <a id="div-vendedores" href="<?php echo base_url("/index.php/Cursos/vendedores"); ?> ">Vendedores</a>
                    </li>
                    <li>
                        <a id="div-contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="div-portfolio-1-col">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a id="div-portfolio-2-col">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a id="div-portfolio-3-col">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a id="div-portfolio-4-col">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a id="div-portfolio-item">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="div-blog-home-1">Blog Home 1</a>
                            </li>
                            <li>
                                <a id="div-blog-home-2">Blog Home 2</a>
                            </li>
                            <li>
                                <a id="div-blog-post">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="div-full-width">Full Width Page</a>
                            </li>
                            <li>
                                <a id="div-sidebar">Sidebar Page</a>
                            </li>
                            <li>
                                <a id="div-faq">FAQ</a>
                            </li>
                            <li>
                                <a id="div-404">404</a>
                            </li>
                            <li>
                                <a id="div-pricing">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="div-results"></div>