<flux:footer container class="mt-auto py-12 border-t border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-900">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div class="space-y-4">
            <flux:brand href="/" name="tlania" class="text-2xl" />
            <flux:text class="text-zinc-500 dark:text-zinc-400">
                The superlative lottery platform for everyone. Fair, transparent, and exciting.
            </flux:text>
            <div class="text-sm text-zinc-400">
                &copy; {{ date('Y') }} {{ config('app.name') }}. <br> All rights reserved.
            </div>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">Quick Links</flux:heading>
            <ul class="space-y-2">
                <li><flux:link href="/" variant="subtle">Home</flux:link></li>
                <li><flux:link href="/lotteries" variant="subtle">Lotteries</flux:link></li>
                <li><flux:link href="/blog" variant="subtle">Blog</flux:link></li>
                <li><flux:link href="/winners" variant="subtle">Latest Winners</flux:link></li>
            </ul>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">Help Center</flux:heading>
            <ul class="space-y-2">
                <li><flux:link href="/faqs" variant="subtle">FAQs</flux:link></li>
                <li><flux:link href="/contact" variant="subtle">Contact Us</flux:link></li>
                <li><flux:link href="/terms" variant="subtle">Terms of Service</flux:link></li>
                <li><flux:link href="/privacy" variant="subtle">Privacy Policy</flux:link></li>
            </ul>
        </div>

        <div>
            <flux:heading size="lg" class="mb-4">Subscribe</flux:heading>
            <flux:text class="mb-4 text-sm">
                Get the latest lottery news and updates sent straight to your inbox.
            </flux:text>
            
            <form class="space-y-3" onsubmit="event.preventDefault();"> <flux:input placeholder="Email address" icon="envelope" />
                <flux:button variant="primary" type="submit" class="w-full">Subscribe</flux:button>
            </form>
        </div>
    </div>
</flux:footer>