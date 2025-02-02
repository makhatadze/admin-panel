<header  class="header sticky">
    <div class="container">
        <nav class="nav">

            <div class="brand-logo">
                <img src="{{url('frontend-assets/img/logos/site-logo.svg')}}" alt="">
            </div>

            <ul class="navigation">
                <li class="navigation__item">
                    <a href="{{route('site')}}" class="navigation__link {{$page->slug == 'home' ? 'active': ''}}">{{__('app.site')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('catalogIndex')}}" class="navigation__link {{($page->slug == 'catalog' || $page->slug == 'details') ? 'active': ''}}">{{__('app.catalog')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('aboutIndex')}}" class="navigation__link {{$page->slug == 'about-us' ? 'active': ''}}">{{__('app.about-us')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('contactIndex')}}" class="navigation__link {{$page->slug == 'contact-us' ? 'active': ''}}">{{__('app.contact')}}</a>
                </li>                <li class="navigation__item">
                    <a href="{{route('statementIndex')}}" class="navigation__link {{$page->slug == 'statement' ? 'active': ''}}">{{__('app.statement')}}</a>
                </li>

            </ul>

            <div class="nav-right">

                <div class="language-switch">
                    <a class="{{app()->getLocale() == 'ge' ? 'chosen-lang' : ''}}" href="{{ LaravelLocalization::getLocalizedURL('ge') }}">
                        <img src="{{url('frontend-assets/img/logos/georgia-flag.svg')}}" alt="">
                    </a>
                    <a class="{{app()->getLocale() == 'en' ? 'chosen-lang' : ''}}" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                        <img src="{{url('frontend-assets/img/logos/uk-flag.svg')}}" alt="">
                    </a>
                </div>

                <button class="sell-modal-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                        <path id="Icon_awesome-car-alt" data-name="Icon awesome-car-alt" d="M18.278,10.68,17.809,9.51l-.83-2.076A4.644,4.644,0,0,0,12.646,4.5H7.354A4.644,4.644,0,0,0,3.021,7.433L2.191,9.51,1.723,10.68A2.661,2.661,0,0,0,0,13.167v2a2.645,2.645,0,0,0,.667,1.747v2.253A1.334,1.334,0,0,0,2,20.5H3.333a1.334,1.334,0,0,0,1.333-1.333V17.833H15.333v1.333A1.333,1.333,0,0,0,16.667,20.5H18a1.334,1.334,0,0,0,1.333-1.333V16.914A2.643,2.643,0,0,0,20,15.167v-2A2.661,2.661,0,0,0,18.278,10.68ZM5.5,8.424A2,2,0,0,1,7.354,7.167h5.292A2,2,0,0,1,14.5,8.424l.83,2.076H4.667L5.5,8.424ZM3.333,15.158A1.258,1.258,0,0,1,2,13.829,1.258,1.258,0,0,1,3.333,12.5a2.565,2.565,0,0,1,2,1.994C5.333,15.291,4.133,15.158,3.333,15.158Zm13.333,0c-.8,0-2,.133-2-.665a2.565,2.565,0,0,1,2-1.994A1.258,1.258,0,0,1,18,13.829,1.258,1.258,0,0,1,16.667,15.158Z" transform="translate(0 -4.5)" fill=""/>
                    </svg>
                    {{__('app.sell_the_car')}}
                </button>

                <!-- show on  small-->
                <button  class="menu menu-icon "><span></span></button>

            </div>

        </nav>
    </div>

</header>
