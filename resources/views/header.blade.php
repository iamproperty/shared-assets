<header class="iam-header">
    <div class="iam-header__services">
        {{ $slot }}
    </div>

    <div class="iam-header__menu-toggle">
        <button type="button" id="iam-header-menu-toggle">
            <img src="{{ asset('/img/icons/menu.svg') }}" alt="open menu">
        </button>
    </div>
</header>
