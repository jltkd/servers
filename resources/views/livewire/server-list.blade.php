<div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        @foreach($servers as $server)
        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <div class="flex-1 min-w-0">
                <a href="#" target="_blank" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">
                        {{ $server->name }}
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                        {{ $server->ip_address }}
                    </p>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
