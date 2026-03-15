<header class="bg-white  border-b-2 flex items-center justify-between p-4">
   {{-- LOGO --}}
   <div>
    logo
   </div>

   {{-- GITHUB --}}
   <div>
      github
   </div>

   @auth
   {{-- LOGOUT --}}
      <form class="inline" action=" {{ route('auth.logout') }}" method="POST">
         @csrf
         <button type="submit" class="bg-white border-2 p-2">
            Sair
         </button>
      </form>
   @endauth
   
   @guest
   {{-- LOGIN --}}
      <a href="{{ route('site.login') }}" class="bg-white border-2 p-2">
         Login
      </a>
   @endguest
</header>