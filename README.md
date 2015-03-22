# sfBootstrapPlugin
A admin theme for symphony 1.4 whit bootstrap

## Installation
### Repository
The git submodule way
```
git submodule add --recursive https://github.com/jorisros/sfBootstrapPlugin.git plugins/sfBootstrapPlugin
```
### Enable plugin
Add the plugin to config/ProjectConfiguration.class.php
```
class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(
              'sfBootstrapPlugin',
               );
  }
```
### Set layout to bootstrap
Because bootstrap have the need to html5 we must load a other template

Change layout in apps/backend/config/view.yml
```
  layout:         <?php echo sfConfig::get('sf_plugins_dir').DIRECTORY_SEPARATOR.'sfBootstrapPlugin'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR ?>layout
```
### Add theme to generated files
When you have existing modules you must replace the theme in /apps/backend/modules/<name_module>/config/config.yml
```
  theme:    admin15
```
to
```
  theme:     bootstrap
```
When you generate a module you must add --theme=bootstrap to the commandline

### Publish the assets
We must publish the new assets with the following command
```
./symfony plugin:publish-assets
```