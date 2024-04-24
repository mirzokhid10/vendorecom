<section id="wsus__blogs" class="home_blogs">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__section_header">
                    <h3>recent blogs</h3>
                    <a class="see_btn" href="">see more <i class="fas fa-caret-right"></i></a>
                    {{-- {{route('blog')}} --}}
                </div>
            </div>
        </div>
        <div class="row home_blog_slider">
            {{-- @foreach ($recentBlogs as $blog) --}}
            <div class="col-xl-3">
                <div class="wsus__single_blog wsus__single_blog_2">
                    {{-- {{route('blog-details', $blog->slug)}} --}}
                    <a class="wsus__blog_img" href="">
                        <img src="" alt="blog" class="img-fluid w-100">
                        {{-- {{asset($blog->image)}} --}}
                    </a>
                    {{-- {{asset($blog->image)}} --}}
                    <div class="wsus__blog_text">
                        <a class="blog_top red" href="#"></a>
                        {{-- {{$blog->category->name}} --}}
                        <div class="wsus__blog_text_center">
                            {{-- {{route('blog-details', $blog->slug)}} --}}
                            <a href=""></a>
                            {{-- {!!limitText($blog->title, 45)!!} --}}
                            <p class="date"></p>
                            {{-- {{date('M D Y', strtotime($blog->created_at))}} --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}

        </div>
    </div>
</section>
