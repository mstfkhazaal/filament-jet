<?php
return [

    'create' => [
        'title' => 'إنشاء رمز API',
        'description' => 'تسمح أرمزة API للخدمات الطرفية بالمصادقة على تطبيقنا بالنيابة عنك.',

        'submit' => 'إنشاء',
    ],

    'update' => [
        'notify' => 'تم تحديث الرمز بنجاح!',
    ],

    'delete' => [
        'notify' => 'تم حذف الرمز',
    ],

    'modal' => [
        'title' => 'رمز API',
        'description' => 'يرجى نسخ رمز API الجديد الخاص بك. لأسباب أمنية، لن يتم عرضه مرة أخرى.',

        'buttons' => [
            'close' => 'إغلاق',
        ],
    ],

    'table' => [
        'never' => 'أبداً',

        'bulk_actions' => [
            'delete' => 'حذف',
        ],
    ],

    'fields' => [
        'token_name' => 'اسم الرمز',
        'permissions' => 'الصلاحيات',
        'last_used_at' => 'آخر استخدام',
    ],

];
