@extends('layout.master')

@section('content')

    <div class="container p-5">
        <h2 class="text-center mb-3">Gallery</h2>
        <div class="owl-carousel">
            <div class="item"><img src="{{asset('public/img/gallery/g1.jpeg')}}" alt="Image 1"></div>
            <div class="item"><img src="{{asset('public/img/gallery/g1.jpeg')}}" alt="Image 2"></div>
            <div class="item"><img src="{{asset('public/img/gallery/g1.jpeg')}}" alt="Image 3"></div>
        <!-- Add more slides as needed -->
        </div>
    </div>



@endsection

@section('script')

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 3, // Number of items to display
            loop: true, // Loop the carousel
            margin: 10, // Margin between items
            autoplay: true, // Autoplay the carousel
            autoplayTimeout: 3000, // Autoplay interval in milliseconds
            responsive: {
                0: {
                    items: 1 // Number of items to display on small screens
                },
                768: {
                    items: 2 // Number of items to display on medium screens
                },
                992: {
                    items: 3 // Number of items to display on large screens
                }
            }
        });
    });
</script>
@endsection