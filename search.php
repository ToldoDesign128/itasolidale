<?php get_header();?>
<main>
    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        ?>
        <div class="px-[120px] py-20 justify-start items-start gap-2.5 inline-flex">
            <h1 class="text-stone-950 text-[54.93px] font-medium font-['Halyard Display'] leading-[60.42px]">Risultati
                ricerca: " <?php echo get_query_var('s'); ?> "</h1>
        </div>
        <ul class="px-[120px] flex-col justify-start items-start gap-[13px] inline-flex">

            <?php
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>

                <li class="px-[120px] flex-col justify-start items-start gap-[13px] inline-flex">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="text-red-500  text-[28.2px]  font-['Halyard Display'] underline"><?php the_title(); ?>
                        </h2>
                        <span
                            class=" text-stone-950 text-xl font-light font-['Halyard Display']"><?php the_excerpt(); ?></span>
                    </a>
                </li>

                <?php
            }
            ?>

        </ul>

        <?php
    } else {
        ?>
        <div class="px-[120px] py-20 justify-start  gap-2.5 ">
            <h1 class=" text-stone-950 text-[54.93px] font-medium font-['Halyard Display'] leading-[60.42px]] ">Nessuna
                corrispondenza per: " <?php echo get_query_var('s'); ?> "</h1>
    </div>
    <div class="px-[120px] flex-col justify-start items-start gap-[13px] inline-flex pb-60"">
            <p class="text-stone-950 text-xl font-light font-['Halyard Display']">Ecco alcuni suggerimenti per
                migliorare la tua ricerca:</p>
            <ul class=" py-8 px-8 text-stone-950 text-xl font-light font-['Halyard Display']">
                <li class="py-1 list-disc">Verifica di aver scritto correttamente tutte le parole.</li>
                <li class="py-1 list-disc">Utilizza sinonimi o termini correlati.</li>
                <li class="py-1 list-disc">Se hai bisogno di ulteriore assistenza, non esitare a contattarci.</li>
                <li class="py-1 list-disc">Prova con termini di ricerca diversi o più generici.</li>
            </ul>
        </div>

    <?php } ?>





</main>
<?php get_footer();?>