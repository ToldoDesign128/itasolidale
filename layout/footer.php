<footer class="w-full bg-white p-4  flex flex-row text-left h-max mt-8 justify-evenly items-center  ">

  <?php
  /* wp_nav_menu(
    array(
      'theme_location' => 'footer',
      'container' => 'div',
      'container_class' => '',
      'menu_class' => 'flex gap-2',
    )
  ); */
  ?>

  <img class=" w-44 justify-between  " src="<?php echo get_template_directory_uri(); ?>/images/ITASolidale-ETS-payoff.png">
  <div class="w-fit justify-between    text-black text-xs font-normal font-['Halyard Display']">Piazza delle Donne Lavoratrici, 2 - 38122 Trento<br />Tel. +39 0461/891980<br />Email: itasolidale@gruppoitas.it<br />PEC: <a class="underline" href="mailto:itasolidale@pec-gruppoitas.it">itasolidale@pec-gruppoitas.it</a></div>
  <div class="w-fit justify-between    text-black text-xs font-normal font-['Halyard Display']">Codice Fiscale 96113210221<br />Privacy: <a href="/privacy">itasolidale.it/privacy</a> <br /> IBAN: T 61 Z 05018 11700 000017130675 </div>
  <div class="w-fit justify-between flex flex-row items-center justify-center">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'container' => 'div',
        'container_class' => '',
        'menu_class' => 'flex gap-2 items-center justify-center  m-10 ',
        'walker' => new Footer_Custom_Nav_Walker,
      )
    );
    ?>
  </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>