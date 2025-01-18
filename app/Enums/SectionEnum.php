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


    // Home page section
    public static function HomePage()
    {
        return [
            self::HOME_BANNER->value => ['item' => 1, 'type' => 'first'],
            self::HOME_BANNERS->value => ['item' => 3, 'type' => 'get'],
            self::HERO->value => ['item' => 1, 'type' => 'first'],
        ];
    }

    public static function getCommon(){
        return [
            self::FOOTER->value => ['item' => 1, 'type' => 'first'],
            self::SOLUTION->value => ['item' => 1, 'type' => 'first'],
        ];
    }
    
}
