

<!-- Aci definim la barra lateral, 
	Si aquesta està activada per  l'usuari (is_active_Sidebar)
	la mostra al tema, allà on s'invoque a get_sidebar()

	HTML5 ens proporciona l'etiqueta aside per a barres laterals
	En esta etiquerta establim les classes de barra lateral principal i l'àrea de widgets.

	La funció de wordpress dynamic_sidebar("sidebar") mostra els wirdgets
	de la barra lateral en aquest punt

 -->
 
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area col-md-3" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>
