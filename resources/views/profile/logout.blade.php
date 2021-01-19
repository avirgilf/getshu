<x-jet-action-section>
<x-slot name="title">
        {{ __('Sign out') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Sign out now') }}
    </x-slot>

    <x-slot name="content">

<!-- Authentication-->
<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
</form> 
</x-slot>

</x-jet-action-section>
