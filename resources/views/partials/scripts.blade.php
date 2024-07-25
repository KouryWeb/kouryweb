<script>
    window.onload = function () {
        scrolly();
    };

    jQuery(function () {
        jQuery('.showSingle').click(function () {
            jQuery('.targetDiv').hide();
            jQuery('#div' + $(this).attr('target')).show();
        });
    });

    let header = document.getElementById("myBtns");
    let btns = header.getElementsByClassName("btn");
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            let current = document.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }

    jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
            jQuery(".paral1").css('opacity', 1 - jQuery(window).scrollTop() / 500);
        });
    });

    // Wait for the DOM to be fully loaded
    document.addEventListener("DOMContentLoaded", function () {
        // Get all the links inside the navbar
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        navLinks.forEach(function (navLink) {
            navLink.addEventListener("click", function () {
                document.getElementById("navbarNav").classList.remove("show");
            });
        });
    });
</script>
