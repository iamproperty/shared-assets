<div class="iam-menu" id="iam-menu">
    <div class="iam-menu__section iam-menu__section--close">
        <button type="button" class="iam-menu__close" id="iam-menu-close-button" data-close="menu" data-target="#iam-menu">
            <img src="{{ asset('/img/icons/orange-close-cross.svg') }}" alt="close menu">
        </button>
    </div>

    {{ $services ?? null }}

    {{ $branches ?? null }}

    {{ $menu ?? null }}
</div>
