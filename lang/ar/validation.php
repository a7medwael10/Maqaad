<?php

return [

    'accepted'             => 'يجب الموافقة على :attribute.',
    'active_url'           => 'حقل :attribute ليس رابطًا صالحًا.',
    'after'                => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal'       => 'يجب أن يكون :attribute تاريخًا يوافق أو بعد :date.',
    'alpha'                => 'لا يمكن لحقل :attribute أن يحتوي إلا على حروف.',
    'alpha_dash'           => 'حقل :attribute يمكن أن يحتوي على حروف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num'            => 'حقل :attribute يمكن أن يحتوي على حروف وأرقام فقط.',
    'array'                => 'يجب أن يكون حقل :attribute مصفوفة.',
    'before'               => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal'      => 'يجب أن يكون :attribute تاريخًا يوافق أو قبل :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم ملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون طول حقل :attribute بين :min و :max رمزًا.',
        'array'   => 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean'              => 'يجب أن تكون قيمة :attribute إما true أو false.',
    'confirmed'            => 'تأكيد :attribute غير متطابق.',
    'date'                 => 'حقل :attribute ليس تاريخًا صحيحًا.',
    'date_equals'          => 'يجب أن يكون :attribute تاريخًا يساوي :date.',
    'date_format'          => 'يجب أن يطابق :attribute التنسيق :format.',
    'different'            => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits'               => 'يجب أن يحتوي :attribute على :digits أرقام.',
    'digits_between'       => 'يجب أن يكون :attribute بين :min و :max أرقام.',
    'dimensions'           => 'أبعاد الصورة في :attribute غير صالحة.',
    'distinct'             => 'لدى :attribute قيمة مكررة.',
    'email'                => 'يجب أن يكون :attribute بريد إلكتروني صحيح.',
    'ends_with'            => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'exists'               => 'القيمة المختارة لحقل :attribute غير صحيحة.',
    'file'                 => 'يجب أن يكون :attribute ملفًا.',
    'filled'               => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt'                   => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file'    => 'يجب أن يكون حجم ملف :attribute أكبر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute أكبر من :value رمزًا.',
        'array'   => 'يجب أن يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من أو تساوي :value.',
        'file'    => 'يجب أن يكون حجم ملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute أكبر من أو يساوي :value رمزًا.',
        'array'   => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
    ],
    'image'                => 'يجب أن يكون :attribute صورة.',
    'in'                   => 'القيمة المختارة لحقل :attribute غير صحيحة.',
    'in_array'             => 'حقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip'                   => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'json'                 => 'يجب أن يكون :attribute نص JSON صالحًا.',
    'max'                  => [
        'numeric' => 'لا يجوز أن تكون قيمة :attribute أكبر من :max.',
        'file'    => 'لا يجوز أن يكون حجم ملف :attribute أكبر من :max كيلوبايت.',
        'string'  => 'لا يجوز أن يزيد طول :attribute عن :max رمزًا.',
        'array'   => 'لا يجوز أن يحتوي :attribute على أكثر من :max عناصر.',
    ],
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute على الأقل :min.',
        'file'    => 'يجب أن يكون حجم ملف :attribute على الأقل :min كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute على الأقل :min رمزًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عناصر.',
    ],
    'not_in'               => 'القيمة المختارة لحقل :attribute غير صحيحة.',
    'numeric'              => 'يجب أن يكون :attribute رقمًا.',
    'password'             => [
        'letters'       => 'يجب أن يحتوي :attribute على حرف واحد على الأقل.',
        'mixed'         => 'يجب أن يحتوي :attribute على حروف كبيرة وحروف صغيرة.',
        'numbers'       => 'يجب أن يحتوي :attribute على رقم واحد على الأقل.',
        'symbols'       => 'يجب أن يحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'قيمة :attribute معروفة بتعرضها لتسريب بيانات؛ يرجى اختيار قيمة أخرى.',
    ],
    'present'              => 'يجب أن يكون حقل :attribute موجودًا.',
    'regex'                => 'صيغة :attribute غير صحيحة.',
    'required'             => 'حقل :attribute مطلوب.',
    'required_if'          => 'يصبح حقل :attribute مطلوبًا عندما يكون :other هو :value.',
    'same'                 => 'يجب أن يطابق :attribute و :other.',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute :size.',
        'file'    => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute :size رمزًا.',
        'array'   => 'يجب أن يحتوي :attribute على :size عناصر.',
    ],
    'starts_with'          => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string'               => 'يجب أن يكون :attribute نصًا.',
    'timezone'             => 'يجب أن تكون :attribute منطقة زمنية صحيحة.',
    'unique'               => 'قيمة :attribute مستخدمة بالفعل.',
    'uploaded'             => 'فشل تحميل :attribute.',
    'url'                  => 'صيغة الرابط في :attribute غير صحيحة.',
    'uuid'                 => 'يجب أن يكون :attribute UUID صالحًا.',

    'custom' => [
        'phone' => [
            'required' => 'رقم الهاتف مطلوب.',
            'regex' => 'رقم الهاتف يجب أن يكون رقم جوال سعودي صحيح.',
        ],

        'message' => [
            'required' => 'الرسالة مطلوبة.',
        ],

        'email' => [
            'required' => 'البريد الإلكتروني مطلوب.',
            'email'    => 'البريد الإلكتروني يجب أن يكون صالحًا.',
        ],

        'name' => [
            'required' => 'الاسم مطلوب.',
            'string'   => 'الاسم يجب أن يكون نصًا.',
        ],

        'address' => [
            'required' => 'العنوان مطلوب.',
            'string'   => 'العنوان يجب أن يكون نصًا.',
        ],
    ],

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المستخدم',
        'email'                 => 'البريد الإلكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'gender'                => 'الجنس',
        // ... أضف حقولًا أخرى حسب الحاجة
    ],

];
