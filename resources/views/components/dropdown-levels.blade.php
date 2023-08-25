@props(['level' => "first"])

@php
  switch($level){
    case 'first':
      $dataDropdownPlacement = '';
      $classButtom = 'inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150';
      $classSpan = 'inline-flex rounded-md';
      $d = "m1 1 4 4 4-4";
      break;
    case 'second':
      $dataDropdownPlacement = 'right-start';
      $classButtom = 'inline-flex items-center justify-between w-full py-2 hover:bg-orange-300 dark:hover:bg-indigo-700 dark:hover:text-white';
      $classSpan = 'inline-flex rounded-md w-full';
      $d = "m1 9 4-4-4-4";
      break;
  }
@endphp


<span class="{{ $classSpan }}">
  <button id="{{ $title }}DropdownButton" data-dropdown-toggle="dropdown{{ $title }}" data-dropdown-placement="{{ $dataDropdownPlacement }}" {{ $attributes->merge(['class' => $classButtom ])}} type="button">
    <div class="w-full">
      {{ $title }}
    </div>
    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 8">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $d }}" />
    </svg></button>
</span>
<!-- Dropdown menu -->
<div id="dropdown{{ $title }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{ $title }}DropdownButton">
    {{ $content }}
  </ul>
</div>