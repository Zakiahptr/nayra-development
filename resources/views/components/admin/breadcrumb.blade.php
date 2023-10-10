
<div class="section-header">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">{{ $menu_1 }}</div>
        @if (isset($menu_2))
        <div class="breadcrumb-item">{{ $menu_2 }}</div>
        @endif
        @if (isset($menu_3))
        <div class="breadcrumb-item">{{ $menu_3 }}</div>
        @endif
    </div>
</div>
