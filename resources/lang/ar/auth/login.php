<?php

return [

    'title' => 'تسجيل الدخول',

    'heading' => 'تسجيل الدخول',

    'buttons' => [

        'authenticate' => [
            'label' => 'تسجيل الدخول',
        ],

        'register' => [
            'before' => 'أو',
            'label' => 'قم بالتسجيل واحصل على حساب',
        ],

        'request_password_reset' => [
            'label' => 'هل نسيت كلمة المرور؟',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'البريد الاكتروني',
        ],

        'password' => [
            'label' => 'كلمة المرور',
        ],

        'remember' => [
            'label' => 'تذكرني',
        ],

    ],

    'messages' => [
        'failed' => 'أوراق الاعتماد هذه لا تتطابق مع سجلاتنا.',
        'throttled' => 'محاولات تسجيل دخول كثيرة جدًا. يرجى المحاولة مرة أخرى في :seconds ثواني.',
    ],

];
