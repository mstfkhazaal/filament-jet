<?php

return [

    'title' => 'إعادة تعيين كلمة المرور',

    'heading' => 'إعادة تعيين كلمة المرور',

    'buttons' => [

        'reset' => [
            'label' => 'إعادة تعيين كلمة المرور',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'البريد الإلكتروني',
        ],

        'password' => [
            'label' => 'كلمة المرور',
            'validation_attribute' => 'كلمة المرور',
        ],

        'passwordConfirmation' => [
            'label' => 'تأكيد كلمة المرور',
        ],

    ],

    'messages' => [
        'throttled' => 'عدد محاولات إعادة التعيين كبير جداً. يرجى المحاولة مرة أخرى في :seconds ثانية.',
    ],

];
