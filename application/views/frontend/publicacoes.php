 <!-- Page Content -->
 <div class="container">

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            <?php echo $titulo;?>
            <small> - <?php 
            if($subtitulo != ''){
                echo $subtitulo;
            }else{
                foreach($subtitulodb as $dbtitulo){
                    echo $dbtitulo->titulo;
                }
            }
            
            
            ?></small>
        </h1>

        <!-- First Blog Post -->
        <?php foreach($postagens as $destaque){?>
        <h2>           
                <?php echo $destaque->titulo;?>
        </h2>
        <p class="lead">
            por <a href="<?php echo base_url('autor/'.$destaque->idautor.'/'.limpar($destaque->nome));?>"><?php echo $destaque->nome;?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo postadoem($destaque->data);?></p>
       
        <hr>
        <p>
            <i><?php echo $destaque->subtitulo;?></i>
        </p>
        <img class="img-responsive" src="https://via.placeholder.com/900x300" alt="">
        <hr>
        <p>
            <?php echo $destaque->conteudo;?>
        </p>
        <hr>
            <?php }?>
        

    </div>