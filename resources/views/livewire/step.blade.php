<div>
    {{-- In work, do what you enjoy. --}}
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps for task</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer" />
    </div>
    <div class="flex justify-center py-2">
        @for ($i = 0; $i < $steps; $i++)
            <input type="text" name="step" class="py-1 px-2 border rounded" placeholder="{{'Describe step '.($i+1)}}">
            <span class="fas fa-times text-red-400 p-2" />
        @endfor
    </div>
</div>
