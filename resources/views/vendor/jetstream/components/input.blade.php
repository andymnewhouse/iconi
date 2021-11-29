@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:text-gray-200 dark:bg-gray-800 dark:border-gray-600 focus:border-cyan-300 focus:ring focus:ring-cyan-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
