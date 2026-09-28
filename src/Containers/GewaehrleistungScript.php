<?php

namespace TwGewaehrleistung\Containers;

use Plenty\Plugin\Templates\Twig;

class GewaehrleistungScript
{
    public function call(Twig $twig): string
    {
        return $twig->render('TwGewaehrleistung::GewaehrleistungScript');
    }
}
