<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.index') }}">Amany Residence</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" width="80%"/>
        {{-- <a href="{{ route('admin.index') }}">ND</a> --}}
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dasbor</li>
        <li class="{{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}" class="nav-link">
                <i class="fas fa-tachometer-alt"></i><span>Dasbor</span>
            </a>
        </li>
        <li class="menu-header">Halaman</li>

        <li class="{{ Request::is('admin/perumahan*', ) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.residence.index') }}">
                <i class="fas fa-home"></i><span>Perumahan</span>
            </a>
        </li>

        <li class="{{ Request::is('admin/tipe-perumahan*', ) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.type.index') }}">
                <i class="fas fa-door-closed"></i><span>Tipe Perumahan</span>
            </a>
        </li>

        <li class="{{ Request::is('admin/artikel*',) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.article.index') }}">
                <i class="fas fa-newspaper"></i><span>Artikel</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/kontak-masuk*',) ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.inbox.index') }}">
                <i class="fas fa-envelope"></i><span>Kontak Masuk</span>
            </a>
        </li>

        <li class="dropdown {{ Request::is('admin/tentang-kami*',) ? 'active' : ''}}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-cog"></i> <span>Tentang kami</span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/tentang-kami/keunggulan*',) ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.service.index') }}">Keunggulan</a>
            </li>
            <li class="{{ Request::is('admin/tentang-kami/alur-kerja*',) ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.workflow.index') }}">Alur Kerja</a>
            </li>
            <li class="{{ Request::is('admin/tentang-kami/testimonial*',) ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.testimonial.index') }}">Testimonial</a>
            </li>
            <li class="{{ Request::is('admin/tentang-kami/galeri*',) ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.gallery.index') }}">Galeri</a>
            </li>
          </ul>
        </li>
     </aside>
  </div>
