<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Update Profil Umum --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input id="name" name="name" type="text" class="form-input w-full" value="{{ old('name', $user->name) }}">
                            @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input id="email" name="email" type="email" class="form-input w-full" value="{{ old('email', $user->email) }}">
                            @error('email') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- No HP -->
                        <div class="mb-4">
                            <label for="phone" class="block font-medium text-sm text-gray-700">No HP</label>
                            <input id="phone" name="phone" type="text" class="form-input w-full" value="{{ old('phone', $user->profile->phone ?? '') }}">
                            @error('phone') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="mb-4">
                            <label for="address" class="block font-medium text-sm text-gray-700">Alamat</label>
                            <input id="address" name="address" type="text" class="form-input w-full" value="{{ old('address', $user->profile->address ?? '') }}">
                            @error('address') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Foto Profil -->
                        <div class="mb-4">
                            <label for="photo" class="block font-medium text-sm text-gray-700">Foto Profil</label>
                            @if ($user->profile?->photo)
                                <img src="{{ asset('storage/' . $user->profile->photo) }}" class="w-20 h-20 rounded-full mb-2">
                            @endif
                            <input id="photo" name="photo" type="file" class="form-input w-full">
                            @error('photo') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="mt-4">
                            <button type="submit" class="bg-black text-white px-4 py-2 rounded">
                            Simpan Perubahan
                        </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Ubah Password --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Hapus Akun --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

