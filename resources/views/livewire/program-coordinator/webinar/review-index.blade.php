<div class="mt-2">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex flex-row mb-3">
        <p class="text-sm font-bold tracking-wide text-gray-800 my-2 flex-auto">Webinar <span class="text-gray-500">Reviews</span></p>
        <div class="flex flex-row-reverse flex-none">
            {{-- <select class="text-xs rounded-md ml-2" wire:model="sortBy">
                <option value="0">Latest</option>
                <option value="1">First</option>
            </select> --}}
            <select class="text-xs rounded-md ml-2" wire:model="rating">
                <option value="all">All</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    @foreach($reviews as $review)
        <div class="flex w-full p-4 bg-gray-100 rounded-lg mb-3">
            <div class="flex-none">
                <img class="object-cover w-12 h-12 rounded-full border-gray-200 border" src="http://localhost:8000/storage/image/users/{{ $review->user->profile_photo_path ? $review->user->profile_photo_path : 'default.jpg' }}">
            </div>
            <div class="flex-auto ml-2">
                <div class="flex flex-row">
                    <div class="text-sm font-semibold text-gray-800 pt-1">
                        {{ $review->user->first_name }} {{ $review->user->middle_name ? $review->user->middle_name[0] .'.' : '' }} {{ $review->user->last_name }}
                    </div>
                    <div class="ml-2">
                        @for($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-{{ $i <= $review->rate ? 'yellow-400':'gray-300' }} inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                </div>
                <div x-data="{ seemore: false }">
                    <p class="text-sm font-semibold tracking-wide text-gray-500 line-clamp-2 cursor-pointer"  
                        :class="{ 'line-clamp-none': seemore }"
                        @click="seemore = !seemore">
                        <span class=" italic text-gray-800">{{ $review->comment_title }}</span>
                        {{ $review->comment_body }}
                    </p>
                </div>
                <div class="flex flex-row">
                    <div class="flex-auto">
                        <span class="text-sm text-gray-400 font-medium">{{ $review->likes->count() }} likes</span>
                        <span class="text-sm text-gray-400 font-medium ml-2">{{ $review->dislikes->count() }} dislikes</span>
                    </div>
                    {{-- <div class="flex-none" >
                        @if($review->deleted_at)
                            <i class="fas fa-trash-restore fa-xs text-gray-400"></i>
                        @else
                            <i class="fas fa-trash-alt fa-xs text-red-400"></i>
                        @endif
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach 
</div>
