<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public function logout()
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();
        $this->redirect('/', navigate: true);
    }
}; ?>

<flux:header container class="bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 sticky top-0 z-50">
    <flux:brand href="/" name="{{ config('app.name', 'tlania') }}" class="max-w-[130px]">
        </flux:brand>

    <flux:spacer />

    <flux:navbar class="hidden lg:flex">
        <flux:navbar.item href="/" :current="request()->routeIs('home')">Home</flux:navbar.item>
        <flux:navbar.item href="/lotteries" :current="request()->routeIs('lotteries*')">Lotteries</flux:navbar.item>
        <flux:navbar.item href="/results" :current="request()->routeIs('results*')">Results</flux:navbar.item>
        
        <flux:dropdown>
            <flux:navbar.item icon-trailing="chevron-down">Help</flux:navbar.item>
            <flux:navmenu>
                <flux:navmenu.item href="/faqs">FAQs</flux:navmenu.item>
                <flux:navmenu.item href="/contact">Contact</flux:navmenu.item>
                <flux:navmenu.item href="/support">Support Ticket</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>

    <flux:spacer />

    <div class="flex items-center gap-2">
        <flux:dropdown align="end">
            <flux:button variant="subtle" icon="moon" class="dark:hidden" aria-label="Dark mode" />
            <flux:button variant="subtle" icon="sun" class="hidden dark:flex" aria-label="Light mode" />
            
            <flux:menu>
                <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Light</flux:menu.item>
                <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Dark</flux:menu.item>
                <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">System</flux:menu.item>
            </flux:menu>
        </flux:dropdown>

        @guest
            <flux:button href="/login" variant="ghost" class="hidden sm:flex">Log in</flux:button>
            <flux:button href="/register" variant="primary">Sign up</flux:button>
        @endguest

        @auth
            <flux:dropdown align="end">
                <flux:button variant="ghost" icon-trailing="chevron-down" class="flex items-center gap-2">
                    <flux:avatar src="https://i.pravatar.cc/150?u={{ auth()->id() }}" size="sm" />
                    <span class="hidden sm:block">{{ auth()->user()->name }}</span>
                </flux:button>

                <flux:navmenu>
                    <flux:navmenu.item href="/dashboard" icon="squares-2x2">Dashboard</flux:navmenu.item>
                    <flux:navmenu.item href="/profile" icon="user">Profile</flux:navmenu.item>
                    <flux:navmenu.separator />
                    <flux:navmenu.item wire:click="logout" icon="arrow-right-start-on-rectangle" class="text-red-500 hover:text-red-600">Logout</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        @endauth

        <flux:sidebar.trigger class="lg:hidden" />
    </div>
</flux:header>