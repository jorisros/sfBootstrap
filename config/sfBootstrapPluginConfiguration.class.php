<?php

class sfBootstrapPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
      sfConfig::set('sf_admin_module_web_dir', '/sfBootstrapPlugin');

  }
}