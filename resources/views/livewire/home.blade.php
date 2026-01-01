<div>
    <div class="py-20 text-center space-y-6">
        <flux:heading size="xl" level="1">
            @lang('Superlative Lottery Platform')
        </flux:heading>
        
        <flux:subheading size="lg" class="max-w-2xl mx-auto">
            @lang('Experience the ultimate thrill of winning with our dynamic and ever-evolving lottery system').
        </flux:subheading>

        <div class="flex justify-center gap-4">
            <flux:button variant="primary" href="/lotteries">@lang('Play Now')</flux:button>
            <flux:button variant="ghost" href="/about">@lang('Learn More')</flux:button>
        </div>
    </div>

    <div class="pb-12">
        <div class="flex items-center justify-between mb-8">
            <div>
                <flux:heading size="xl" level="2">@lang('Trending Lotteries')</flux:heading>
                <flux:subheading>@lang('The biggest jackpots happening right now').</flux:subheading>
            </div>
            <flux:button href="/lotteries" variant="ghost" icon-trailing="arrow-right" class="hidden sm:flex">
                @lang('View All')
            </flux:button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <flux:card class="flex flex-col gap-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-3">
                        <div class="size-12 rounded-full bg-red-100 flex items-center justify-center text-2xl">🇺🇸</div>
                        <div>
                            <flux:heading size="lg">Powerball</flux:heading>
                            <span class="text-xs font-medium text-zinc-400">@lang('Next Draw'): @lang('Today')</span>
                        </div>
                    </div>
                    <flux:badge color="red" size="sm" icon="fire">@lang('Hot')</flux:badge>
                </div>

                <div class="py-2">
                    <div class="text-sm text-zinc-500 dark:text-zinc-400 mb-1">@lang('Jackpot')</div>
                    <div class="text-3xl font-bold text-zinc-900 dark:text-white">$450,000,000</div>
                </div>

                <flux:separator variant="subtle" />

                <div class="flex items-center justify-between mt-auto">
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">@lang('Time left')</span>
                        <span class="font-mono text-sm font-medium text-red-500">04:22:15</span>
                    </div>
                    <flux:button variant="primary" href="/lotteries/powerball">@lang('Play Now')</flux:button>
                </div>
            </flux:card>

            <flux:card class="flex flex-col gap-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-3">
                        <div class="size-12 rounded-full bg-blue-100 flex items-center justify-center text-2xl">🇪🇺</div>
                        <div>
                            <flux:heading size="lg">EuroMillions</flux:heading>
                            <span class="text-xs font-medium text-zinc-400">@lang('Next Draw'): @lang('Tomorrow')</span>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="text-sm text-zinc-500 dark:text-zinc-400 mb-1">@lang('Jackpot')</div>
                    <div class="text-3xl font-bold text-zinc-900 dark:text-white">€130,000,000</div>
                </div>

                <flux:separator variant="subtle" />

                <div class="flex items-center justify-between mt-auto">
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">@lang('Time left')</span>
                        <span class="font-mono text-sm font-medium text-lime-500 dark:text-lime-400">1d 12:00:00</span>
                    </div>
                    <flux:button variant="primary" href="/lotteries/euromillions">@lang('Play Now')</flux:button>
                </div>
            </flux:card>

            <flux:card class="flex flex-col gap-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-3">
                        <div class="size-12 rounded-full bg-green-100 flex items-center justify-center text-2xl">🇮🇹</div>
                        <div>
                            <flux:heading size="lg">SuperEnalotto</flux:heading>
                            <span class="text-xs font-medium text-zinc-400">@lang('Next Draw'): @lang('Friday')</span>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div class="text-sm text-zinc-500 dark:text-zinc-400 mb-1">@lang('Jackpot')</div>
                    <div class="text-3xl font-bold text-zinc-900 dark:text-white">€85,000,000</div>
                </div>

                <flux:separator variant="subtle" />

                <div class="flex items-center justify-between mt-auto">
                    <div class="flex flex-col">
                        <span class="text-xs text-zinc-400">@lang('Time left')</span>
                        <span class="font-mono text-sm font-medium text-lime-500 dark:text-lime-400">2d 08:30:00</span>
                    </div>
                    <flux:button variant="primary" href="/lotteries/superenalotto">@lang('Play Now')</flux:button>
                </div>
            </flux:card>
        </div>
        
        <div class="mt-6 sm:hidden">
            <flux:button href="/lotteries" variant="ghost" class="w-full justify-center">@lang('View All')</flux:button>
        </div>
    </div>

    <div class="pb-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <flux:heading size="xl" level="2" class="mb-4">@lang('How to Play & Win')</flux:heading>
            <flux:subheading>
                @lang('Start playing your favorite global lotteries in 3 simple steps').
            </flux:subheading>
        </div>

        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            <div class="hidden md:block absolute top-12 left-[16%] right-[16%] h-0.5 bg-zinc-200 dark:bg-zinc-700 -z-10"></div>

            <div class="flex flex-col items-center space-y-4 p-4">
                <div class="size-24 rounded-2xl bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center shadow-sm">
                    <flux:icon name="user-plus" variant="solid" class="size-10 text-indigo-600 dark:text-indigo-400" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">1. @lang('Create Account')</flux:heading>
                    <flux:text class="max-w-xs mx-auto">
                        @lang('Sign up in seconds and deposit funds, or pay-as-you-go, using your preferred secure payment method').
                    </flux:text>
                </div>
            </div>

            <div class="flex flex-col items-center space-y-4 p-4">
                <div class="size-24 rounded-2xl bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center shadow-sm">
                    <flux:icon name="ticket" variant="solid" class="size-10 text-indigo-600 dark:text-indigo-400" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">2. @lang('Pick Your Numbers')</flux:heading>
                    <flux:text class="max-w-xs mx-auto">
                        @lang('Select a lottery, choose your lucky numbers manually, or use \"Quick Pick\" for random numbers').
                    </flux:text>
                </div>
            </div>

            <div class="flex flex-col items-center space-y-4 p-4">
                <div class="size-24 rounded-2xl bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center shadow-sm">
                    <flux:icon name="trophy" variant="solid" class="size-10 text-indigo-600 dark:text-indigo-400" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">3. @lang('Win & Withdraw')</flux:heading>
                    <flux:text class="max-w-xs mx-auto">
                        @lang('If you win, we\'ll notify you instantly and credit the winnings to your balance for withdrawal').
                    </flux:text>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="flex items-center justify-between mb-8">
            <div>
                <flux:heading size="xl" level="2">{{ __('Latest Winners') }}</flux:heading>
                <flux:subheading>@lang('Real people, real prizes'). <span class="text-lime-500 dark:text-lime-400 font-medium">@lang('You could be next')</span>.</flux:subheading>
            </div>
            <flux:button href="/winners" variant="ghost" icon-trailing="arrow-right" class="hidden sm:flex">
                @lang('View All')
            </flux:button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <flux:card class="bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex items-center gap-4">
                    <flux:avatar src="https://i.pravatar.cc/150?u=1" />
                    <div>
                        <flux:heading size="lg">$500.00</flux:heading>
                        <flux:subheading>@lang('Won by') John Doe</flux:subheading>
                    </div>
                </div>
            </flux:card>

            <flux:card class="bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex items-center gap-4">
                    <flux:avatar src="https://i.pravatar.cc/150?u=2" />
                    <div>
                        <flux:heading size="lg">$1,200.00</flux:heading>
                        <flux:subheading>@lang('Won by') Sarah Smith</flux:subheading>
                    </div>
                </div>
            </flux:card>

            <flux:card class="bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="flex items-center gap-4">
                    <flux:avatar src="https://i.pravatar.cc/150?u=3" />
                    <div>
                        <flux:heading size="lg">$100.00</flux:heading>
                        <flux:subheading>@lang('Won by') Mike Jones</flux:subheading>
                    </div>
                </div>
            </flux:card>
        </div>
                
        <div class="mt-6 sm:hidden">
            <flux:button href="/winners" variant="ghost" class="w-full justify-center">@lang('View All')</flux:button>
        </div>
    </div>
    
    <div class="pb-12">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <flux:heading size="xl" level="2" class="mb-4">@lang('Why Players Trust') <span class="font-brand !font-normal text-lime-500 dark:text-lime-400">tlania</span></flux:heading>
            <flux:subheading>
                @lang('Experience the most transparent and secure lottery platform, designed for players worldwide').
            </flux:subheading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400">
                    <flux:icon name="globe-alt" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Play from Anywhere')</flux:heading>
                    <flux:text>
                        @lang('No matter where you are, access top-tier lotteries. Our platform is optimized for global access on any device').
                    </flux:text>
                </div>
            </flux:card>

            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600 dark:text-green-400">
                    <flux:icon name="shield-check" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Secure & Flexible Banking')</flux:heading>
                    <flux:text>
                        @lang('Deposit, pay and withdraw with confidence. We support multiple payment methods with bank-grade security encryption').
                    </flux:text>
                </div>
            </flux:card>

            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-600 dark:text-purple-400">
                    <flux:icon name="scale" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Provably Fair Draws')</flux:heading>
                    <flux:text>
                        @lang('Winners are selected using') <a href="https://www.random.org" target="_blank" class="underline decoration-zinc-300 underline-offset-2">Random.org</a> @lang('or real-world lottery data, ensuring 100% unbiased results').
                    </flux:text>
                </div>
            </flux:card>

            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600 dark:text-amber-400">
                    <flux:icon name="users" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Total Transparency')</flux:heading>
                    <flux:text>
                        @lang('See exactly who bought tickets before the draw begins. Verify every entry and every winner on our Live Entry List').
                    </flux:text>
                </div>
            </flux:card>

            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-600 dark:text-red-400">
                    <flux:icon name="bell" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Instant Alerts')</flux:heading>
                    <flux:text>
                        @lang('Never miss a win. Get instant notifications via email and in-app alerts for draw results, wins, and promotions').
                    </flux:text>
                </div>
            </flux:card>

            <flux:card class="space-y-4 bg-zinc-50 dark:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
                <div class="size-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                    <flux:icon name="chart-bar" variant="mini" class="size-6" />
                </div>
                <div>
                    <flux:heading size="lg" class="mb-2">@lang('Advanced User Metrics')</flux:heading>
                    <flux:text>
                        @lang('Track your performance with public profiles showing ticket history, winning stats, and participation milestones').
                    </flux:text>
                </div>
            </flux:card>

        </div>
    </div>

    <div class="pb-12"> 
        <div class="flex items-center justify-between mb-8">
            <div>
                <flux:heading size="xl" level="2">{{ __('From the Blog') }}</flux:heading>
                <flux:subheading>@lang('The best tips to help you win big and the latest news from the world of lotteries').</flux:subheading>
            </div>
            <flux:button href="/blog" variant="ghost" icon-trailing="arrow-right" class="hidden sm:flex">
                @lang('View All')
            </flux:button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
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

            <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
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

            <flux:card class="bg-zinc-50 dark:bg-zinc-700 !p-0 overflow-hidden flex flex-col h-full hover:border-zinc-300 dark:hover:border-zinc-500 transition-colors">
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
  
        <div class="mt-6 sm:hidden">
            <flux:button href="/blog" variant="ghost" class="w-full justify-center">@lang('View All')</flux:button>
        </div>
    </div>
</div>