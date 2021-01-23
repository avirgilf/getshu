<x-jet-action-section>
<x-slot name="title">
        {{ __('') }}
    </x-slot>

    <x-slot name="description">
        {{ __('') }}
    </x-slot>

    <x-slot name="content">

<!-- Authentication-->
<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Sign out') }}
                    </x-jet-responsive-nav-link>
</form> 
</x-slot>

</x-jet-action-section>
