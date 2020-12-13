<?php namespace Author\Partialsplugin;

use Backend;
use System\Classes\PluginBase;

/**
 * Partials Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Partials',
            'description' => 'No description provided yet...',
            'author'      => 'Author',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {

        return [
            'Author\Partialsplugin\Components\MyComponent' => 'myComponent',
            'Author\Partialsplugin\Components\MySecondComponent' => 'mySecondComponent',
        ];
    }
}
