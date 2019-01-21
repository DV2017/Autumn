<?php namespace Firstsquares\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name' => 'FirstSquares',
      'description' => 'Provides website services',
      'author' => 'Deepa',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents()
  {
    return [
      '\Firstsquares\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}