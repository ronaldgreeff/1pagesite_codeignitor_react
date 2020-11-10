<?php
function makeQuote($content, $sub_content='', $button_link='', $button_text='') {

  $output = '';
  $output .= '<div class="quote-container">';
  $output .= '<h3 class="quote-content">'.$content.'</h3>';
  $output .= '<div class="quote-sub-content-container">';
  $output .= '<h4 class="quote-sub-content">'.$sub_content.'</h4>';
  $output .= '<a class="quote-link" href="'.$button_link.'">'.$button_text.'</a>';
  $output .= '</div>';

  echo $output;
}
?>
