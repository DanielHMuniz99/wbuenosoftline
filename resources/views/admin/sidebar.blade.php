<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products') }}">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg>
                Produtos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customers') }}">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg>
                Clientes
            </a>
        </li>
        <li class="nav-item mt-auto">
            <a class="nav-link" href="/admin/logout" target="_self">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                </svg>
                Deslogar
            </a>
        </li>
    </ul>
</div>