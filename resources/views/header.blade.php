<header class="iam-header">
    <div class="iam-header__section iam-header__section--services">
        {{ $slot }}
    </div>

    <div class="iam-header__section iam-header__section--toggle">
        <button type="button" id="iam-header-menu-toggle" class="iam-header__toggle" data-toggle="menu" data-target="#iam-menu">
            <img src="{{ asset('/img/icons/menu.svg') }}" alt="open menu">
        </button>
    </div>
</header>
