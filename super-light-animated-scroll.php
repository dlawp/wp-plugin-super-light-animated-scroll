<?php
/**
* Plugin Name: Super Light Animated Scroll to id
* Description: Super light and easy to setup links that scroll the page smoothly to any id within the document.
* Version: 0.2.1
* Author: DlaWP.pl <support@dlaWP.pl>
* Author URI: https://dlawp.pl/plugins
**/



// make sure to include jQuery lib from WordPress core
function super_light_animated_include_jquery()
{
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'super_light_animated_include_jquery');



// include script as HTML tag in footer, so we don't have to load another script file
add_action('wp_footer', 'super_light_animated_scroll');

function super_light_animated_scroll()
{
    ?>
    <script type="text/javascript">
        function hookLinkClassesToScroll($) {
            $("a.sl-animated-scroll, .sl-animated-scroll a").on("click", function (e) {
                var targetId = $(this).prop("hash");
                if (targetId.charAt(0) != "#") {
                    targetId = "#" + targetId;
                }

                if ($(targetId) && $(targetId).offset()) {
                    e.preventDefault();

                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(targetId).offset().top
                    }, 500);
                }
            });
        }

        if (jQuery) {
            jQuery(document).ready(function ($) {
                hookLinkClassesToScroll($);
            })
        } else if ($) { // because who knows what other developers are gonna mess with
            $(document).ready(function () {
                hookLinkClassesToScroll($);
            })
        } else {
            console.warn("Super Light Animated Scroll to id plugin is not working, because jQuery is not loaded.");
        }
    </script>
    <?php
}
