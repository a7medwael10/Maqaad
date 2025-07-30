<div class="flex items-center gap-2 rtl:ml-4 ltr:mr-4">
    <a href="{{ route('change.language', 'ar') }}"
        @class(['underline font-bold' => app()->getLocale() === 'ar'])>
        العربية
    </a>
    |
    <a href="{{ route('change.language', 'en') }}"
        @class(['underline font-bold' => app()->getLocale() === 'en'])>
        English
    </a>
</div>
