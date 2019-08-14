@if(isset($href))
<a href="{{ $href }}" class="iam-header__item @if($active ?? false) iam-header__item--active @endif">
    {{ $slot }}
</a>
@else
<span class="iam-header__item iam-header__item--disabled">
    {{ $slot }}
</span>
@endif
