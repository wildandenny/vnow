@extends("front.$version.layout")

@section('pagename')
 -
 @if (empty($category))
 {{__('All')}}
 @else
 {{convertUtf8($category->name)}}
 @endif
 {{__('Blogs')}}
@endsection

@section('meta-keywords', "$be->blogs_meta_keywords")
@section('meta-description', "$be->blogs_meta_description")

@section('breadcrumb-title', "Aktivitas Kami")
@section('breadcrumb-subtitle', "Pelatihan")
@section('breadcrumb-link', "Pelatihan")

@section('content')


  <!--    blog lists start   -->
  <div class="blog-lists section-padding">
     <div class="container">
        <div class="row">
         <div class="col-lg-12">
            <div class="sidebar">
               <div class="blog-sidebar-widgets">
                  <div class="searchbar-form-section">
                     <form action="{{route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])}}" method="GET">
                        <div class="searchbar">
                           <input name="category" type="hidden" value="{{request()->input('category')}}">
                           <input name="month" type="hidden" value="{{request()->input('month')}}">
                           <input name="year" type="hidden" value="{{request()->input('year')}}">
                           <input name="term" type="text" placeholder="Cari Pelatihan" value="{{request()->input('term')}}">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
              
            </div>
         </div>
           <div class="col-lg-12">
              <div class="row">
                @if (count($blogs) == 0)
                  <div class="col-md-12">
                    <div class="bg-light py-5">
                      <h3 class="text-center">{{__('NO TRAINING FOUND')}}</h3>
                    </div>
                  </div>
                @else
                  @foreach ($blogs as $key => $blog)
                    <div class="col-md-4">
                       <div class="single-blog">
                          <div class="blog-img-wrapper">
                             <img class="lazy" data-src="{{asset('assets/front/img/blogs/'.$blog->main_image)}}" alt="">
                          </div>
                          <div class="blog-txt">
                            @php
                                if (!empty($currentLang)) {
                                    $blogDate = \Carbon\Carbon::parse($blog->created_at)->locale("$currentLang->code");
                                } else {
                                    $blogDate = \Carbon\Carbon::parse($blog->created_at)->locale("en");
                                }

                                $blogDate = $blogDate->translatedFormat('jS F, Y');
                            @endphp
                             <p class="date"><small>{{__('By')}} <span class="username">{{__('Admin')}}</span></small> | <small>{{$blogDate}}</small> </p>

                             <h4 class="blog-title"><a href="{{route('front.trainingdetails', [$blog->slug])}}">{{strlen($blog->title) > 40 ? mb_substr($blog->title, 0, 40, 'utf-8') . '...' : $blog->title}}</a></h4>

                             <p class="blog-summary">{!! strlen(strip_tags($blog->content)) > 100 ? mb_substr(strip_tags($blog->content), 0, 100, 'utf-8') . '...' : strip_tags($blog->content) !!}</p>

                             <a href="{{route('front.trainingdetails', [$blog->slug])}}" class="readmore-btn"><span>{{__('Read More')}}</span></a>

                          </div>
                       </div>
                    </div>
                  @endforeach
                @endif
              </div>
              @if ($blogs->total() > 6)
                <div class="row">
                   <div class="col-md-12">
                      <nav class="pagination-nav {{$blogs->total() > 6 ? 'mb-4' : ''}}">
                        {{$blogs->appends(['term'=>request()->input('term'), 'month'=>request()->input('month'), 'year'=>request()->input('year'), 'category' => request()->input('category')])->links()}}
                      </nav>
                   </div>
                </div>
              @endif
           </div>
           <!--    blog sidebar section start   -->
           
           <!--    blog sidebar section end   -->
        </div>
     </div>
  </div>
  <!--    blog lists end   -->
@endsection
