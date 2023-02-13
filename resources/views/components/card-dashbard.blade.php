@props(['title', 'value', 'icon', 'color', 'link'])
<div class="card card-bordered">
    <div class="card-inner">
        <div class="team">
            <div class="user-card user-card-s2">
                <div class="user-avatar lg bg-{{ $color }}">
                    <span>{{ $icon }}</span>
                    <div class="status dot dot-lg dot-{{ $link }}"></div>
                </div>
                <div class="user-info">
                    <h6>{{ $value }}</h6>
                    <span class="sub-text">{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
