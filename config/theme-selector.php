<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/style-light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/style-color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/style-dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/style-colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "typography",
            "stylesheets" => [
                "css/style-typography.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "theme-one"       => [
            "title"      => "Design One - Contrast",
            "class"      => "Design One",
            "stylesheets" => [
                "css/theme-one.min.css"
            ]
        ],

        "theme-two"       => [
            "title"      => "Design Two - Unity",
            "class"      => "Design Two",
            "stylesheets" => [
                "css/theme-two.min.css"
            ]
        ],

        "theme-three"       => [
            "title"      => "Design Three - Depth",
            "class"      => "Design Thee",
            "stylesheets" => [
                "css/theme-three.min.css"
            ]
        ],
    ]
];
