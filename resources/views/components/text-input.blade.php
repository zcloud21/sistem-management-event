@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-[#E0E0E0] focus:border-[#27AE60] focus:ring-[#27AE60] rounded-[8px] shadow-sm bg-[#FFFFFF] text-[#1A1A1A]']) }}>
