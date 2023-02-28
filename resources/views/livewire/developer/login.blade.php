<div>
    <div class="flex-1 bg-primary" style="height:calc(100vh - 64px);">
        <div class="relative z-10 grid flex-col min-h-screen-custom md:grid-cols-1">
            <div class="flex flex-col items-center justify-center px-4 py-8 mt-44">
                <div class="w-full max-w-xl mx-auto my-auto p-6 md:p-8 shadow-custom rounded-lg bg-white">
                    <div>
                        <h2 class="md:text-2xl text-xl font-bold text-gray-900">
                            Developer Sign In
                        </h2>
                        <div class="scale-100 bg-primary-500 rounded-sm md:h-1.5 h-1 md:w-14 w-12 mt-1"></div>
                    </div>
                    <x-banner />

                    <div>
                        <form class="space-y-6" method="POST" wire:submit.prevent="postLogin">
                            @csrf
                            <div>
                                <label for="username" class="block text-gray-700 font-bold">Username</label>
                                <div class="mt-1">
                                    <input wire:model.defer="username" id="username" type="text" name="username"
                                        required autofocus
                                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                </div>
                                @error('username')
                                    <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block text-gray-700 font-bold">Password</label>
                                <div class="mt-1">
                                    <input id="password" wire:model.defer="password" class="block mt-1 w-full"
                                        type="password" name="password" required
                                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                                </div>
                                @error('password')
                                    <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex justify-center py-2.5 px-4 rounded shadow-sm text-sm font-medium text-white bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">Sign
                                    In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
