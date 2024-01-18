<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="bg-white border border-4 rounded-lg shadow relative m-10">
<div class="bg-white p-8  flex items-center justify-center ">
        <!-- Adding w-16 and h-16 to set width and height to 4rem (16 pixels) -->
        <img src="https://images.rawpixel.com/image_transparent_png_500/cHJpdmF0ZS90ZW1wbGF0ZXMvZmlsZXMvY3JlYXRlX3Rvb2wvMjAyMy0wNy8wMWg1bTZ3Y2VibTA2cWZlMjN3aGc5eG5zMS1sa2pkeW9iMi5wbmc.png"  class="w-24">
    </div>
    <div class="flex items-start justify-center p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Create a product
        </h3>
       
    </div>
    <form method = "post" action = "{{route('product.store')}}">
    <div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
        @csrf  
        @method('POST')
    <div class="p-6 space-y-6">
        <form action="#">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Product Name</label>
                    <input type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>
                    <input type="text" name="price" id="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5" placeholder="50.20" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                    <input type="text" name="description"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5" placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="feature_image" class="text-sm font-medium text-gray-900 block mb-2">Feature Image</label>
                    <input type="text" name="feature_image"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5"  required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="gallery_image" class="text-sm font-medium text-gray-900 block mb-2">Gallery Image</label>
                    <input type="text" name="gallery_image"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5"  required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="shipping_cost" class="text-sm font-medium text-gray-900 block mb-2">Shipping Cost</label>
                    <input type="text" name="shipping_cost"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-customPink focus:border-customPink block w-full p-2.5"  required="">
                </div>

                <!-- New div for Product Status -->
            <div class="col-span-6 sm:col-span-3">
                <label class="text-sm font-medium text-gray-900 block mb-2">Product Status</label>
                <div class="flex items-center">
                    <input type="radio" id="status_active" name="product_status" value="active" class="form-radio text-customPink focus:ring-customPink focus:border-customPink h-4 w-4">
                    <label for="status_active" class="ml-2">Active</label>
                </div>
                <div class="flex items-center mt-2">
                    <input type="radio" id="status_inactive" name="product_status" value="inactive" class="form-radio text-customPink focus:ring-customPink focus:border-customPink h-4 w-4">
                    <label for="status_inactive" class="ml-2">Inactive</label>
                </div>
            </div>

            <div>

            </div>
            </div>
        
    </div>

    <div class="p-6 border-t border-gray-200 rounded-b">
        <input type = "submit" class="text-white bg-customPink hover:bg-customPink focus:ring-4 focus:ring-customPink font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    </div>

</div>
</form>

</html>