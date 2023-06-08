<x-app-layout>
    <div class="container  py-8">

        <div class="grid grid-cols-1 md:grid-cols-2  lg:grid-3 gap-6  ">
            @foreach ($post as $item)
                <article class="w-full h-60 bg-cover bg-center @if($loop->first) md-col-span-2 @endif" class="" style="background-image: url({{Storage::url($item->img->url)}})">
                    <div class="w-full h-full px-8  flex flex-col justify-center">
                        {{-- tags de los post --}}
                        <div>
                            @foreach ($item->tag as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-500 text-white"> {{$tag->name}} </a>
                            @endforeach
                        </div>
                        {{-- imagenes --}}
                           <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="">
                                {{$item->name}}
                            </a>
                           </h1>
                    </div>
                </article>
            @endforeach

        </div>

        <div class="mt-4">
            {{$post->links()}}
        </div>
    </div>
</x-app-layout>

