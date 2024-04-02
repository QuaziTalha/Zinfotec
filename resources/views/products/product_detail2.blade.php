@extends('layout')
@section('content')
    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex: 20%;
            margin-right: 5px;
            cursor: pointer;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        
        }
        .big-img  {
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .sproduct input{
            width: 70px;
            height: 40px;   
            font-size: 20px;
            margin-right: 10px;
            padding-left: 10px;
            padding-right: 10px

        }
        .buy-btn{
            background: #0090d2;
            color: white;
            padding:5px 15px;
            border: none;
            border-radius: 10%;
        }
        .border_set{
            border: 5px solid #02283a;
            align-content: center;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
    </style>
    
    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img class="img-fluid w-100 pd-10" id="MainImg" src="public/images/Products/P6.png" data-main-image alt="">

                <div class="small-img-group pt-1">
                    <div class="small-img-col">
                        <img src="public/images/Products/IndoorsP6.png" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="public/images/Products/IndoorsP6-[2].png" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="public/images/Products/IndoorsP6[1].png" width="100%" class="small-img" alt="">
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 border_set">
                <h3 class="py-4 text-black">Indoors P6</h3>
                <h2 class="">$200</h2>                
                
                <h4 class="my-5 text-black">Product Details</h4>
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat nostrum quam repellendus voluptatem, nemo ab aspernatur magni harum consectetur possimus deserunt! Itaque perspiciatis adipisci assumenda repudiandae dolorum veritatis autem illo.</span>
            </div>
        </div>
    </section>

    <script>
        var MainImg = document.querySelector('[data-main-image]');
        var SmallImg = document.querySelectorAll('.small-img');
       /*  var previousSmallImg = null; */

        SmallImg.forEach(function(smallImg) {
            smallImg.onclick = function() {
               /*  if (previousSmallImg !== null) {
                    previousSmallImg.style.display = 'block';
                }
                smallImg.style.display = 'none';
                previousSmallImg = smallImg; */
                MainImg.src = smallImg.src;
            };
        });
    </script>
@endsection
