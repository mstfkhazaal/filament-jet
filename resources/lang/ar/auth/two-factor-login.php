<?php

return [

    'title' => 'التحقق الثنائي العامل',

    'heading' => 'التحقق الثنائي العامل',

    'buttons' => [

        'authenticate' => [
            'label' => 'تسجيل الدخول',
        ],

        'register' => [
            'before' => 'أو',
            'label' => 'التسجيل في حساب',
        ],

        'recovery_code' => [
            'label' => 'استخدام كود استرداد',
        ],

        'authentication_code' => [
            'label' => 'استخدام كود مصادقة',
        ],

    ],

    'fields' => [

        'code' => [
            'label' => 'الكود',
            'placeholder' => 'XXX-XXX',
        ],

        'recoveryCode' => [
            'label' => 'كود الاسترداد',
            'placeholder' => 'abcdef-98765',
        ],

    ],

    'messages' => [
        'failed' => [
            'code' => 'كود التحقق الثنائي العامل المقدم غير صالح.',
            'recoveryCode' => 'كود الاسترداد الثنائي العامل المقدم غير صالح.',
        ],
        'throttled' => 'تجاوزت الحد الأقصى لمحاولات تسجيل الدخول. الرجاء المحاولة مرة أخرى في :seconds ثواني.',
    ],

];
