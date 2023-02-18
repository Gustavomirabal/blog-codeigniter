 <!-- Page Content -->
 <div class="container">

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            <?php echo $titulo;?>
            <small> - <?php echo $subtitulo;?></small>
        </h1>

        <!-- First Blog Post -->
        <?php foreach($postagens as $destaque){?>
        <h2>
            <a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo))?>">
                <?php echo $destaque->titulo;?>
            </a>
        </h2>
        <p class="lead">
            por <a href="<?php echo base_url('autor/'.$destaque->idautor.'/'.limpar($destaque->nome));?>"><?php echo $destaque->nome;?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($destaque->data);?></p>
        <hr>
        <img class="img-responsive" src="https://via.placeholder.com/900x300" alt="">
        <hr>
        <p>
            <?php echo $destaque->subtitulo;?>
        </p>
        <a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo))?>" class="btn btn-primary">Leia mais<span class="glyphicon glyphicon-chevron-right"></span></a>
        <hr>
            <?php }?>
        

    </div>