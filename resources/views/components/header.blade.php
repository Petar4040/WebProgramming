<header class="bg-blue-900 text-white p-4" x-data="{ open: false }">
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-semibold">
      <a href="{{ url('/') }}">Workopia</a>
    </h1>
    <nav class="hidden md:flex items-center space-x-4">
      <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-link>
      @auth
      <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-nav-link>
      @if(auth()->user()->isAdmin())
      <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
      @endif
      <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="text-white hover:underline py-2">
          <i class="fa fa-sign-out-alt mr-1"></i> Logout
        </button>
      </form>
      @else
      <x-nav-link url="/login" :active="request()->is('login')">Login</x-nav-link>
      <x-nav-link url="/register" :active="request()->is('register')">Register</x-nav-link>
      @endauth
    </nav>
    <button @click="open = !open" class="text-white md:hidden flex items-center">
      <i class="fa fa-bars text-2xl"></i>
    </button>
  </div>
  <nav
    x-show="open"
    @click.away="open = false"
    class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
  >
    <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
    @auth
    <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">Dashboard</x-nav-link>
    @if(auth()->user()->isAdmin())
    <a
      href="{{ url('/jobs/create') }}"
      class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
    >
      <i class="fa fa-edit"></i> Create Job
    </a>
    @endif
    <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2">
      @csrf
      <button type="submit" class="hover:bg-blue-700 w-full text-left">
        <i class="fa fa-sign-out-alt mr-1"></i> Logout
      </button>
    </form>
    @else
    <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">Login</x-nav-link>
    <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
    @endauth
  </nav>
</header>