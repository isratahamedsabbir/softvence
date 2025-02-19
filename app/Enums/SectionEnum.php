<?php

namespace App\Enums;

enum SectionEnum: string
{
    const BG = 'bg_image';

    case HOME_BANNER = 'home_banner';
    case HOME_BANNERS = 'home_banners';
    case HERO = 'hero';

    //Footer
    case FOOTER = 'footer';
    case SOLUTION = "solution";
    
}
