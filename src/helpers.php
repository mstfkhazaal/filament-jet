<?php

use Mstfkhazaal\FilamentJet\Jet;
use Mstfkhazaal\FilamentJet\RouteActions;

if (! function_exists('jetRouteActions')) {
    function jetRouteActions(): RouteActions
    {
        return new RouteActions();
    }
}

if (! function_exists('jet')) {
    function jet(): Jet
    {
        return new Jet();
    }
}
