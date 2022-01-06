<div class="mt-2">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="w-full mb-3">
        <div class="flex flex-row-reverse flex-none">
            <select class="text-xs rounded-md ml-2" wire:model="rating">
                <option value="">All</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
            <div x-data="{ modalReview: false}" @click.away="modalReview = false">
                <button @click="modalReview = !modalReview" class="text-xs rounded-md ml-2 border border-gray-400 mx-2 p-3">
                    Rate Now
                </button>
                <div class="mt-20 fixed top-0 left-0 w-full z-40 flex items-center justify-center" x-show="modalReview">
                    <div class="border-1 border-gray-200 rounded-lg shadow-lg  h-auto md:max-w-xl md:p-6 lg:p-8 p-4 bg-white" 
                        x-show="modalReview"  
                        @click.away="modalReview = false"
                        x-on:close-modal-review.window="modalReview = false"
                        >
                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Review
                            </h3>

                            <hr class="my-4">

                            <div class="mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Value
                                </label> 
                                <select class="mb-2 w-64 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    wire:model="rate"
                                >
                                    <option value="">- Select Value -</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            @error('rate')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Title
                                </label> 
                                <input class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    wire:model="comment_title" 
                                    type="text"
                                />
                            </div>
                            @error('title')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                            <div class="mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Body
                                </label> 
                                <textarea class="mb-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    wire:model="comment_body" 
                                    rows="6"
                                ></textarea>
                            </div>
                            @error('body')
                                <p class="text-red-500 text-xs italic mb-3">{{ $message }}</p>
                            @enderror
                            
                            <div class="flex flex-row-reverse">
                                <button class="px-4 py-2 uppercase tracking-wide text-xs font-bold rounded-lg bg-blue-500 text-white" 
                                    wire:click="submit"
                                    wire:loading.attr="disabled" 
                                    >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($reviews->count() != 0)
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
                    <div class="flex justify-between">
                        <div class="flex-auto">
                            <span class="text-sm text-gray-400 font-medium">{{ $review->likes->count() }} likes</span>
                            <span class="text-sm text-gray-400 font-medium ml-2">{{ $review->dislikes->count() }} dislikes</span>
                            {{-- <span class="text-sm text-gray-400 font-medium">{{ $review->unlikes ? $review->unlikes : '0' }} unlikes</span> --}}
                        </div>
                        <div class="flex-none">
                            <button class="ml-2 focus:outline-none" wire:click="like_comment({{ $review->id }})">
                                <i class="{{ $review->bool_like(auth()->user()->id)->like == true ? 'fas':'far' }} fa-thumbs-up fa-xs"></i>
                            </button>
                            <button class="ml-2 focus:outline-none" wire:click="dislike_comment({{ $review->id}})">
                                <i class="{{ $review->bool_like(auth()->user()->id)->like == false ? 'fas':'far' }} fa-thumbs-down fa-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
    @else 
        <p class=" text-gray-600 tracking-wide text-base font-semibold text-left mb-2">No reviews</p>
    @endif
</div>
