<section>
<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Description') }}
    </h2>
    <p class="mt-1 text-sm text-gray-600">
        {{ __("Tell us who you are !!!") }}
    </p>
    </header>

    <form id="description" method="post" action="????">
        @csrf
        <div>
            <x-input-label for="description"/>
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('description')" /> --}}
        </div>
        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>