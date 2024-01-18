@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-customPink  focus:ring-customPink rounded-md shadow-sm']) !!}>
