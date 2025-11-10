@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-[#D4CDC4] dark:border-[#504238] focus:border-[#9C8B7B] dark:focus:border-[#C17A4A] focus:ring-[#9C8B7B] dark:focus:ring-[#C17A4A] rounded-md shadow-sm bg-[#FAF7F2] dark:bg-[#251E19] text-[#3D2817] dark:text-[#F5F1ED]']) }}>
