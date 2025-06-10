@extends('layout.app')
 
@section('title', 'Profile Settings')
 
@section('contents')
<hr />
<form method="POST" enctype="multipart/form-data" action="">
    <<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Edit Profile</h2>

    <form action="#" method="POST" class="space-y-6">
        <!-- Name -->
        <div class="space-y-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="Lia" class="block w-full rounded-md border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm px-3 py-2" />
        </div>

        <!-- Email -->
        <div class="space-y-2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="lia@example.com" class="block w-full rounded-md border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm px-3 py-2" />
        </div>
    </form>
</div>
</form>
@endsection