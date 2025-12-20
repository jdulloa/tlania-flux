<flux:footer container class="mt-auto py-12 border-t border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div class="space-y-4">
            <flux:brand href="/" name="tlania" class="text-2xl" />
            <flux:text class="text-zinc-500 dark:text-zinc-400">
                {{ __(@$content->data_values->description) }}
            </flux:text>
            <div class="text-sm text-zinc-400">
                &copy; {{ date('Y') }} {{ config('app.name') }}. <br> @lang('All rights reserved.')
            </div>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">@lang('Quick Links')</flux:heading>
            <ul class="space-y-2">
                <li><flux:link href="/" variant="subtle">@lang('Home')</flux:link></li>
                <li><flux:link href="/lotteries" variant="subtle">@lang('Lotteries')</flux:link></li>
                <li><flux:link href="/blog" variant="subtle">@lang('Blog')</flux:link></li>
                <li><flux:link href="/winners" variant="subtle">@lang('Latest Winners')</flux:link></li>
            </ul>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">@lang('Help')</flux:heading>
            <ul class="space-y-2">
                <li><flux:link href="/faqs" variant="subtle">@lang('FAQs')</flux:link></li>
                <li><flux:link href="/contact" variant="subtle">@lang('Contact')</flux:link></li>
                <li><flux:link href="/terms" variant="subtle">@lang('Terms of Service')</flux:link></li>
                <li><flux:link href="/privacy" variant="subtle">@lang('Privacy Policy')</flux:link></li>
            </ul>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">@lang('Subscribe')</flux:heading>
            <flux:text class="mb-4 text-sm">
                @lang('Get the latest lottery news and updates sent straight to your inbox.')
            </flux:text>
            
            <form class="space-y-3" onsubmit="event.preventDefault();"> <flux:input placeholder="@lang('Email address')" icon="envelope" />
                <flux:button variant="primary" type="submit" class="w-full">@lang('Subscribe')</flux:button>
            </form>
        </div>
    </div>
</flux:footer>