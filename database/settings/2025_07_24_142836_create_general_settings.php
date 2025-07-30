<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Site basics
        $this->migrator->add('general.site_name_ar', 'مَقعد');
        $this->migrator->add('general.site_name_en', 'Maqaad');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.favicon', 'site/images/Logo.svg');
        $this->migrator->add('general.logo', 'site/images/Logo.svg');

        // Social
        $this->migrator->add('general.social_twitter', '#');
        $this->migrator->add('general.social_facebook', '#');
        $this->migrator->add('general.social_instagram', '#');
        $this->migrator->add('general.social_youtube', '#');
        $this->migrator->add('general.social_text', 'MaqaadSA@');

        // Hero section
        $this->migrator->add('general.hero_title_ar', 'سعادتهم في سلامتهم!');
        $this->migrator->add('general.hero_title_en', 'Their happiness is in their safety!');
        $this->migrator->add('general.hero_description_ar', 'مبادرة “مَقعد” تهدف إلى نشر الوعي حول أهمية استخدام مقعد الطفل المخصص في السيارة لحمايته من الحوادث.');
        $this->migrator->add('general.hero_description_en', 'The "Maqaad" initiative aims to raise awareness about the importance of using child car seats to protect them from accidents.');

        // Home

        $this->migrator->add('general.home_banner', 'site/images/banner.png');

        // About section
        $this->migrator->add('general.about_banner', 'site/images/about.png');
        $this->migrator->add('general.about_short_ar', 'فريق يؤمن بدوره في خدمة المجتمع، ونسعى لإحداث أثر إيجابي ومستدام');
        $this->migrator->add('general.about_short_en', 'A team that believes in its role in serving the community, striving to create a positive and sustainable impact.');
        $this->migrator->add('general.about_long_ar', '“مَقعد” هي مؤسسة وقفية للتوعية بأهمية استخدام مَقعد الطفل بالسيارة بموجب اتفاقية مع وزارة الصحة بالتعاون مع الجمعية السعودية للسلامة المرورية...');
        $this->migrator->add('general.about_long_en', '"Maqaad" is a charitable foundation raising awareness about child seat safety in cars, under agreement with the Ministry of Health in collaboration with various government and private entities...');

        // Vision / Mission / Goal

        $this->migrator->add('general.vision_ar', '#سعادتهم_في_سلامتهم.');
        $this->migrator->add('general.vision_en', '#Their_Happiness_Is_Their_Safety.');

        $this->migrator->add('general.mission_ar', 'حث أولياء الأمور على الالتزام بإجراءات السلامة والمحافظة على أرواح الأطفال بالسيارة.');
        $this->migrator->add('general.mission_en', 'Encourage parents to follow safety procedures and protect children’s lives in cars.');

        $this->migrator->add('general.goal_ar', 'التوعية بأهمية استخدام مقاعد الأطفال');
        $this->migrator->add('general.goal_en', 'Raise awareness about the importance of using child car seats');

        // Contact
        $this->migrator->add('general.contact_email', 'info@maqaad.sa');
        $this->migrator->add('general.contact_phone', '0500664996');
        $this->migrator->add('general.contact_address_ar', 'المملكة العربية السعودية');
        $this->migrator->add('general.contact_address_en', 'Saudi Arabia');

        //الشروط والأحكام
        $this->migrator->add('general.terms_desc_ar', 'جميع الحقوق محفوظة 2025© MAQAAD');
        $this->migrator->add('general.terms_desc_en', 'All rights reserved 2025© MAQAAD');

        // إحصائيات - Progress Section
        $this->migrator->add('general.progress_death_ar', 'من مساهمة المقاعد في خفض وفيات الأطفال بالحوادث');
        $this->migrator->add('general.progress_death_en', 'Contribution of seats in reducing child deaths in accidents');
        $this->migrator->add('general.progress_death_percent', 40);

        $this->migrator->add('general.progress_injury_ar', 'من مساهمة المقاعد في تقليل خطر الإصابة بالحوادث');
        $this->migrator->add('general.progress_injury_en', 'Contribution of seats in reducing injury risk');
        $this->migrator->add('general.progress_injury_percent', 80);

        $this->migrator->add('general.progress_use_ar', 'من استخدام مقاعد الأمان للأطفال في المملكة العربية السعودية');
        $this->migrator->add('general.progress_use_en', 'Usage of children\'s safety seats in Saudi Arabia');
        $this->migrator->add('general.progress_use_percent', 10);

        $this->migrator->add('general.installation_doc', 'site/images/home.pdf');

        $this->migrator->add('general.initiative_presentation', 'site/images/initiative_presentation.mp4');


    }
};
