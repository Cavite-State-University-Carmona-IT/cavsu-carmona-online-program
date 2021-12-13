@include('scripts.participant.categories-section')
<div  class="relative hidden max-w-full md:block" x-data="{ open: false }" @mouseleave="open = false">
    <button @mouseover="open = true" class="h-10 px-2 text-sm font-semibold text-gray-500 border-0 hover:text-green-500">Category</button>
    <div class="absolute z-50 w-full mt-0 "
        x-show.transition.opacity="open"
        @mouseover="open = true"
        style="display: none;"
    >
        <div class="flex" @mouseleave="open = false">
            {{-- extension service --}}
            <ul>
                <li class="flex justify-between w-full px-5 py-2 text-sm text-gray-700 bg-white border-r-2 border-white hover:text-green-600 hover:border-green-500 whitespace-nowrap" id="btnExt1">
                    <a href="{{ url('extension-service/barangay-entreprenyur') }}" class="">
                        <p>Barangay Entreprenyur</p>
                    </a>
                </li>
                <li class="flex justify-between w-full px-5 py-2 text-sm text-gray-700 bg-white border-r-2 border-white hover:text-green-600 hover:border-green-500 whitespace-nowrap" id="btnExt2">
                    <a href="{{ url('extension-service/basura-ko-ayos-ko') }}" class="">
                        <p>Basura Ko Ayos Ko</p>
                    </a>
                </li>
                <li class="flex justify-between w-full px-5 py-2 text-sm text-gray-700 bg-white border-r-2 border-white hover:text-green-600 hover:border-green-500" id="btnExt3">
                    <a href="{{ url('extension-service/kakayahang-teknikal-tungo-sa-magandang-kinabukasan') }}" class="">
                        <p>Kakayahang Teknikal Tungo Sa Magandang Kinabukasan</p>
                    </a>
                </li>
                <li class="flex justify-between w-full px-5 py-2 text-sm text-gray-700 bg-white border-r-2 border-white hover:text-green-600 hover:border-green-500 whitespace-nowrap" id="btnExt4">
                    <a href="{{ url('extension-service/project-kompyuter') }}" class="">
                        <p>Project Kompyuter</p>
                    </a>
                </li>
                <li class="flex justify-between w-full px-5 py-2 text-sm text-gray-700 bg-white border-r-2 border-white hover:text-green-600 hover:border-green-500 whitespace-nowrap" id="btnExt5">
                    <a href="{{ url('extension-service/project-pisara') }}" class="">
                        <p>Project Pisara</p>
                    </a>
                </li>
            </ul>
            {{-- topics --}}
                {{-- 1 --}}
                <ul class="flex-none whitespace-nowrap" hidden id="isOpenExt1">
                    @foreach($ext1 as $value)
                        <li class="w-full px-5 py-2 text-gray-700 bg-white hover:text-green-600 whitespace-nowrap">
                            <a href="{{ url('extension-service/barangay-entreprenyur/'.$value->link_name()) }}">
                                <p class="text-sm ">{{ $value->name }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- 2 --}}
                <ul class="flex-none whitespace-nowrap" hidden id="isOpenExt2">
                    @foreach($ext2 as $value)
                        <li class="w-full px-5 py-2 text-gray-700 bg-white hover:text-green-600 whitespace-nowrap">
                            <a href="{{ url('extension-service/basura-ko-ayos-ko/'.$value->link_name()) }}">
                                <p class="text-sm ">{{ $value->name }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- 3 --}}
                <ul class="flex-none whitespace-nowrap" hidden id="isOpenExt3">
                    @foreach($ext3 as $value)
                        <li class="w-full px-5 py-2 text-gray-700 bg-white hover:text-green-600 whitespace-nowrap">
                            <a href="{{ url('extension-service/kakayahang-teknikal-tungo-sa-magandang-kinabukasan/'.$value->link_name()) }}">
                                <p class="text-sm ">{{ $value->name }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- 4 --}}
                <ul class="flex-none whitespace-nowrap" hidden id="isOpenExt4">
                    @foreach($ext4 as $value)
                        <li class="w-full px-5 py-2 text-gray-700 bg-white hover:text-green-600 whitespace-nowrap">
                            <a href="{{ url('extension-service/project-kompyuter/'.$value->link_name()) }}">
                                <p class="text-sm ">{{ $value->name }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                {{-- 5 --}}
                <ul class="flex-none whitespace-nowrap" hidden id="isOpenExt5">
                    @foreach($ext5 as $value)
                        <li class="w-full px-5 py-2 text-gray-700 bg-white hover:text-green-600 whitespace-nowrap">
                            <a href="{{ url('extension-service/project-pisara/'.$value->link_name()) }}">
                                <p class="text-sm ">{{ $value->name }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            {{--  --}}
        </div>
    </div>
</div>
