<div class="slider" id="sliders">
    <div class="slider-head">
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column">
            <a class="nav-link px-3 active" href="/dashboard">
                <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
            </a>
            <a class="nav-link px-3" href="/data-pemilik">
                <i class="fa fa-address-card fa-lg box-icon" aria-hidden="true"></i>Data Pemilik
            </a>
            <a class="nav-link px-3" href="/data-usaha">
                <i class="fa fa-briefcase fa-lg box-icon" aria-hidden="true"></i>Data Usaha
            </a>
            @if (auth()->user()->hasRole('pimpinan'))
                <a class="nav-link px-3" href="/data-user">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Management User
                </a>
            @endif
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-link nav-link">
                    <i class="fa fa-sign-out fa-lg me-3" aria-hidden="true"></i>Logout
                </button>
            </form>
        </nav>
    </div>
</div>
