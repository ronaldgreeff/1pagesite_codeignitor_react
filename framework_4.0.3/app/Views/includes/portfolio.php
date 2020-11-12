<div class="section no-pad-bot">
  <?=
  helper('filesystem');
  $controllers = get_filenames(APPPATH.'./views/includes/portfolio');
  foreach ($controllers as $file) {
    echo $this->include('includes/portfolio/'.$file);
  };
  ?>
</div>
