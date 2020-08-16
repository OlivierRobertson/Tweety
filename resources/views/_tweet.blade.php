<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
        <img src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                height="50"
                width="50">
        </a>
    </div>

    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-2">
                {{ $tweet->user->name }}
            </h5>
        </a>

         <p class="text-sm mb-3">
             {{ $tweet->body }}
         </p>

        <div class="flex">
            <x-like-button :tweet="$tweet" />
            <x-dislike-button :tweet="$tweet" />
        </div>
    </div>
</div>


