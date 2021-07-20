<nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
        <i class="mr-3 fas fa-tachometer-alt"></i>
        Dashboard
    </a>
    <a href="{{ route('admin.categories.index') }}" class="flex items-center py-2 pl-4 text-white active-nav-link nav-item">
        <i class="mr-3 fas fa-sticky-note"></i>
        Categories
    </a>
    <a href="{{ route('admin.tags.index') }}" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
        <i class="mr-3 fas fa-table"></i>
        Tags
    </a>
    <a href="{{ route('admin.posts.index') }}" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
        <i class="mr-3 fas fa-align-left"></i>
        Posts
    </a>
    <form method="POST" action="{{ route('logout') }}" class="absolute bottom-0 flex items-center justify-center w-full py-4 text-white upgrade-btn active-nav-link">
        @csrf

        <i class="mr-3 fas fa-sign-out-alt"></i>
        <button :href="route('logout')"
                onclick="event.preventDefbuttonult();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </button>
    </form>
</nav>