<ul class="pc-navbar">
    <li class="pc-item pc-caption">
        <label>Menu</label>
    </li>
    <li class="pc-item"><a href="{{ route('dashboard') }}" class="pc-link "><span class="pc-micon"><i data-feather="layout"></i></span><span class="pc-mtext">Dashboard</span></a></li>
    <li class="pc-item pc-caption">
        <label>Master Akun</label>
    </li>
    <li class="pc-item"><a href="{{ route('dashboard.akun') }}" class="pc-link "><span class="pc-micon"><i data-feather="user"></i></span><span class="pc-mtext">Profile Anda</span></a></li>

    {{-- <li class="pc-item pc-caption">
        <label>Transaksi</label>
    </li> --}}
    <li class="pc-item pc-caption">
        <label>Transaksi</label>
    </li>
    <li class="pc-item"><a href="{{ route('dashboard.create') }}" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Buat Pesanan</span></a></li>
    <li class="pc-item"><a href="{{ route('dashboard.pesananku') }}" class="pc-link "><span class="pc-micon"><i data-feather="shopping-cart"></i></span><span class="pc-mtext">Riwayat Pemesanan</span></a></li>

</ul>