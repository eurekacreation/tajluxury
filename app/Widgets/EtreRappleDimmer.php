<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class EtreRappleDimmer extends AbstractWidget
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
        $count = \App\Callback::count();
        $string = trans_choice('voyager.dimmer.rapple', $count);


        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-telephone',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.rapple_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager.dimmer.rapple_link_text'),
                'link' => route('voyager.callbacks.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg')
        ]));
    }
}
