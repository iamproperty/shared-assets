<nav class="iam-menu__section" aria-describedby="iam-menu-{{ Str::slug($heading) }}-heading">
    <h2 class="iam-menu__heading" id="iam-menu-{{ Str::slug($heading) }}-heading">{{ $heading }}</h2>

    <ul class="iam-menu__items iam-menu__items--{{ Str::slug($heading) }}">
        {{ $slot }}
    </ul>
</nav>
