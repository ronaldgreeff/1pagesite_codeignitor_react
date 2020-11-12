<?php
function makeQuote($content, $sub_content='', $button_link='',
$button_text='', $background_img='')
  {
    $output = '';
    $output .= '<div class="quote-container" style="background-image:url('.base_url($background_img).')">';
    $output .=  '<div class="quote-foreground-wrapper">';
    $output .=    '<div class="quote-container">';
    $output .=      '<h3 class="quote">'.$content.'</h3>';
    $output .=    '</div>';
    $output .=    '<div class="quote-sub-content-container">';
    $output .=      '<h4 class="quote-sub-content">'.$sub_content.'</h4>';
    $output .=    '</div>';
    $output .=    '<a class="quote-link" href="'.$button_link.'">'.$button_text.'</a>';
    $output .=  '</div>';
    $output .= '</div>';

    echo $output;
  }
?>
