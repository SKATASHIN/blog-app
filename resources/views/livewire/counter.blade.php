<div>

    こんちには、{{ $name }}さん。
    <br>
    <form wire:submit.prevent="$refresh">
        <input type="text" wire:model.defer="name">

        <div>
            現在の文字数:{{ mb_strlen($name) }}
        </div>

        <input type="submit" wire:click="increment" value="送信する" 
        class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">
    </form>

    <h1>{{ $this->hobby }}</h1>
    
    <hr>
    
    現在のカウンター:{{ $counter }}
    <br>
    <div class="flex">
        <input type="button" wire:click="increment" value="+1増加させる" 
        class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">

        <input type="button" wire:click="increment(10)" value="+10増加させる" 
        class="flex mx-auto mt-6 text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">

        <input type="button" wire:click="$set('counter', 0)" value="0にリセットする" 
        class="flex mx-auto mt-6 text-white bg-red-500 border-0 py-2 px-5 focus:outline-none hover:bg-red-600 rounded">
    </div>

    
</div>
