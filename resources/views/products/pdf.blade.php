<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
 <style>
    
    .container {
      width: 100%;
      height: 98%;
      background-color:#ffd1dc;
      text-align: center;
      align-items:center;
      color:#e91f64;
    }

    .gallery,  {
      height: 12rem;
      width: 11rem;
      border-radius: 50%; /* Make the image circular */
        overflow: hidden; /* Ensure the circular shape is applied */
    }

    .feature {
      height: 32rem;
      width: 40rem;
    }

    .name-gallery{
        display:flex;
        align-items: center;
        justify-content: center;
    }

  </style>
</head>

<body>
  <section class="container">
    
        <div class="name-gallery space-x-1 flex justify-center mt-10">
          <h1 class="text-3xl my-5">{{$product -> name}}</h1>
          <img src="{{ $product-> gallery_image }}" alt="Gallery Image" class="gallery">
        </div>
        <p class="mb-5">{{$product -> description}}</p>
        <img src="{{ $product-> feature_image }}" alt="Feature Image" class="feature">

        <h3 >Price: ${{$product -> price}}</h3>
        <h3 >Shipping Cost: ${{$product -> shipping_cost}}</h3>
        <h3 >Product Status: {{$product -> product_status}}</h3>
     
  </section>


</body>
</html>