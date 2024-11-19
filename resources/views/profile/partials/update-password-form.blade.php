<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Credits') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('You can add credits to your account here.') }}
        </p>
    </header>

    @if(session('success'))
        <div class="mt-4 text-sm text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('profile.add-credits') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="credits" :value="__('Number of Credits')" />
            <x-text-input id="credits" name="credits" type="number" class="mt-1 block w-full" required min="1" />
            <x-input-error :messages="$errors->addCredits->get('credits')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add Credits') }}</x-primary-button>
        </div>
    </form>

    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Your current credits: ') }} {{ $user->credits }}
    </p>
</section>
