<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
            <div class="relative h-16 flex justify-between">

                <div class="relative z-0 flex-1 px-2 flex items-center justify-center sm:absolute sm:inset-0">
                    <div class="w-full max-w-xs">
                        <div class="relative">
                            <a href="{{ config('app.url') }}"><img class="h-12 my-0 mx-auto" src="{{ asset('logo/logo.png') }}" alt="Pearson"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="flex justify-center ">
        <div class="p-5">
            <a href="{{ url('/log-viewer') }}" target="_blank">
                <div class="block rounded-lg shadow-lg max-w-sm text-center bg-blue-700">
                    <div class="p-6">
                        <h5 class="text-white text-xl font-medium mb-2">Log Viewer</h5>
                        <p class="text-white text-base mb-4">
                            Log Viewer supports multiple logs! You can see single, daily, and horizon logs.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="p-5">
            <a href="{{ url('/telescope') }}" target="_blank">
                <div class="block rounded-lg shadow-lg bg-purple-700 max-w-sm text-center">
                    <div class="p-6">
                        <h5 class="text-white text-xl font-medium mb-2">Telescope</h5>
                        <p class="text-white text-base mb-4">
                            Telescope provides insight into the requests coming into your application and more.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>