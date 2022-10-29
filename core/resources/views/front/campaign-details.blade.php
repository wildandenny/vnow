@extends("front.$version.layout")

@section('pagename')
 - {{convertUtf8($blog->title)}}
@endsection

@section('meta-keywords', "$blog->meta_keywords")
@section('meta-description', "$blog->meta_description")

@section('breadcrumb-title', "Campaign Details")
@section('breadcrumb-subtitle', strlen($blog->title) > 30 ? mb_substr($blog->title, 0, 30, 'utf-8') . '...' : $blog->title)
@section('breadcrumb-link', "Campaign Details")

@section('content')

  <!--    blog details section start   -->
  <div class="blog-details-section section-padding">
     <div class="container">
        <div class="row">
           <div class="12">
              <div class="blog-details">
                 <img class="blog-details-img-1 lazy" data-src="{{asset('assets/front/img/blogs/'.$blog->main_image)}}" alt="">
                 <small class="date">{{date('F d, Y', strtotime($blog->created_at))}}  -  {{__('BY')}} {{__('Admin')}}</small>
                 <h2 class="blog-details-title">{{convertUtf8($blog->title)}}</h2>
                 <div class="blog-details-body">
                   {!! replaceBaseUrl(convertUtf8($blog->content)) !!}
                 </div>
              </div>
              <div class="blog-share mb-5">
                 <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}" class="facebook-share"><i class="fab fa-facebook-f"></i> {{__('Share')}}</a></li>
                    <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}" class="twitter-share"><i class="fab fa-twitter"></i> {{__('Tweet')}}</a></li>
                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title={{convertUtf8($blog->title)}}" class="linkedin-share"><i class="fab fa-linkedin-in"></i> {{__('Linkedin')}}</a></li>
                 </ul>
              </div>

              <div class="comment-lists">
                <div id="disqus_thread"></div>
              </div>
           </div>
           <!--    blog sidebar section start   -->
          
           <!--    blog sidebar section end   -->
        </div>
     </div>
  </div>
  <!--    blog details section end   -->

@endsection

@section('scripts')
@if($bs->is_disqus == 1)
{!! $bs->disqus_script !!}
@endif
@endsection
