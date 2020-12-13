<?php namespace Author\Partialsplugin\Components;

use Cms\Classes\ComponentBase;

class MySecondComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'MySecondComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
