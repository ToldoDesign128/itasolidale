<script>
    document.addEventListener("DOMContentLoaded", function () {
        // ciclo tutti i pulsanti
        document.querySelectorAll('[data-box] [role=button]').forEach(function (btn) {
            // aggiungo click su ogni pulsante
            btn.addEventListener('click', function (ev) {
                ev.preventDefault();
                // reset di tutti i box 
                document.querySelectorAll('[data-box]').forEach(function (box) {
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
    }); </script>