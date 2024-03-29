<!--================ Start About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="row h_blog_item">
            <div class="col-lg-6">
                @php
                   // dd($aboutUs);
                @endphp
                <div class="h_blog_img">
                    <img class="img-fluid" src="{{asset('img/about_us/' . $aboutUs->img)}}" alt="{{$aboutUs->img}}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h_blog_text">
                    <div class="h_blog_text_inner left right">
                        <h4>{{$aboutUs->title}}</h4>
                       {!! $aboutUs->text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Area =================-->

<!--================ Start Feature Area =================-->
<section class="feature_area section_gap_top title-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 text-white"> @lang('lang.main.advantages')</h2>
                    <p>
                        @lang('lang.main.subAdvantages')
                    </p>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach($advantages as $item)
                <div class="col-lg-4 col-md-6 row-flex">
                    <div class="single_feature">
                        <div class="icon"><span class="{{$item->icon}}"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">{{$item->title}}</h4>
                            <p>
                                {{$item->text}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ End Feature Area =================-->

<!--================ Start Testimonial Area =================-->
<div class="testimonial_area section_gap">

</div>

<!--================ End Testimonial Area =================-->