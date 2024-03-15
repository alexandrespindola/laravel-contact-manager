@if($message = Session::get('success'))
    <div x-data="{ open: true }" x-show="open" class="text-white text-bold bg-green-700 flex flex-row justify-center gap-3 p-3">
        <strong>{{ $message }}</strong>
        <button type="button" @click="open = false" class="close" data-dismiss="alert"><span class="material-symbols-outlined">
            close
            </span></button>
    </div>
@endif

@if($message = Session::get('danger'))
    <div x-data="{ open: true }" x-show="open" class="text-white text-bold bg-red-600 flex flex-row justify-center gap-3 p-3">
        <strong>{{ $message }}</strong>
        <button type="button" @click="open = false" class="close" data-dismiss="alert"><span class="material-symbols-outlined">
            close
            </span></button>
    </div>
@endif
