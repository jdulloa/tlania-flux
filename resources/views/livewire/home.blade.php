<div>
    <div class="py-20 text-center space-y-6">
        <flux:heading size="xl" level="1">
            Superlative Lottery Platform
        </flux:heading>
        
        <flux:subheading size="lg" class="max-w-2xl mx-auto">
            Experience the ultimate thrill of winning with our dynamic and ever-evolving lottery system.
        </flux:subheading>

        <div class="flex justify-center gap-4">
            <flux:button variant="primary" href="/lotteries">Play Now</flux:button>
            <flux:button variant="ghost" href="/about">Learn More</flux:button>
        </div>
    </div>

    <flux:separator text="Latest Winners" class="my-12" />

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <flux:card>
            <div class="flex items-center gap-4">
                <flux:avatar src="https://i.pravatar.cc/150?u=1" />
                <div>
                    <flux:heading size="lg">$500.00</flux:heading>
                    <flux:subheading>Won by John Doe</flux:subheading>
                </div>
            </div>
        </flux:card>

        <flux:card>
            <div class="flex items-center gap-4">
                <flux:avatar src="https://i.pravatar.cc/150?u=2" />
                <div>
                    <flux:heading size="lg">$1,200.00</flux:heading>
                    <flux:subheading>Won by Sarah Smith</flux:subheading>
                </div>
            </div>
        </flux:card>

        <flux:card>
            <div class="flex items-center gap-4">
                <flux:avatar src="https://i.pravatar.cc/150?u=3" />
                <div>
                    <flux:heading size="lg">$100.00</flux:heading>
                    <flux:subheading>Won by Mike Jones</flux:subheading>
                </div>
            </div>
        </flux:card>
    </div>

    <flux:separator text="{{ __('From the Blog') }}" class="my-12" />

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-600 transition-colors">
            <div class="relative h-48 overflow-hidden">
                <img src="https://picsum.photos/seed/lottery1/800/600" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <div class="flex items-center justify-between mb-3">
                    <flux:badge size="sm" color="zinc">Tips & Tricks</flux:badge>
                    <span class="text-xs font-medium text-zinc-400">Oct 24, 2025</span>
                </div>

                <flux:heading size="lg" level="3" class="mb-2">
                    Top 5 Strategies to Win Big
                </flux:heading>

                <flux:text class="line-clamp-3 mb-6 flex-1 text-zinc-500 dark:text-zinc-400">
                    Discover the mathematical patterns and strategies that past winners have used to increase their odds of hitting the jackpot.
                </flux:text>

                <div class="mt-auto">
                    <flux:button href="/blog/strategy-guide" variant="ghost" size="sm" icon-trailing="arrow-right" class="-ml-2">
                        @lang('Read Article')
                    </flux:button>
                </div>
            </div>
        </flux:card>

        <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-600 transition-colors">
            <div class="relative h-48 overflow-hidden">
                <img src="https://picsum.photos/seed/lottery2/800/600" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <div class="flex items-center justify-between mb-3">
                    <flux:badge size="sm" color="indigo">Winners</flux:badge>
                    <span class="text-xs font-medium text-zinc-400">Oct 20, 2025</span>
                </div>

                <flux:heading size="lg" level="3" class="mb-2">
                    Meet the $10M Jackpot Winner
                </flux:heading>

                <flux:text class="line-clamp-3 mb-6 flex-1 text-zinc-500 dark:text-zinc-400">
                    An exclusive interview with John Doe, our latest grand prize winner, on how he plans to spend his winnings.
                </flux:text>

                <div class="mt-auto">
                    <flux:button href="/blog/winner-story" variant="ghost" size="sm" icon-trailing="arrow-right" class="-ml-2">
                        @lang('Read Article')
                    </flux:button>
                </div>
            </div>
        </flux:card>

        <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-600 transition-colors">
            <div class="relative h-48 overflow-hidden">
                <img src="https://picsum.photos/seed/lottery3/800/600" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <div class="flex items-center justify-between mb-3">
                    <flux:badge size="sm" color="emerald">News</flux:badge>
                    <span class="text-xs font-medium text-zinc-400">Oct 15, 2025</span>
                </div>

                <flux:heading size="lg" level="3" class="mb-2">
                    New Games Added This Week
                </flux:heading>

                <flux:text class="line-clamp-3 mb-6 flex-1 text-zinc-500 dark:text-zinc-400">
                    We are excited to announce three new instant-win games with better odds and instant payouts. Check them out now!
                </flux:text>

                <div class="mt-auto">
                    <flux:button href="/blog/new-games" variant="ghost" size="sm" icon-trailing="arrow-right" class="-ml-2">
                        @lang('Read Article')
                    </flux:button>
                </div>
            </div>
        </flux:card>
    </div>
</div>