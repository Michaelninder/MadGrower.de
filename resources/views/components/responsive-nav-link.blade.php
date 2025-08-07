@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-madgrower-main text-start text-base font-medium text-madgrower-main bg-madgrower-main focus:outline-none focus:text-madgrower-main focus:bg-madgrower-main focus:border-madgrower-main transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-madgrower-description hover:text-madgrower-white hover:bg-madgrower-background hover:border-madgrower-main focus:outline-none focus:text-madgrower-white focus:bg-madgrower-background focus:border-madgrower-main transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
