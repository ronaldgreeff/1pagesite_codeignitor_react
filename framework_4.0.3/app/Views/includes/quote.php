<?php
function makeQuote($content, $sub_content='', $button_link='', $button_text='') {
  $output = '';
  $output .= '<div class="intro-content">';
  $output .= '<h3>'.$content.'</h3>';
  $output .= '<div class="intro-content-sub">';
  $output .= '<h4>'.$sub_content.'</h4>';
  $output .= '<a href="'.$button_link.'">'.$button_text.'</a>';
  $output .= '</div>';

  return $output;
}
?>
