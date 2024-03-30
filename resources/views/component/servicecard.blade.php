<div class="swiper-slide" style="width: 371px; margin-right: 30px;" role="group"  data-swiper-slide-index="1">

    <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
        <div class="position-relative">
            <a href="#"><img src="public/images/Services/{{ $image }}" alt="" data-no-retina=""></a>
            <a href="#" class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Finance</a>
        </div>

        <div class="bg-white">
            <div class="ps-65px pe-65px pt-30px pb-30px text-center ">
                <a href="#" class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">{{ $title }}</a>
                <p>{{$short_desc}}
                    <br>
                    <span class="collapse" id="servicecard{{ $id }}">{{$long_desc}}</span>
                    <a class="btn btn-link toggle-text" data-bs-toggle="collapse"
                        href="#servicecard{{ $id }}" role="button" >View
                        More</a> 
                </p>
            </div>
            <div
                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                <a href="#" class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                    <span>
                        <span class="btn-text">Explore services</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function() {
        $(".toggle-text").click(function() {
            var $this = $(this);
            $this.text($this.text() == 'View More' ? 'View More' : 'View Less');
        });
    })
</script>

