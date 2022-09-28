    <!-- HERO PART START -->
    <section class="hero-area">
        <div class="hero-carousel-active">
            <div class="single-carousel-active lazy" data-bg="{{asset('assets/front/img/'.$bs->hero_bg)}}" id="hero-home-5" style="background-size: cover;">
                <div id="bgndVideo" data-property="{videoURL:'{{$bs->hero_section_video_link}}',containment:'#hero-home-5', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="hero-content">
                                <span style="font-size: {{$be->hero_section_title_font_size}}px">{{convertUtf8($bs->hero_section_title)}}</span>
                                <h1 style="font-size: {{$be->hero_section_bold_text_font_size}}px; color: #{{$be->hero_section_bold_text_color}};">{{$bs->hero_section_bold_text}}</h1>
                                @if (!empty($bs->hero_section_button_url) && !empty($bs->hero_section_button_text))
                                    <a href="{{$bs->hero_section_button_url}}" class="main-btn hero-btn" style="font-size: {{$be->hero_section_button_text_font_size}}px;">{{convertUtf8($bs->hero_section_button_text)}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO PART END -->
