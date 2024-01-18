<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>

<x-app-layout>
<body class = "min-h-screen flex items-center justify-center">
<section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0">
<div class = "flex items-center">
<h1 class="text-6xl font-bold text-customPink mx-auto hover:text-yellow-500 transition-all duration-300">Winter Collection</h1>
<a href = "{{route('product.create')}}" class = "p-2 bg-customPink text-white rounded-md hover:bg-customPink">Add a product</a>
</div>
<br>
<section
        class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start ">
    @foreach($products as $product)
   
        <section class="p-5 py-10 bg-purple-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
            <img src="{{ $product->gallery_image }}" alt="">
            <div class="space-x-1 flex justify-center mt-10">
                
            </div>
            <h1 class="text-3xl my-5">{{$product -> name}}</h1>
            <p class="mb-5">{{$product -> description}}</p>
            <h2 class="font-semibold mb-5">Price: ${{$product -> price}}</h2>

            
            
        <div class="flex space-x-4 justify-center mb-4">
        <!-- Edit Button -->
        <a href = "{{route('product.edit', ['product' => $product])}}" class="flex p-2 bg-customPink rounded-xl hover:rounded-3xl hover:bg-yellow-500 transition-all duration-300 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
        </a>

        <!-- Delete Button -->
        <form method="post" action="">
         

            <button type="submit" class="flex p-2 bg-customPink rounded-xl hover:rounded-3xl hover:bg-yellow-500 transition-all duration-300 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </form>
            
        <button class="p-2 px-6 bg-customPink text-white rounded-md hover:bg-customPink">Download PDF</button>

        </section>
        @endforeach
        </section>

        </section>
      
</body>
</x-app-layout>
</html>