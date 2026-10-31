<?php
/* Keep the replica theme active after the initial WordPress install. */
add_filter('pre_option_template', function ($value) { return 'incub8-space'; });
add_filter('pre_option_stylesheet', function ($value) { return 'incub8-space'; });
