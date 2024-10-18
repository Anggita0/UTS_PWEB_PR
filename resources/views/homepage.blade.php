@extends('components.template')

@section('title', 'Homepage')

@section('content')
<div class="my-10 mx-20">
    <h1 class="text-2xl font-bold mb-4" style="color: red;">Contact Karyawan</h1>
    <p class="mb-4">Berikut ini data contact Karyawan</p>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-pink-300">
            <thead class="bg-pink-200">
                <tr>
                    <th class="border border-pink-300 px-4 py-2 text-left">No.</th>
                    <th class="border border-pink-300 px-4 py-2 text-left">Nama Karyawan</th>
                    <th class="border border-pink-300 px-4 py-2 text-left">Email</th>
                    <th class="border border-pink-300 px-4 py-2 text-left">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-pink-100' : 'bg-pink' }}">
                    <td class="border border-pink-300 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-pink-300 px-4 py-2">{{ $contact['name'] }}</td>
                    <td class="border border-pink-300 px-4 py-2">{{ $contact['email'] }}</td>
                    <td class="border border-pink-300 px-4 py-2">{{ $contact['phone'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection