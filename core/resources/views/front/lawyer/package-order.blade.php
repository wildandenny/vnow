
    <section class="finlance_pricing pricing_v1">
        <div class="pricing_slide">
            <div class="pricing_box text-center">
                <div class="pricing_title">
                    @if (!empty($package->image))
                        <img class="lazy" data-src="{{asset('assets/front/img/packages/' . $package->image)}}" alt="">
                    @endif
                    <h3>{{convertUtf8($package->title)}}</h3>
                    @if ($package->feature == 1)
                        <p>{{__('Featured Package')}}</p>
                    @else
                        <p>{{__('Package')}}</p>
                    @endif
                </div>
                <div class="pricing_price">
                    <h3>{{$bex->base_currency_symbol_position == 'left' ? $bex->base_currency_symbol : ''}} {{$package->price}} {{$bex->base_currency_symbol_position == 'right' ? $bex->base_currency_symbol : ''}}</h3>
                </div>
                <div class="pricing_body pb-0">
                    {!! replaceBaseUrl(convertUtf8($package->description)) !!}
                </div>
            </div>
        </div>
    </section>
