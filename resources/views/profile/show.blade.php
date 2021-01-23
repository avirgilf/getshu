<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div>        
    
    
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <?php $profil=Auth::user()->profil;  $image=Auth::user()->profile_photo_path; $countryid=Auth::user()->countryid; 
        $gender=Auth::user()->gender; $phone=Auth::user()->phone_number; 

        if (!isset($image) ): ?>

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

        <?php elseif(isset($image) && !isset($phone)): ?>

                <div class="mt-10 sm:mt-0">
                    @include('profile.more-profile-details')
                </div>
                
                <x-jet-section-border />

        <?php else: ?>

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

                <div class="mt-10 sm:mt-0">
                    @include('profile.more-profile-details')
                </div>
                
                <x-jet-section-border />
<!--
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif-->

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>                 


            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @include('profile.logout')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            <?php endif;?>
        </div>
    </div>
</x-app-layout>
