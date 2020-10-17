function toggleSidebar() {

    let hamburger = {
        nav: document.querySelector('#nav'),
        navToggle: document.querySelector('.nav-toggle'),

        initialize() {
            this.navToggle.addEventListener('click',
                () => { this.toggle(); });
        },

        toggle() {
            this.navToggle.classList.toggle('expanded');
            this.nav.classList.toggle('expanded');
        },
    };

    hamburger.initialize();

};

/*function toggleSidebar()
{
    document.getElementById("sidebar").classList.toggle('active');
}*/

$('.js-input').keyup(function () {
    if ($(this).val()) {
        $(this).addClass('not-empty');
    } else {
        $(this).removeClass('not-empty');
    }
});

