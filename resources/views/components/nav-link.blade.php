@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-madgrower-main text-sm font-medium leading-5 text-madgrower-black dark:text-madgrower-white focus:outline-none focus:border-madgrower-main transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-madgrower-description dark:text-madgrower-description hover:text-madgrower-black dark:hover:text-madgrower-white hover:border-madgrower-main dark:hover:border-madgrower-main focus:outline-none focus:text-madgrower-black dark:focus:text-madgrower-white focus:border-madgrower-main dark:focus:border-madgrower-main transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
