<?php

define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bootstrap 3 Fluid Layout Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Altran Ex1</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" target="_blank">Home</a></li>
                <li><a href="#" target="_blank">About</a></li>
                <li><a href="#" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">







<table>
    <tr>
        <td width='40%' valign=top>
            <h2>CLIENTES CADASTRADOS</h2>
            
            <?php
                $args = array('post_type' => 'cliente');
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
            ?>

            <h5><?php the_title(); ?></a></h5>
            <ul>
                <li><strong>Nome:</strong> 
                    <?php echo(types_render_field( "nome", array( 'raw' => true) )); ?></li>
                <li><strong>Email:</strong> 
                    <?php echo(types_render_field( "email", array( 'raw' => true) )); ?></li>
                    <li><strong>Telefone:</strong> 
                    <?php echo(types_render_field( "telefone", array( 'raw' => true) )); ?></li>
            </ul>

            <?php endwhile; ?>

        </td>
        <td width='10%'></td>
        <td width='40%' valign=top>
		<H2>PRODUTOS CADASTRADOS</h2>
            
		
            <?php
                $args = array('post_type' => 'produto');
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
            ?>

            <h5><?php the_title(); ?></a></h5>
            <ul>
                <li><strong>Nome:</strong> 
                    <?php echo(types_render_field( "nome-produto", array( 'raw' => true) )); ?></li>
                <li><strong>Descrição:</strong> 
                    <?php echo(types_render_field( "descricao", array( 'raw' => true) )); ?></li>
                    <li><strong>Preço:</strong> 
                    <?php echo(types_render_field( "preco", array( 'raw' => true) )); ?></li>
            </ul>

            <?php endwhile; ?>

        </td>
    </tr>
    <tr>
        <td width='100%' colspan=3 	>
            <h2>PEDIDOS CADASTRADOS</H2>
			<?php
                $args = array('post_type' => 'pedido');
                $query = new WP_Query($args);
                while($query -> have_posts()) : $query -> the_post();
            ?>

            <h5><?php the_title(); ?></a></h5>
            <ul>
                <li><strong>Cliente:</strong> 
                    <?php echo(types_render_field( "nome-do-cliente", array( 'raw' => true) )); ?></li>
                <li><strong>Produto:</strong> 
                    <?php echo(types_render_field( "nome-do-produto", array( 'raw' => true) )); ?></li>

            </ul>

            <?php endwhile; ?>

        </td>
	</tr>
</table>










    
</div>
</body>
</html>                                		


