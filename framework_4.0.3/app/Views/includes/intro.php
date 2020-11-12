<div class="section no-pad-bot flex-middle-center">
  <div class="container">
    <?= $this->include('includes/quote');
    echo makeQuote(
      $content = 'Since inception, MedWeb has been delivering {work that powers <strong>game-changing companies and global influencers.</strong>}',
      $sub_content = '{Our core strategic engagements in branding, platform design, campaigns, and content creation consistently drive desired outcomes and awareness.}',
      $button_link = '/about',
      $button_text = 'See who we are',
      $background_img = 'assets/img/logo_design.svg'
    ); ?>
  </div>
</div>
