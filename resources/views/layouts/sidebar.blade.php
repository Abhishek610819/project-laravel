   <x-slot name="sidebar">
   <aside
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed z-40 inset-y-0 left-0 w-72 bg-[#2f3e4e] text-white
               transform transition-transform duration-300
               lg:translate-x-0 lg:static lg:inset-0">

        <!-- Profile -->
        <div class="h-16 flex items-center gap-3 px-4 border-b border-gray-600">
            <img src="https://i.pravatar.cc/40" class="rounded-full">
            <span class="font-semibold">Mike Ross</span>
        </div>

        <!-- Users -->
        <div class="flex-1 overflow-y-auto">
            @foreach(['Louis Litt', 'Harvey Specter'] as $user)
                <div
                    @click="sidebarOpen = false"
                    class="flex items-center gap-3 px-4 py-3 hover:bg-[#3b4d61] cursor-pointer">

                    <img src="https://i.pravatar.cc/40?u={{ $user }}" class="rounded-full">
                    <div class="min-w-0">
                        <p class="font-medium truncate">{{ $user }}</p>
                        <p class="text-xs text-gray-300 truncate">
                            Last message preview...
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </aside>
    </x-slot>