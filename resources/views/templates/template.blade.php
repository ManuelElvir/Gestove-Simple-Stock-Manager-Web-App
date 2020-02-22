<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>{{ config('app.name','Gestove')}} - @yield('titre')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="{{ trans('string.desc') }}">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="{{asset('resources/css/main.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                @if(Auth::user()->username='Administrateur')
                                                    <img width="42" class="rounded-circle" src="{{asset('resources/images/avatars/admin.png')}}" alt="">
                                                @else
                                                    <img width="42" class="rounded-circle" src="{{asset('resources/images/avatars/user.png')}}" alt="">
                                                @endif
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                {!! Form::open(['url' => 'logout']) !!}
                                                    {!! Form::submit( __('auth.logout') , ['class' => 'btn btn-info pull-right dropdown-item', 'tabindex' => '0']) !!}
				                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                            {{ Auth::user()->username }}
                                        </div>
                                        <div class="widget-subheading">
                                            {{ Auth::user()->role }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            {{-- theme setting bloc --}}
            <div class="ui-theme-settings">
                {{-- setting button --}}
                <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                    <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
                </button>
                {{-- theme setting panel --}}
                <div class="theme-settings__inner">
                    <div class="scrollbar-container">
                        <div class="theme-settings__options-wrapper">
                            <h3 class="themeoptions-heading"> {{ __('string.layout_options') }}
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                        <div class="switch-animate switch-on">
                                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading"> {{ __('string.header_footer') }}
                                                    </div>
                                                    <div class="widget-subheading"> {{ __('string.fixed_header_desc') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                        <div class="switch-animate switch-on">
                                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading"> {{ __('string.fixed_footer') }}
                                                    </div>
                                                    <div class="widget-subheading"> {{ __('string.fixed_footer_desc') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                        <div class="switch-animate switch-off">
                                                            <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading"> {{ __('string.fixed_footer') }}
                                                    </div>
                                                    <div class="widget-subheading"> {{ __('string.fixed_footer_desc') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="themeoptions-heading">
                                <div>
                                    {{ __('string.header_options') }}
                                </div>
                                <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                    {{ __('string.restore_default') }}
                                </button>
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5 class="pb-2"> {{ __('string.chosse_color')}}
                                        </h5>
                                        <div class="theme-settings-swatches">
                                            <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                            </div>
                                            <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="themeoptions-heading">
                                <div>Sidebar Options</div>
                                <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                    Restore Default
                                </button>
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5 class="pb-2"> {{ __('string.chosse_color')}}
                                        </h5>
                                        <div class="theme-settings-swatches">
                                            <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                            </div>
                                            <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                            </div>
                                            <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="themeoptions-heading">
                                <div>Main Content Options</div>
                                <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                                </button>
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5 class="pb-2">Page Section Tabs
                                        </h5>
                                        <div class="theme-settings-swatches">
                                            <div role="group" class="mt-2 btn-group">
                                                <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                    Line
                                                </button>
                                                <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                    Shadow
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="app-main">
                {{-- navbar --}}
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                {{-- Dashboard group --}}
                                <li class="app-sidebar__heading">{{ trans('string.dashboard') }}</li>
                                <li>
                                    @if(Route::current()->getName()=='dashboard')
                                        <a href=" {{ route('dashboard') }}" class="mm-active">
	                                @else
                                        <a href=" {{ route('dashboard') }}">
	                                @endif
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        {{ trans('string.dashboard') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-file"></i>
                                        {{ trans('string.payments') }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            @if(Route::current()->getName()=='payments.create')
                                                <a href=" {{ route('payments.create') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('payments.create') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.new_payment') }}
                                            </a>
                                        </li>
                                        <li>
                                            @if(Route::current()->getName()=='payments.index')
                                                <a href=" {{ route('payments.index') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('payments.index') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.list_payment') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        {{ trans('string.orders') }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            @if(Route::current()->getName()=='orders.create')
                                                <a href=" {{ route('orders.create') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('orders.create') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.new_order') }}
                                            </a>
                                        </li>
                                        <li>
                                            @if(Route::current()->getName()=='orders.index')
                                                <a href=" {{ route('orders.index') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('orders.index') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.list_orders') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- shop group --}}
                                <li class="app-sidebar__heading"> {{ trans('string.shop') }}</li>
                                <li>
                                    @if(Route::current()->getName()=='products.index_shop')
                                        <a href=" {{ route('products.index_shop') }}" class="mm-active">
	                                @else
                                        <a href=" {{ route('products.index_shop') }}">
	                                @endif
                                    <i class="metismenu-icon pe-7s-shopbag"></i>
                                        {{ trans('string.list_products') }}
                                    </a>
                                </li>

                                {{-- store group --}}
                                <li class="app-sidebar__heading"> {{ trans('string.store') }}</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-box1"></i>
                                        {{ trans('string.products') }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            @if(Route::current()->getName()=='products.index_store')
                                                <a href=" {{ route('products.index_store') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('products.index_store') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.list_products') }}
                                            </a>
                                        </li>
                                        <li>
                                            @if(Route::current()->getName()=='products.create')
                                                <a href=" {{ route('products.create') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('products.create') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ trans('string.create_product') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- alert group --}}
                                <li class="app-sidebar__heading"> {{ trans('string.alerts') }}</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-bell"></i>
                                        {{ trans('string.finished_Product') }}
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            @if(Route::current()->getName()=='products.finished_shop')
                                                <a href=" {{ route('products.finished_shop') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('products.finished_shop') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ __('string.in')  }} {{ __('string.shop')}}
                                            </a>
                                        </li>
                                        <li>
                                            @if(Route::current()->getName()=='products.finished_store')
                                                <a href=" {{ route('products.finished_store') }}" class="mm-active">
	                                        @else
                                                <a href=" {{ route('products.finished_store') }}">
	                                        @endif
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                {{ __('string.in')}} {{  __('string.store')  }}
                                            </a>
                                        </li>
                                    </ul>
                                    <li>
                                        @if(Route::current()->getName()=='products.perimeal')
                                            <a href=" {{ route('products.perimeal') }}" class="mm-active">
                                        @else
                                            <a href=" {{ route('products.perimeal') }}">
                                        @endif
                                        <i class="metismenu-icon pe-7s-attention"></i>
                                            {{ trans('string.perimeal_Product') }}
                                        </a>
                                    </li>
                                </li>

                                {{-- Reports group --}}
                                <li class="app-sidebar__heading">{{ trans('string.reports') }}</li>
                                <li>
                                    @if(Route::current()->getName()=='dashboard.balances')
                                        <a href=" {{ route('dashboard.balance') }}" class="mm-active">
                                    @else
                                        <a href=" {{ route('dashboard.balance') }}">
                                    @endif
                                    <i class="metismenu-icon pe-7s-graph1"></i>
                                        {{ trans('string.balances') }}
                                    </a>
                                </li>
                                <li>
                                    @if(Route::current()->getName()=='dashboard.history')
                                        <a href=" {{ route('dashboard.history') }}" class="mm-active">
                                    @else
                                        <a href=" {{ route('dashboard.history') }}">
                                    @endif
                                    <i class="metismenu-icon pe-7s-back-2"></i>
                                        {{ trans('string.history') }}
                                    </a>
                                </li>

                                @if(Auth::user()->username='Administrateur')
                                    {{-- Staff group --}}
                                    <li class="app-sidebar__heading">{{ trans('string.staff') }}</li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-users"></i>
                                            {{ trans('string.users') }}
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                @if(Route::current()->getName()=='users.index')
                                                    <a href=" {{ route('users.index') }}" class="mm-active">
	                                            @else
                                                    <a href=" {{ route('users.index') }}">
	                                            @endif
                                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                                    {{ trans('string.list_users') }}
                                                </a>
                                            </li>
                                            <li>
                                                @if(Route::current()->getName()=='users.create')
                                                    <a href=" {{ route('users.create') }}" class="mm-active">
	                                            @else
                                                    <a href=" {{ route('users.create') }}">
	                                            @endif
                                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                                    {{ trans('string.new_user') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="app-main__outer">
                        <div class="app-main__inner">
                            {{-- title --}}
                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            @yield('icon')
                                            </i>
                                        </div>
                                        <div> @yield('content_title')
                                            <div class="page-title-subheading">@yield('content_description')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-title-actions" style="display: inline-flex;">
                                        @yield('button_add')
                                    </div>    
                                </div>
                            </div>

                            {{-- content --}}
                            @yield('content')
    
                        </div>

                        {{-- footer --}}
                        <div class="app-wrapper-footer">
                            <div class="app-footer">
                                <div class="app-footer__inner">
                                    <div class="app-footer-left">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    {{ config('app.name','Gestove')}} - 2020 {{ trans('string.no_copyrigth') }}
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="app-footer-right">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                gestove2020@gmail.com
                                                <i class="pe-7s-map-marker icon-gradient bg-strong-bliss"> Marchée centrale, Yaoundé </i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    {{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
            </div>
        </div>

        <script type="text/javascript" src="{{asset('resources/js/main.js')}}"></script>
    </body>
</html>
