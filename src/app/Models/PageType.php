<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'realization_title' => ['head', 'Nagłówek - Realizacje'],
            'realization_description' => ['text', 'Opis - Realizacje'],
            'header_company_address' => ['head', 'Nagłówek - Siedziba firmy'],
            'header_working_hours' => ['head', 'Nagłówek - Godziny pracy'],
            'description_working_hours' => ['text', 'Godziny pracy'],
            'header_email' => ['head', 'Nagłówek - Email'],
            'header_phone' => ['head', 'Nagłówek - Telefon kontaktowy'],
            'cities_list' => ['text', 'Lista miast'],
            'header_about_us' => ['head', 'Nagłówek - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
            'header_experience' => ['head', 'Nagłówek - Doświadczenie'],
            'description_experience' => ['text', 'Opis - Doświadczenie'],
            'counter_years_market' => ['head', 'Licznik - Lat na rynku'],
            'counter_years_market_text' => ['head', 'Opis - Lat na rynku'],
            'counter_employees' => ['head', 'Licznik - Ilość pracowników'],
            'counter_employees_text' => ['head', 'Opis - Ilość pracowników'],
            'header_counter_1' => ['head', 'Nagłówek licznik 1 - Nasza Misja'],
            'counter_value_1' => ['head', 'Wartość licznik 1 - Nasza Misja'],
            'header_counter_2' => ['head', 'Nagłówek licznik 2 - Nasza Misja'],
            'counter_value_2' => ['head', 'Wartość licznik 2 - Nasza Misja'],
            'header_counter_3' => ['head', 'Nagłówek licznik 3 - Nasza Misja'],
            'counter_value_3' => ['head', 'Wartość licznik 3 - Nasza Misja'],
            'header_counter_4' => ['head', 'Nagłówek licznik 4 - Nasza Misja'],
            'counter_value_4' => ['head', 'Wartość licznik 4 - Nasza Misja'],
            'mission_details' => ['text', 'Szczegóły - Nasza Misja'],
            'mission_vision_header' => ['head', 'Nagłówek - Nasza Misja'],
            'mission_vision_description' => ['text', 'Opis - Nasza Misja'],
            'client_relations_header' => ['head', 'Nagłówek - Relacje z Klientami'],
            'client_relations_description' => ['text', 'Opis - Relacje z Klientami'],
            'questions_header' => ['head', 'Nagłówek - Masz pytania'],
            'help_header' => ['head', 'Nagłówek - Potrzebujesz pomocy'],
            'work_hours_header' => ['head', 'Nagłówek - Kiedy pracujemy'],
            'work_hours_description' => ['head', 'Opis - Kiedy pracujemy'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}
