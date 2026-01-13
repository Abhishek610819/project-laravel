<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Chatbot</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-white border-r">
        <div class="p-4 border-b">
            <h2 class="text-xl font-bold text-indigo-600">Laravel Bot 🤖</h2>
        </div>

        <div class="p-4 space-y-2">
            <button class="w-full bg-indigo-500 text-white py-2 rounded">
                + New Chat
            </button>

            <div class="mt-4 text-sm text-gray-600">
                <p class="font-semibold">Recent Chats</p>
                <ul class="mt-2 space-y-1">
                    <li class="p-2 bg-gray-100 rounded cursor-pointer">
                        Hello Chatbot
                    </li>
                    <li class="p-2 hover:bg-gray-100 rounded cursor-pointer">
                        Laravel Help
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Chat Area -->
    <main class="flex-1 flex flex-col">

        <!-- Header -->
        <header class="bg-white border-b p-4">
            <h1 class="text-lg font-semibold">Chat with Laravel Bot</h1>
        </header>

        <!-- Messages -->
        <div class="flex-1 overflow-y-auto p-6 space-y-4">
            
            <!-- Bot Message -->
            <div class="flex">
                <div class="bg-gray-200 p-3 rounded-lg max-w-lg">
                    👋 Hi! How can I help you today?
                </div>
            </div>

            <!-- User Message -->
            <div class="flex justify-end">
                <div class="bg-indigo-500 text-white p-3 rounded-lg max-w-lg">
                    How to create chatbot in Laravel?
                </div>
            </div>

        </div>

        <!-- Input -->
        <form class="p-4 bg-white border-t flex gap-2">
            <input 
                type="text"
                placeholder="Type your message..."
                class="flex-1 border rounded px-4 py-2 focus:outline-none focus:ring focus:ring-indigo-300"
            >
            <button class="bg-indigo-600 text-white px-6 py-2 rounded">
                Send
            </button>
        </form>

    </main>
</div>

</body>
</html>
