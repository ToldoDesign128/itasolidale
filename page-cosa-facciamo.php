<?php
  /*
  *
  * Template Name: Cosa facciamo
  *
  */
?>
<?php get_template_part("layout/header"); ?>
<main>
    <h1 class="text-3xl font-bold underline hidden">
        <?php the_title() ?>
    </h1>
    <div class=" px-[120px] py-20 justify-start items-start gap-2.5 inline-flex">
        <div class=" text-stone-950 text-[28.13px] font-light font-['Halyard Display']">Per diffondere la cultura della solidarietà dentro e fuori dai confini dell’impresa facciamo leva su quattro motori progettuali, da cui partono ogni anno piccole e grandi iniziative che fanno bene a chi fa del bene</div>
    </div>
    <div class="my-2 mx-auto w-full">
        <div class="flex flex-row h-[38rem]">
            <div data-box class="flex-none w-1/12 relative overflow-hidden bg-zinc-300">
                <p class="p-3 text-center text-[22.50px] pt-10">01</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 font-normal text-[22.50px]">
                    <p>Fondo per la solidarietà</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0  absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 sr-only">
                        <h4 class="my-4 font-medium text-[54.93px]  pl-24">Fondo per la solidarietà</h4>
                        <p class="font-light px-36 text-xl">E’ un fondo alimentato ogni mese dalle donazioni volontarie e continuative di dipendenti e agenti ITAS e dalle donazioni della stessa Compagnia. Rappresenta il "salvadanaio" con cui sosteniamo ogni anno microprogetti sui territori e grandi cause di solidarietà.</p>
                    </div>
                </div>
            </div>
            <div data-box class="flex-none w-1/12 relative overflow-hidden  bg-zinc-500 text-white">
                <p class="p-3 text-center text-[22.50px] pt-10">02</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 font-normal text-[22.50px]">
                    <p>Bando “Energie di comunità”</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0  absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 sr-only">
                        <h4 class="my-4 font-medium text-[54.93px]  pl-24">Bando “Energie di comunità”</h4>
                        <p class="font-light px-36 text-xl">Il bando “Energie di Comunità”, co-finanzia al 50% progetti di comunità attraverso il network di crowdfunding di ITAS Mutua e ITASolidale ets su Produzioni dal Basso.</p>
                    </div>
                </div>
            </div>
            <div data-box class="flex-none w-1/12 relative overflow-hidden  bg-zinc-600 text-white">
                <p class="p-3 text-center  text-[22.50px] pt-10">03</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32  font-normal text-[22.50px]">
                    <p>Progetti straordinari</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0  absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 sr-only">
                        <h4 class="my-4 font-medium text-[54.93px] pl-24">Progetti straordinari</h4>
                        <p class="font-light px-36 text-xl">Sono raccolte fondi straordinarie che vengono organizzate per progetti speciali o emergenze umanitarie.</p>
                    </div>
                </div>
            </div>

            <div data-box class="flex-none w-9/12 relative overflow-hidden  bg-zinc-700 text-white">
                <p class="p-3 text-center w-[10%] text-[22.50px] pt-10">04</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 w-[10%] font-normal text-[22.50px]">
                    <p>Iniziative</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0  absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40">
                        <h4 class="my-4 font-medium text-[54.93px] pl-24">Iniziative</h4>
                        <p class="font-light px-36 text-xl">Durante l’anno organizziamo degli appuntamenti dedicati ai dipendenti e agli agenti ITAS, per favorire acquisti etici-solidali e coltivare la responsabilità sociale d’impresa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--PROGETTTI-->
    <div class="px-40">
        <h2 class="text-red-500 text-5xl font-normal mb-10 mt-28">Notizie</h2>
        <?php
        $lastYear = intval(date("Y"));
        $firstYear = $lastYear - 5;
        $year = intval(get_query_var('pyear', $lastYear));
        ?>
        <h3>Anno</h3>
        <div class="relative text-left flex items-start flex-row gap-x-5 m-6 ">
            <!--filtri-->
            <?php
            for ($i = $lastYear; $i >= $firstYear; $i--) {
            ?>
                <a href="?pyear=<?= $i ?>&pcat=<?= $cat ?>" class="<?php echo $i === $year ? "bg-red-500 text-white" : "bg-white" ?> font-extralight text-sm hover:bg-red-500 hover:text-white px-6 py-3 rounded-lg border border-stone-950 justify-start items-center inline-flex">
                    <?= $i ?>
                </a>
            <?php
            }
            ?>
        </div>

    </div>
    <div class="grid grid-cols-2 justify-between gap-10 px-28 pt-10">
        <?php
        $meta_query = [];
        $meta_query[] = array(
            'key' => 'anno',
            'value' => $year,
            'compare' => '=',
        );

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_query' => $meta_query,
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) :
            $loop->the_post();
            get_template_part('partials/card', null, [
                'time' => get_the_date(),
                'title' => get_the_title(),
                'description' => get_the_excerpt(),
                'img_src' => get_the_post_thumbnail_url(),
                'img_alt' => 'Immagine di ' . get_the_title(),
                'more_link_text' => 'Scopri di più',
                'more_link_href' => get_permalink(),
            ]);
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <?php the_content(); ?>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // ciclo tutti i pulsanti
        document.querySelectorAll('[data-box] [role=button]').forEach(function(btn) {
            // aggiungo click su ogni pulsante
            btn.addEventListener('click', function(ev) {
                ev.preventDefault();
                // reset di tutti i box 
                document.querySelectorAll('[data-box]').forEach(function(box) {
                    box.classList.remove('w-9/12');
                    box.classList.add('w-1/12');
                    var c = box.querySelector('[data-box-content]');
                    if (c) {
                        c.classList.add('sr-only');
                        c.classList.remove('opacity-100');
                        c.classList.add('opacity-0');
                    }
                    var t = box.querySelector('[data-box-toggler]');
                    if (t) {
                        t.classList.remove('w-[10%]');
                        t.previousElementSibling.classList.remove('w-[10%]');
                    }
                });
                // allargo il box corrente
                var box = btn.closest('[data-box]');
                if (box) {
                    box.classList.remove('w-1/12');
                    box.classList.add('w-9/12');
                    var t = box.querySelector('[data-box-toggler]');
                    if (t) {
                        t.classList.add('w-[10%]');
                        t.previousElementSibling.classList.add('w-[10%]');
                    }
                }
                var c = btn.querySelector('[data-box-content]');
                if (c) {
                    c.classList.remove('sr-only');
                    c.classList.remove('opacity-0');
                    c.classList.add('opacity-100');
                }
            });
        });
    });
</script>
<?php get_template_part("layout/footer"); ?>