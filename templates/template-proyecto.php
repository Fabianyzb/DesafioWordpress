<?php
/*
Template Name: Plantilla Proyecto
*/

get_header();
?>

<div class="container project mt-5">
  <header class="mb-4 text-center">
    <h1 class="display-4"><?php the_title(); ?></h1>
  </header>
  <main class="container project mt-5 bg-warning">
    <section class="mb-4">
      <h2 class="h3">Nombre del Proyecto</h2>
      <p><?php the_field('nombre_del_proyecto'); ?></p>
    </section>
    
    <section class="mb-4 bg-secondary">
      <h2 class="h3">Descripción del Proyecto</h2>
      <div><?php the_field('descripcion_del_proyecto'); ?></div>
    </section>
    
    <section class="mb-4">
      <h2 class="h3">Imagen del Proyecto</h2>
    
      <?php 
      $image_url = get_field('imagen_del_proyecto'); // obtiene el valor del campo personalizado "imagen_del_proyecto" creado con ACF.
      
      // Si el campo está configurado para devolver la URL, $image_url contendrá una cadena con la URL de la imagen.
      ?>
      <img src="<?php echo esc_url($image_url); ?>" alt="Imagen del Proyecto" class="img-fluid rounded mx-auto d-block">
  
    </section>

  </main>
</div>

<?php
get_footer();
?>
