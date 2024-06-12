<th {{ $attributes->merge(['class' => 'ps-6 py-3 text-start', 'scope' => 'col']) }}>
    <label class="flex">
        {{ $slot }}
    </label>
</th>
