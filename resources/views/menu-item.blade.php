@if(is_string($item))
    <li class="nav-title">{{ $item }}</li>
@elseif(isset($item['submenu']))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            @if(isset($item['icon'])) <i class="nav-icon fa fa-{{ $item['icon'] }}"></i> @endif
            {{ $item['text'] }}
        </a>
        <ul class="nav-dropdown-items">
            @each('coreui::menu-item', $item['submenu'], 'item')
        </ul>
    </li>
@else
    <li class="nav-item {{ $item['class'] }}">
        <a href="{{ $item['href'] }}"
           @if(isset($item['target'])) target="{{ $item['target'] }}" @endif
            class="nav-link"
        >
            @if(isset($item['icon'])) <i class="nav-icon fa fa-{{ $item['icon'] }}"></i> @endif
            {{ $item['text'] }}
        </a>
    </li>
@endif
