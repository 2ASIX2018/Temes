<?php 
get_header();
?>


<section class="container">
<article class="col-md-9" style="float:left; margin-top:50px;">

<?php 
    // Carreguem el contingut del post, que es troba a
    // la variable global $post.
    global $post;

    // De moment, $post només contindrà informació sobre el post que s'està visualitzat, 
    // però podría ser, per exemple el resultat d'una consulta a la base
    // de dades i contindre més d'un post.


    // A continguació, tenim una de les característiques més
    // conegudes, que és el  "loop de Wordpress", i que ens
    // permetrà recórrer tots els elements que complisquen
    // certes condicions. 
    // Per a això fem ús de la funció de WP have_posts(), que ens diu
    // si la variable $post conté algun entrada. Si sí que a conté,
    // iniciarem un bucle de tipus while per recórrer totes les entrades.
    if (have_posts()) { 
        while (have_posts()) {
            // La funció the_post dins el bucle de wordpress, 
            // recupera el següent post, i estableix aquest com a
            // "post actual", A més, estableix a certa la propietat
            // "in the loop", per indicar aque està dins el bucle de wordpress.
            the_post(); 
            ?>


            <div class="col-md-6">
            <!-- 
                Les funcions de WP the_title i the_content, ens retornen el 
                títol i el contingut del "post actual".
            -->
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

            </div>
            <?php
            
            // Amb aquestes línies, incloem la plantilla per mostrar
            // els comentaris, sempre que aquesta opció estiga
            // habilitada en wordpress i tinga comentaris.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        }//endwhile;
    
    } //endif;
    ?>
    
            
    </article>
</section>
<?php get_footer(); ?>