<!DOCTYPE html>
<html lang="en">

@include('parts.header')

<body>
<div class="choose-role-page__wrapper">

    @include('parts.menu')

    <div class="choose-role__wrapper">
        <a href="{{ route('main') }}" class="choose-role__button choose-role__individual">
            <span class="choose-role__label">
                Физическое лицо
            </span>
        </a>
        <a href="{{ route('entity') }}" class="choose-role__button choose-role__entity">
            <span class="choose-role__label">
                Юридическое лицо
            </span>
        </a>
    </div>

    @include('parts.choice_page_footer')
</div>
</body>
</html>