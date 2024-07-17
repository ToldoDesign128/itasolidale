jQuery(document).ready(function () {

    // ciclo tutti i pulsanti 
    jQuery('[data-box] [role=button]').each(function () {
        // aggiungo click su ogni pulsante 
        jQuery(this).on('click', function (ev) {
            ev.preventDefault();

            // reset di tutti i box 
            jQuery('[data-box]').each(function () {
                jQuery(this).removeClass('w-10/12').addClass('w-1/12');
                var c = jQuery(this).find('[data-box-content]');
                if (c.length) {
                    c.addClass('sr-only').removeClass('opacity-100').addClass('opacity-0');
                }

                var t = jQuery(this).find('[data-box-toggler]');
                if (t.length) {
                    t.removeClass('w-[10%]').prev().removeClass('w-[10%]');
                }
            });

            // allargo il box corrente
            var box = jQuery(this).closest('[data-box]');
            if (box.length) {
                box.removeClass('w-1/12').addClass('w-10/12');

                var t = box.find('[data-box-toggler]');
                if (t.length) {
                    t.addClass('w-[10%]').prev().addClass('w-[10%]');
                }
            }

            var c = jQuery(this).find('[data-box-content]');
            if (c.length) {
                c.removeClass('sr-only').removeClass('opacity-0').addClass('opacity-100');
            }
        });
    });
});