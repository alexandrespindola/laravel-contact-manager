@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center p-3 dark: text-sm font-medium leading-5 text-white dark:text-gray-100 focus:outline-none focus: transition duration-150 ease-in-out'
            : 'inline-flex items-center p-3 bg-blue-700 rounded-md text-sm font-medium leading-5 text-white dark:text-white hover:text-gray-300 dark:hover:text-gray-300 focus:outline-none focus:text-white dark:focus:text-white focus: dark:focus: transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
