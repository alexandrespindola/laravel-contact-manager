@extends('layouts.app')

@section('title', 'Login - Contacts')

@section('content')
    <div class="mx-auto text-center">
        <h1 class="bg-gray-100 text-blue-700 text-4xl py-10">
            Contacts
        </h1>
    </div>

    <div class="w-full">
        <div class="container mx-auto flex flex-row justify-center py-10">
            @component('components.button')
                @slot('buttonText', 'Create new contact')
                @slot('buttonRoute', route('contacts.create'))
            @endcomponent
        </div>
    </div>

    <div class="container mx-auto py-7 flex flex-wrap justify-center">
        @forelse ($contacts as $contact)
            <div class="md:flex w-full md:w-1/4 mx-2 my-2 bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Name</div>
                    <p class="mt-2 text-gray-500">{{ $contact->name }}</p>
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">E-mail</div>
                    <p class="mt-2 text-gray-500">{{ $contact->email }}</p>
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mt-4">Contact</div>
                    <p class="mt-2 text-gray-500">{{ $contact->contact }}</p>
                    <div class="flex flex-row pt-3">
                        <a href="{{ route('contacts.show', $contact->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 flex flex-row gap-1">
                            SHOW
                            <span class="material-symbols-outlined" style="font-size: 20px">
                                visibility
                            </span>
                        </a>
                        <a href="{{ route('contacts.edit', $contact->id) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2 flex flex-row gap-1">
                            EDIT
                            <span class="material-symbols-outlined" style="font-size: 20px">
                                edit_square
                            </span>
                        </a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit"
                                class="flex flex-row gap-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                                value="DELETE">
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="w-full">
                <div class="container mx-auto py-4 text-center">
                    <p class="text-red-500 text-2xl">No contacts found</p>
                </div>
            </div>
        @endforelse

    @endsection
