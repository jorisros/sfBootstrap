<?php if (isset($this->params['css']) && ($this->params['css'] !== false)): ?>
[?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?]
<?php elseif(!isset($this->params['css'])): ?>
  [?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/normalize.css' ?>', 'first') ?]
  [?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/bootstrap.css' ?>', 'first') ?]
  [?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/bootstrap-theme.css' ?>', 'first') ?]
  [?php use_stylesheet('<?php echo sfConfig::get('sf_admin_module_web_dir').'/css/global.css' ?>', 'first') ?]
  [?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/jquery.js' ?>', 'first') ?]
  [?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/bootstrap.js' ?>') ?]
  [?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/bootstrap-select.js' ?>') ?]
  [?php use_javascript('<?php echo sfConfig::get('sf_admin_module_web_dir').'/js/global.js' ?>') ?]
<?php endif; ?>
