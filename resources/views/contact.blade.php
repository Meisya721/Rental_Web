@extends('layout.app')

@section('title', 'Pesan Masuk')
 
@section('contents')
    <div class="container mx-auto px-4 py-6">
        <h1 class="font-bold text-2xl mb-6">Daftar Pesan Masuk</h1>
        
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Nama</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Subject</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Pesan</th>
                        <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($messages as $message)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-4 whitespace-nowrap">{{ $message->id }}</td>
                            <td class="py-4 px-4 whitespace-nowrap">{{ $message->nama }}</td>
                            <td class="py-4 px-4 whitespace-nowrap">{{ $message->email }}</td>
                            <td class="py-4 px-4">{{ $message->subject }}</td>
                            <td class="py-4 px-4 max-w-xs truncate">{{ $message->pesan }}</td>
                            <td class="py-4 px-4 whitespace-nowrap">{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection