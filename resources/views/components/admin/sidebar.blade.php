<aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
    <div class="p-6">
        <a href="{{ route('admin.dashboard') }}" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
        <a href="{{ route('admin.posts.create') }}" class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
            <i class="mr-3 fas fa-plus"></i> New Post
        </a>
    </div>
    <nav class="pt-3 text-base font-semibold text-white">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item {{ request()->is("admin/dashboard") ? "active-nav-link" : "" }}">
            <i class="mr-3 fas fa-tachometer-alt"></i>
            Dashboard
        </a>
        <a href="{{ route('admin.categories.index') }}" class="flex items-center py-4 pl-6 text-white nav-item {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active-nav-link" : "" }}">
            <i class="mr-3 fas fa-sticky-note"></i>
            Categories
        </a>
        <a href="{{ route('admin.tags.index') }}" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item {{ request()->is("admin/tags") || request()->is("admin/tags/*") ? "active-nav-link" : "" }}">
            <i class="mr-3 fas fa-table"></i>
            Tags
        </a>
        <a href="{{ route('admin.posts.index') }}" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item {{ request()->is("admin/posts") || request()->is("admin/posts/*") ? "active-nav-link" : "" }}">
            <i class="mr-3 fas fa-align-left"></i>
            Posts
        </a>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="absolute bottom-0 flex items-center justify-center w-full py-4 text-white upgrade-btn active-nav-link">
        @csrf

        <i class="mr-3 fas fa-sign-out-alt"></i>
        <button :href="route('logout')"
                onclick="event.preventDefbuttonult();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </button>
    </form>
</aside>