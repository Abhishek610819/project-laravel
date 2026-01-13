{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <div class="chat-app">
    <aside class="sidebar">
      <div class="user active">
        <img src="https://i.pravatar.cc/40?img=1" />
        <span>
            <div>{{ Auth::user()->name }}</div></span>
             
      </div>
        <div x-show="open" @click.outside="open = false" 
                     class="d-flex absolute left-0 mt-2 w-48 mr-2 rounded shadow-lg z-10">
                    <a href="{{ route('profile.edit') }}" 
                       class="link-underline link-underline-opacity-0 block px-2 py-2 text-gray-700 hover:bg-gray-100">Edit Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                                class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 btn btn-danger">
                            Logout
                        </button>
                    </form>
                </div>
      <div class="user">
        <img src="https://i.pravatar.cc/40?img=2" />
        <span>Louis Litt</span>
      </div>
      <div class="user">
        <img src="https://i.pravatar.cc/40?img=3" />
        <span>Harvey Specter</span>
      </div>
    </aside>

    <main class="chat-window">
      <header class="chat-header">Harvey Specter</header>

      <div class="messages">
        <div class="message left">How the hell am I supposed to get a jury to believe you when I am not even sure that I do?</div>
        <div class="message right">When you're backed against the wall, break the god damn thing down.</div>
        <div class="message left">Oh yeah, did Michael Jordan tell you that?</div>
        <div class="message right">No, I told him that.</div>
        <div class="message left">What are you talking about? You do what they say or they shoot you.</div>
        <div class="message right">Wrong. You take the gun, or you pull out a bigger one.</div>
      </div>

      <footer class="chat-input">
        <input type="text" placeholder="Write your message..." />
        <button>➤</button>
      </footer>
    </main>
  </div>

</x-app-layout>
