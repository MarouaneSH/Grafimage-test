<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Registration;


class RegistrationWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Registration::count();
        $string = trans_choice('voyager::dimmer.page', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} inscriptions",
            'text'   => "Vous avez $count inscriptions enregistrées. Cliquez sur le bouton ci-dessous pour afficher toutes les inscriptions.            ",
            'button' => [
                'text' => "Voir toutes les inscriptions",
                'link' => route('voyager.registrations.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/1.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}
