{{-- @extends("front.$version.layout")

@section('pagename')
 -
 {{__('Login')}}
@endsection


@section('meta-keywords', "$be->login_meta_keywords")
@section('meta-description', "$be->login_meta_description")

@section('breadcrumb-subtitle', __('Sign In'))
@section('breadcrumb-link', __('Sign In'))


@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="http://forum.vnow.id:8004/" class="embed-responsive-item" src="" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

@endsection --}}


<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Start of Google Analytics script-->
      @if ($bs->is_analytics == 1)
      {!! $bs->google_analytics_script !!}
      @endif
      <!--End of Google Analytics script-->

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="description" content="@yield('meta-description')">
      <meta name="keywords" content="@yield('meta-keywords')">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{$bs->website_title}} @yield('pagename')</title>
      <!-- favicon -->
      <link rel="shortcut icon" href="{{asset('assets/front/img/'.$bs->favicon)}}" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
      <!-- plugin css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/plugin.min.css')}}">
      <!--default css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
      <!-- main css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/cleaning-style.css')}}">
      <!-- common css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/common-style.css')}}">
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
      <!-- cleaning responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/cleaning-responsive.css')}}">

      @if ($bs->is_tawkto == 1 || $bex->is_whatsapp == 1)
      <style>
        .scroll-to-top {
            right: auto;
            left: 40px;
        }
      </style>
      @endif
      @if (count($langs) == 0)
      <style media="screen">
      .support-bar-area ul.social-links li:last-child {
          margin-right: 0px;
      }
      .support-bar-area ul.social-links::after {
          display: none;
      }
      </style>
      @endif

      <!-- common base color change -->
      <link href="{{url('/')}}/assets/front/css/common-base-color.php?color={{$bs->base_color}}" rel="stylesheet">
      <!-- base color change -->
      <link href="{{url('/')}}/assets/front/css/cleaning-base-color.php?color={{$bs->base_color}}&color1={{$bs->secondary_base_color}}" rel="stylesheet">

      @if ($rtl == 1)
      <!-- RTL css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/cleaning-rtl.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/pb-rtl.css')}}">
      @endif
      @yield('styles')

      <!-- jquery js -->
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

      @if ($bs->is_appzi == 1)
      <!-- Start of Appzi Feedback Script -->
      <script async src="https://app.appzi.io/bootstrap/bundle.js?token={{$bs->appzi_token}}"></script>
      <!-- End of Appzi Feedback Script -->
      @endif

      <!-- Start of Facebook Pixel Code -->
      @if ($be->is_facebook_pexel == 1)
        {!! $be->facebook_pexel_script !!}
      @endif
      <!-- End of Facebook Pixel Code -->

      <!--Start of Appzi script-->
      @if ($bs->is_appzi == 1)
      {!! $bs->appzi_script !!}
      @endif
      <!--End of Appzi script-->

      <script>
        // function resizeIframe(obj) {
        //   obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        // }
      </script>

      
   </head>



   <body @if($rtl == 1) dir="rtl" @endif>


    <!-- Start finlance_header area -->
    @includeIf('front.cleaning.partials.navbar')
    <!-- End finlance_header area -->




    {{-- <div class="row forum-section" >
        <div class="col-sm-12">
            <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
                <div class="embed-responsive embed-responsive-16by9" style="overflow:auto">
                    <iframe src="http://forum.vnow.id:8004" class="embed-responsive-item" frameborder="0" scrolling="auto"   src="" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div> --}}

    
    <div class="row forum-section" >
        <div class="col-sm-12">
                    <iframe src="http://app.vnow.id:8005/forum/public" frameborder="0" id="myIframe" style="min-width:100%;height:1000px;"></iframe>
        </div>
    </div>

  




    
    <!--======  SCROLL-TO-TOP PART START ======-->
    <div class="scroll-to-top">
        <span id="return-to-top"><i class="fa fa-arrow-up"></i></span>
    </div>
    <!--======  SCROLL-TO-TOP PART END ======-->


    {{-- WhatsApp Chat Button --}}
    <div id="WAButton"></div>

    <!--====== PRELOADER PART START ======-->
    @if ($bex->preloader_status == 1)
    <div id="preloader">
        <div class="loader revolve">
            <img src="{{asset('assets/front/img/' . $bex->preloader)}}" alt="">
        </div>
    </div>
    @endif
    <!--====== PRELOADER PART ENDS ======-->


    {{-- Cookie alert dialog start --}}
    @if ($be->cookie_alert_status == 1)
    @include('cookieConsent::index')
    @endif
    {{-- Cookie alert dialog end --}}

    {{-- Popups start --}}
    @includeIf('front.partials.popups')
    {{-- Popups end --}}

      @php
        $mainbs = [];
        $mainbs = json_encode($mainbs);
      @endphp
      <script>
        var mainbs = {!! $mainbs !!};
        var mainurl = "{{url('/')}}";
        var vap_pub_key = "{{env('VAPID_PUBLIC_KEY')}}";

        var rtl = {{ $rtl }};
      </script>
      <!-- popper js -->
      <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
      <!-- Plugin js -->
      <script src="{{asset('assets/front/js/plugin.min.js')}}"></script>

      <!-- main js -->
      <script src="{{asset('assets/front/js/cleaning-main.js')}}"></script>
      <!-- pagebuilder custom js -->
      <script src="{{asset('assets/front/js/common-main.js')}}"></script>
      {{-- whatsapp init code --}}
      @if ($bex->is_whatsapp == 1)
        <script type="text/javascript">
            var whatsapp_popup = {{$bex->whatsapp_popup}};
            var whatsappImg = "{{asset('assets/front/img/whatsapp.svg')}}";
            $(function () {
                $('#WAButton').floatingWhatsApp({
                    phone: "{{$bex->whatsapp_number}}", //WhatsApp Business phone number
                    headerTitle: "{{$bex->whatsapp_header_title}}", //Popup Title
                    popupMessage: `{!! nl2br($bex->whatsapp_popup_message) !!}`, //Popup Message
                    showPopup: whatsapp_popup == 1 ? true : false, //Enables popup display
                    buttonImage: '<img src="' + whatsappImg + '" />', //Button Image
                    position: "right" //Position: left | right

                });
            });
        </script>
      @endif

      @yield('scripts')

      @if (session()->has('success'))
      <script>
         toastr["success"]("{{__(session('success'))}}");
      </script>
      @endif

      @if (session()->has('error'))
      <script>
         toastr["error"]("{{__(session('error'))}}");
      </script>
      @endif

      <!--Start of subscribe functionality-->
      <script>
        $(document).ready(function() {
          var heightWindow =  $(window).height();
          var headerArea = $(".header-area").height() 
          $("#myIframe").height(heightWindow - headerArea);
          $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
            // console.log($(this).attr('id'));

            e.preventDefault();

            let formId = $(this).attr('id');
            let fd = new FormData(document.getElementById(formId));
            let $this = $(this);

            $.ajax({
              url: $(this).attr('action'),
              type: $(this).attr('method'),
              data: fd,
              contentType: false,
              processData: false,
              success: function(data) {
                // console.log(data);
                if ((data.errors)) {
                  $this.find(".err-email").html(data.errors.email[0]);
                } else {
                  toastr["success"]("You are subscribed successfully!");
                  $this.trigger('reset');
                  $this.find(".err-email").html('');
                }
              }
            });
          });

            // lory slider responsive
            $(".gjs-lory-frame").each(function() {
                let id = $(this).parent().attr('id');
                $("#"+id).attr('style', 'width: 100% !important');
            });
        });
      </script>
      <!--End of subscribe functionality-->

      <!--Start of Tawk.to script-->
      @if ($bs->is_tawkto == 1)
      {!! $bs->tawk_to_script !!}
      @endif
      <!--End of Tawk.to script-->

      <!--Start of AddThis script-->
      @if ($bs->is_addthis == 1)
      {!! $bs->addthis_script !!}
      @endif
      <!--End of AddThis script-->
      
   </body>
</html>

