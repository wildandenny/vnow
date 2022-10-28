    <!-- HERO PART START -->
    <section class="hero-area" style="height:100vh;">
        <div class="hero-carousel-active">
            <div class="single-carousel-active lazy" data-bg="{{asset('assets/front/img/'.$bs->hero_bg)}}" style="background-size: cover;box-shadow: inset 0 0 0 1000px rgb(0 0 0 / 40%);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8" style="text-align: center;">
                            <div class="hero-content">
                                <span style="font-size:2.5em;background: #007a4500;color: white;margin-bottom:0px;">{{convertUtf8($bs->hero_section_title)}}</span>
                                {{-- <span style="font-size: {{$be->hero_section_title_font_size}}px;background: #007a4500;color: white;">{{convertUtf8($bs->hero_section_title)}}</span> --}}
                                <h1 style="font-size: 2em; color: #{{$be->hero_section_bold_text_color}};">{{$bs->hero_section_bold_text}}</h1>
                                {{-- <h1 style="font-size: {{$be->hero_section_bold_text_font_size}}px; color: #{{$be->hero_section_bold_text_color}};">{{$bs->hero_section_bold_text}}</h1> --}}
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
