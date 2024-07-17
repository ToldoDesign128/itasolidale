<?php get_header(); ?>
<main>

  <h1 class="text-3xl font-bold underline hidden">
    <?php the_title() ?>
  </h1>

  <!-- <?php echo do_shortcode('[contact-form-7 id="994a47e" title="Form Donazioni"]'); ?> -->

  <?php the_content(); ?>

  <script>
    function copiaIban() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");
    }
  </script>
</main>
<?php get_footer(); ?>