<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TIM dialogue marketing</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><?php echo link_to('Campaigns', 'campaign') ?></li>
        <li><?php echo link_to('Import campaign', 'importer') ?></li>
        <li><?php echo link_to('Company', 'company') ?></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<br><br>
<div class="container">
    <div id="content">
      <?php echo $sf_content ?>
    </div>

  </div>
</div>

</body>
</html>
