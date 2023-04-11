<?php

return [

    'title' => 'تسجيل حساب جديد',

    'heading' => 'إنشاء حساب جديد',

    'buttons' => [

        'login' => [
            'before' => 'أو',
            'label' => 'تسجيل الدخول إلى حسابك',
        ],

        'register' => [
            'label' => 'تسجيل',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'البريد الإلكتروني',
        ],

        'name' => [
            'label' => 'الاسم',
        ],

        'password' => [
            'label' => 'كلمة المرور',
            'validation_attribute' => 'كلمة المرور',
        ],

        'passwordConfirmation' => [
            'label' => 'تأكيد كلمة المرور',
        ],

        'terms_and_policy' => [
            'label' => 'أوافق على :terms_of_service و :privacy_policy',
            'terms_of_service' => 'شروط الخدمة',
            'privacy_policy' => 'سياسة الخصوصية',
        ],

    ],

    'messages' => [
        'throttled' => 'تمت محاولة التسجيل عدة مرات. الرجاء المحاولة مرة أخرى بعد :seconds ثانية.',
    ],

];
