<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-primary text-primary-foreground hover:bg-primary/90 dark:text-white dark:bg-muted' : 'text-primary hover:bg-accent hover:text-accent-foreground dark:text-white dark:hover:bg-muted'  }} flex items-center gap-x-4 py-2 px-3 text-sm font-medium rounded-md transition-colors">
    @if($icon)
        <x-dynamic-component :component="'icons.' . $icon"/>
    @endif
    {{ $slot }}
</a>
