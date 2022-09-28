<div class="hero-area lazy" id="hero-home-5" data-bg="{{asset('assets/front/img/'.$bs->hero_bg)}}" style="background-size: cover;">
  <div id="bgndVideo" data-property="{videoURL:'{{$bs->hero_section_video_link}}',containment:'#hero-home-5', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}"></div>
   <div class="container">
      <div class="hero-txt">
         <div class="row">
           <div class="col-12">
              <span>{{convertUtf8($bs->hero_section_title)}}</span>
              <h1>{{convertUtf8($bs->hero_section_text)}}</h1>
              @if (!empty($bs->hero_section_button_url) && !empty($bs->hero_section_button_text))
              <a href="{{$bs->hero_section_button_url}}" class="hero-boxed-btn" target="_blank">{{convertUtf8($bs->hero_section_button_text)}}</a>
              @endif
           </div>
         </div>
      </div>
   </div>
   <div class="hero-area-overlay" style="background-color: #{{$be->hero_overlay_color}};opacity: {{$be->hero_overlay_opacity}};"></div>
</div>
