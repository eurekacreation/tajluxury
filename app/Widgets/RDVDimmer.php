<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class RDVDimmer extends AbstractWidget
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
        $count = \App\Appointment::count();
        $string = trans_choice('voyager.dimmer.rdv', $count);


        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-calendar',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.rdv_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager.dimmer.rdv_link_text'),
                'link' => route('voyager.appointments.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg')
        ]));
    }
}
