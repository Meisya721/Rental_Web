@extends('layout/frontend')

@section('title', 'My Profile')

@section('konten')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-3xl p-10">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-extrabold text-blue-700">My Profile</h2>
            <p class="text-gray-500 mt-2 text-sm">Informasi akun pribadi Anda</p>
        </div>

        <!-- Profile Section -->
        <div class="grid grid-cols-1 gap-6">
            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">👤 Name</label>
                <div class="bg-gray-50 border border-gray-300 text-gray-800 rounded-lg px-4 py-3 shadow-sm">
                    {{ Auth::user()->name }}
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">📧 Email</label>
                <div class="bg-gray-50 border border-gray-300 text-gray-800 rounded-lg px-4 py-3 shadow-sm">
                    {{ Auth::user()->email }}
                </div>
            </div>
        </div>

        {{-- <!-- Optional: Button to go back or edit -->
        <div class="mt-10 text-center">
            <a href="{{ route('profile.edit') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-200">
                Edit Profile
            </a>
        </div> --}}
    </div>
</div>
@endsection
