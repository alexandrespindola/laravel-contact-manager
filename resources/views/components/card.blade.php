@extends('layouts.app')

@section('title', 'Home - Contacts')

@section('content')
    <div class="mx-auto text-center">
        <h1 class="bg-gray-100 text-blue-700 text-4xl py-10">
            Contacts App Manager
        </h1>
    </div>

    <div class="container mx-auto py-4 flex flex-wrap justify-center">
        @forelse ($contacts as $contact)
            <div class="md:flex w-full md:w-1/3 mx-2 my-2 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Name</div>
                    <p class="mt-2 text-gray-500">{{ $contact->name }}</p>
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">E-mail</div>
                    <p class="mt-2 text-gray-500">{{ $contact->email }}</p>
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">Contact</div>
                    <p class="mt-2 text-gray-500">{{ $contact->contact }}</p>
                </div>
            </div>
        @empty
            <div class="w-full">
                <div class="container mx-auto py-4 text-center">
                    <p class="text-red-500 text-2xl">No notes found</p>
                </div>
            </div>
        @endforelse
    </div>
@endsection
