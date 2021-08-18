<div>
    <div class="bg-gray-100 pt-4 shadow-md">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex pb-4">
            <x-jet-nav-link :active="$nav_emails" wire:click="navigation('emails')" class="cursor-pointer">
                {{ __('Emails') }}
            </x-jet-nav-link>
            <x-jet-nav-link :active="$nav_templates" wire:click="navigation('templates')" class="cursor-pointer">
                {{ __('Templates') }}
            </x-jet-nav-link>
        </div>
        <div class="block lg:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link :active="$nav_emails" wire:click="navigation('emails')"
                    class="cursor-pointer">
                    {{ __('Emails') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link :active="$nav_templates" wire:click="navigation('templates')"
                    class="cursor-pointer">
                    {{ __('Templates') }}
                </x-jet-responsive-nav-link>
            </div>
        </div>
    </div>

    @if ($nav_emails)
        @livewire('emails.send-mail', key('send-mails'))
    @endif
    @if ($nav_templates)
        @include('maileclipse::layout.sidebar')
    @endif
</div>
