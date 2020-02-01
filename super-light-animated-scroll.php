<?php
/**
* Plugin Name: Super Light Animated Scroll to id
* Plugin URI: https://dlawp.pl/plugins
* Description: Super light and easy to setup links that scroll the page smoothly to any id within the document.
* Version: 0.1
* Author: DlaWP.pl <support@dlaWP.pl>
* Author URI: https://dlawp.pl/plugins
**/

add_action('wp_footer', 'super_light_animated_scroll');

function super_light_animated_scroll() {
    ?>
    <script type="text/javascript">
        function hookLinkClassesToScroll($) {
            $("a.sl-animated-scroll, .sl-animated-scroll a").on("click", function (e) {
                e.preventDefault();
                
                var targetId = $(this).prop("hash");
                if (targetId.charAt(0) != "#") {
                    targetId = "#" + targetId;
                }

                $([document.documentElement, document.body]).animate({
                    scrollTop: $(targetId).offset().top
                }, 500);
            });
        }

        if (jQuery) {
            jQuery(document).ready(function ($) {
                hookLinkClassesToScroll($);
            })
        } else if ($) {
            $(document).ready(function () {
                hookLinkClassesToScroll($);
            })
        } else {
            console.warn("Super Light Animated Scroll to id plugin is not working, because jQuery is not loaded.");
        }
    </script>
    <?php
}
