<?php
add_filter( 'the_content', function( $content ) {
    return $content . '<p>Got any questions about this article? Just pop me <a href="mailto:josh@joshgreendesign.com">an email</a>.</p>';
} );