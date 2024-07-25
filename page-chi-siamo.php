<?php get_template_part("layout/header"); ?>
<main>
    <h1 class="text-3xl font-bold underline hidden">
        <?php the_title() ?>
    </h1>
    <?php the_content(); ?>
    <div class="my-2 mx-auto w-full">
        <div class="flex flex-row h-[38rem]">
            <div data-box class="flex-none w-1/12 relative overflow-hidden bg-zinc-300">
                <p class="p-3 text-center text-[22.50px] pt-10">01</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 font-normal text-[22.50px]">
                    <p>Comitato per la Solidarietà dei Dipendenti ITAS</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0 absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 sr-only opacity-0">
                        <h4 class="my-4 font-medium text-[54.93px] pl-24">Comitato per la Solidarietà dei Dipendenti ITAS</h4>
                        <p class="font-light px-36 text-xl">Il comitato rappresenta i dipendenti ITAS all’interno di
                            ITASolidale e permette loro di sostenere e partecipare attivamente alla vita
                            dell’associazione. Il comitato si occupa anche di promuovere la libera raccolta fondi di
                            tutti i dipendeti ITAS tramite trattenuta stipendiale.</p>
                    </div>
                </div>
            </div>
            <div data-box class="flex-none w-1/12 relative overflow-hidden bg-zinc-500 text-white">
                <p class="p-3 text-center text-[22.50px] pt-10">02</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 font-normal text-[22.50px]">
                    <p>ITAS Mutua</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0 absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 sr-only opacity-0">
                        <h4 class="my-4 font-medium text-[54.93px] pl-24">ITAS Mutua</h4>
                        <p class="font-light px-36 text-xl">ITAS è la più antica assicurazione italiana, nata nel 1821
                            in forma di Mutua. Ogni giorno, ITAS si impegna ad intercettare le esigenze di protezione e
                            sicurezza delle persone e dei territori in cui opera, offrendo soluzioni assicurative e
                            servizi all’avanguardia senza mai trascurare la missione etica e sociale con cui è nata.</p>
                        <a href="http://gruppoitas.it/" target="_blank" class="w-fit h-[49px] px-6 py-3 mx-36 my-12 bg-white rounded-lg justify-center items-center gap-3 inline-flex">
                            <p href="http://gruppoitas.it/" target="_blank" class="text-center text-zinc-500 text-lg font-medium">Scopri di più</p>
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M17.92 12.1202C17.8724 11.9974 17.801 11.8853 17.71 11.7902L12.71 6.79019C12.6168 6.69695 12.5061 6.62299 12.3842 6.57253C12.2624 6.52207 12.1319 6.49609 12 6.49609C11.7337 6.49609 11.4783 6.60188 11.29 6.79019C11.1968 6.88342 11.1228 6.99411 11.0723 7.11594C11.0219 7.23776 10.9959 7.36833 10.9959 7.50019C10.9959 7.76649 11.1017 8.02188 11.29 8.21019L14.59 11.5002H7C6.73478 11.5002 6.48043 11.6055 6.29289 11.7931C6.10536 11.9806 6 12.235 6 12.5002C6 12.7654 6.10536 13.0198 6.29289 13.2073C6.48043 13.3948 6.73478 13.5002 7 13.5002H14.59L11.29 16.7902C11.1963 16.8831 11.1219 16.9937 11.0711 17.1156C11.0203 17.2375 10.9942 17.3682 10.9942 17.5002C10.9942 17.6322 11.0203 17.7629 11.0711 17.8848C11.1219 18.0066 11.1963 18.1172 11.29 18.2102C11.383 18.3039 11.4936 18.3783 11.6154 18.4291C11.7373 18.4798 11.868 18.506 12 18.506C12.132 18.506 12.2627 18.4798 12.3846 18.4291C12.5064 18.3783 12.617 18.3039 12.71 18.2102L17.71 13.2102C17.801 13.1151 17.8724 13.0029 17.92 12.8802C18.02 12.6367 18.02 12.3636 17.92 12.1202Z" fill="#858585" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div data-box class="flex-none w-10/12 relative overflow-hidden bg-zinc-600 text-white">
                <p class="p-3 text-center w-[10%] text-[22.50px] pt-10">03</p>
                <div data-box-toggler class="flex items-center align-center whitespace-nowrap absolute h-full left-0 right-0 -rotate-90 origin-center mt-32 w-[10%] font-normal text-[22.50px]">
                    <p>Associazione gruppo agenti ITAS</p>
                </div>
                <div role="button" class="top-0 bottom-0 left-0 right-0 absolute">
                    <div data-box-content class="text-left m-auto w-2/3 mt-40 ">
                        <h4 class="my-4 font-medium text-[54.93px] pl-24">Associazione gruppo agenti ITAS</h4>
                        <p class="font-light px-36 text-xl">L’Associazione Gruppo Agenti ITAS nasce intorno ai primi
                            anni ‘50, non ha fini di lucro e persegue l’obiettivo di tutelare gli interessi
                            collettivi
                            ed individuali dei propri Agenti associati. Le agenzie associate, inoltre, rappresentano
                            da
                            decenni un segno tangibile della Mutua sui territori attraverso il supporto, il
                            sostegno, la
                            vicinanza ai propri soci assicurati.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // ciclo tutti i pulsanti
            document.querySelectorAll('[data-box] [role=button]').forEach(function(btn) {
                // aggiungo click su ogni pulsante
                btn.addEventListener('click', function(ev) {
                    ev.preventDefault();
                    // reset di tutti i box 
                    document.querySelectorAll('[data-box]').forEach(function(box) {
                        box.classList.remove('w-10/12');
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
                        box.classList.add('w-10/12');
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
</main>
<?php get_template_part("layout/footer"); ?>