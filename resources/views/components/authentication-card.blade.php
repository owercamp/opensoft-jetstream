<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
    <div class="flex justify-between max-w-xl">
      <div class="mx-3.5">
          {{ $logo }}
      </div>
      <div class="mx-3.5 py-3">
        <x-label class="capitalize">
          {{ __('version') }}: {{ config('app.version') }}
        </x-label>
        <x-label>
          {{ __('Copyright © Javapri') }}
        </x-label>
      </div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
