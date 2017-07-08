<?php


add_filter( 'tiny_mce_before_init', 'wpex_mce_google_fonts_array' );
function wpex_mce_google_fonts_array( $initArray ) {
    //$initArray['font_formats'] = 'Lato=Lato;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
    $theme_advanced_fonts = 'Aclonica=Aclonica;';
    $theme_advanced_fonts .= 'Lato=Lato;';
    $theme_advanced_fonts .= 'Michroma=Michroma;';
    $theme_advanced_fonts .= 'Paytone One=Paytone One';
    $initArray['font_formats'] = $theme_advanced_fonts;
    return $initArray;
}

add_action( 'admin_init', 'wpex_mce_google_fonts_styles' );
function wpex_mce_google_fonts_styles() {
   $font1 = 'http://fonts.googleapis.com/css?family=Aclonica:300,400,700';
   add_editor_style( str_replace( ',', '%2C', $font1 ) );
   $font2 = 'http://fonts.googleapis.com/css?family=Lato:300,400,700';
   add_editor_style( str_replace( ',', '%2C', $font2 ) );
   $font3 = 'http://fonts.googleapis.com/css?family=Michroma:300,400,700';
   add_editor_style( str_replace( ',', '%2C', $font3 ) );
   $font4 = 'http://fonts.googleapis.com/css?family=Paytone+One:300,400,700';
   add_editor_style( str_replace( ',', '%2C', $font4 ) );
}


add_action( 'admin_head-post.php', 'cwc_fix_html_editor_font' );
// add_action( 'admin_head-post-new.php', 'cwc_fix_html_editor_font' );
add_action( 'wp_head', 'cwc_fix_html_editor_font' );
 
function cwc_fix_html_editor_font() { ?>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Aclonica);
    @import url(http://fonts.googleapis.com/css?family=Lato);
    @import url(http://fonts.googleapis.com/css?family=Michroma);
    @import url(http://fonts.googleapis.com/css?family=Paytone+One); 
    </style>
<?php }