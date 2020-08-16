<form action="/tweets/{{ $tweet->id }}/dislike" method="POST">
    @method('POST')
    @csrf

    <div class="flex items-center {{ $tweet->isDislikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
        <button type="submit" class="text-xs">
            <div class="float-left mt-1">
                <svg viewBox="0 0 20 20" class=" mr-1 w-3 items-center">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g class="fill-current">
                            <path d="M11.0010436,20 C9.89589787,20 9.00000024,19.1132936 9.0000002,18.0018986 L9,12 L1.9973917,12 C0.894262725,12 0,11.1122704 0,10 L0,8 L2.29663334,1.87564456 C2.68509206,0.839754676 3.90195042,8.52651283e-14 5.00853025,8.52651283e-14 L12.9914698,8.52651283e-14 C14.1007504,8.52651283e-14 15,0.88743329 15,1.99961498 L15,10 L12,17 L12,20 L11.0010436,20 L11.0010436,20 Z M17,10 L20,10 L20,0 L17,0 L17,10 L17,10 Z" id="Fill-97"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="float-right">
                {{ $tweet->dislikes ?: 0 }}
            </div>
        </button>
    </div>
</form>