<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question_ar' => 'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟',
                'question_en' => 'When should a child start using a car seat?',
                'answer_ar' => 'يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.',
                'answer_en' => 'A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.',
            ],
            [
                'question_ar' => 'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟',
                'question_en' => 'When should a child start using a car seat?',
                'answer_ar' => 'نحن نقدم مجموعة واسعة من خدمات السبك المعدني، بما في ذلك تصنيع القطع المعدنية للآلات الثقيلة، وتصنيع أجزاء خاصة بقطاعات الطاقة والبناء، إلى جانب خدمات تصنيع الهياكل المعدنية المخصصة.',
                'answer_en' => 'We offer a wide range of metal casting services, including manufacturing metal parts for heavy machinery, custom components for energy and construction sectors, and custom metal structures.',
            ],
            [
                'question_ar' => 'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟',
                'question_en' => 'When should a child start using a car seat?',
                'answer_ar' => 'يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.',
                'answer_en' => 'A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.',
            ],
            [
                'question_ar' => 'متى يجب أن يبدأ الطفل باستخدام مقعد السيارة؟',
                'question_en' => 'When should a child start using a car seat?',
                'answer_ar' => 'يجب أن يبدأ الطفل باستخدام مقعد السيارة منذ الولادة. الأطفال حديثو الولادة حتى عمر السنتين يجب أن يجلسوا في مقاعد مخصصة مواجهة للخلف لتوفير أكبر قدر من الحماية لرأسهم ورقبتهم.',
                'answer_en' => 'A child should start using a car seat from birth. Newborns up to two years old should sit in rear-facing car seats to provide maximum protection for their head and neck.',
            ],
        ];

        foreach ($questions as $q) {
            Question::create(array_merge($q, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
