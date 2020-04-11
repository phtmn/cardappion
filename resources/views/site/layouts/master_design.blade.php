<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="mtoken" content="{{ $token }}">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
      {{ config('app.name') }}
  </title>

  <meta name="keywords" content="argon design system pro, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4">
  <meta name="description" content="Start your development with a Premium Argon Design System for Bootstrap 4. It combines colors that are easy on the eye, spacious cards, beautiful typography, and graphics. It is a beautiful cross-platform UI kit featuring over 1100 components, 43 sections and 17 example pages.">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('css//nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />

  <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('js/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
  <script src="{{ asset('js/glide.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
  <script src="{{ asset('js/choices.min.js') }}" type="text/javascript"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
  <script src="{{ asset('js/datetimepicker.js') }}" type="text/javascript"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
  <!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
  <script src="{{ asset('js/headroom.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('js/argon-design-system.min.js?v=1.0.2') }}" type="text/javascript"></script> <!-- Sharrre libray -->
  <script src="{{ asset('js/jquery.sharrre.js') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>



  {{-- <script>
    // Carousel
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      focusAt: 2,
      perTouch: 1,
      perView: 4
    }).mount();


    // Testimonial Carousel
    new Glide('.testimonial-glide', {
      type: 'carousel',
      startAt: 0,
      focusAt: 2,
      perTouch: 1,
      perView: 4
    }).mount();

    ArgonKit.initGoogleMaps();
    ArgonKit.initGoogleMaps2();
  </script> --}}
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</head>


<div id="app">


  @yield('content')
  @stack('scripts')
</div>



<div class="at-share-dock-outer addthis-smartlayers addthis-smartlayers-mobile" aria-labelledby="at-share-dock-label"
    role="region">
    <div id="at-share-dock-label" class="at4-hide">AddThis Sharing</div>
    <div id="" class="at-share-dock atss atss-bottom at-shfs-large addthis-animated slideInUp"><a
        style="width: 16.6667%;" href="#" class="at4-count"><span class="at4-counter"></span><span
          class="at4-share-label">SHARES</span></a><a style="width: 16.6667%;" role="button" tabindex="0"
        title="WhatsApp" class="at-share-btn at-svc-whatsapp"><span class="at-icon-wrapper"
          style="background-color: rgb(77, 194, 71);"><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img"
            aria-labelledby="at-svg-whatsapp-6" class="at-icon at-icon-whatsapp"
            style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" title="WhatsApp" alt="WhatsApp">
            <title id="at-svg-whatsapp-6">WhatsApp</title>
            <g>
              <path
                d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                fill-rule="evenodd"></path>
            </g>
          </svg></span></a><a style="width: 16.6667%;" role="button" tabindex="0" title="LinkedIn"
        class="at-share-btn at-svc-linkedin"><span class="at-icon-wrapper"
          style="background-color: rgb(0, 119, 181);"><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img"
            aria-labelledby="at-svg-linkedin-7" class="at-icon at-icon-linkedin"
            style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" title="LinkedIn" alt="LinkedIn">
            <title id="at-svg-linkedin-7">LinkedIn</title>
            <g>
              <path
                d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z"
                fill-rule="evenodd"></path>
            </g>
          </svg></span></a><a style="width: 16.6667%;" role="button" tabindex="0" title="Facebook"
        class="at-share-btn at-svc-facebook"><span class="at-icon-wrapper"
          style="background-color: rgb(59, 89, 152);"><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img"
            aria-labelledby="at-svg-facebook-8" class="at-icon at-icon-facebook"
            style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" title="Facebook" alt="Facebook">
            <title id="at-svg-facebook-8">Facebook</title>
            <g>
              <path
                d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                fill-rule="evenodd"></path>
            </g>
          </svg></span></a><a style="width: 16.6667%;" role="button" tabindex="0" title="Copy Link"
        class="at-share-btn at-svc-link"><span class="at-icon-wrapper" style="background-color: rgb(23, 139, 244);"><svg
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
            version="1.1" role="img" aria-labelledby="at-svg-link-9" class="at-icon at-icon-link"
            style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" title="Copy Link" alt="Copy Link">
            <title id="at-svg-link-9">Copy Link</title>
            <g>
              <path
                d="M23.476 20.663c0-.324-.114-.6-.34-.825l-2.524-2.524a1.124 1.124 0 0 0-.826-.34c-.34 0-.63.13-.873.388.024.024.1.1.23.225s.217.212.26.26c.046.05.106.126.183.23a.976.976 0 0 1 .2.644c0 .325-.113.6-.34.827-.226.226-.5.34-.825.34-.12 0-.23-.015-.332-.043a.976.976 0 0 1-.31-.158 2.89 2.89 0 0 1-.23-.182 7.506 7.506 0 0 1-.26-.26l-.226-.23c-.267.25-.4.545-.4.885 0 .322.113.597.34.824l2.5 2.512c.218.218.493.328.825.328.323 0 .598-.106.825-.316l1.784-1.772a1.11 1.11 0 0 0 .34-.813zm-8.532-8.556c0-.323-.113-.598-.34-.825l-2.5-2.512a1.124 1.124 0 0 0-.825-.34c-.316 0-.59.11-.826.328L8.67 10.53a1.11 1.11 0 0 0-.34.813c0 .323.113.598.34.825l2.524 2.524c.22.22.494.328.825.328.34 0 .63-.126.873-.376-.024-.025-.1-.1-.23-.225a7.506 7.506 0 0 1-.26-.262 2.89 2.89 0 0 1-.183-.23.976.976 0 0 1-.2-.644c0-.323.113-.598.34-.825.226-.227.5-.34.824-.34a.976.976 0 0 1 .643.2c.106.077.183.137.23.182.05.044.137.13.262.26s.2.207.224.23c.267-.25.4-.545.4-.885zm10.862 8.556c0 .97-.344 1.792-1.032 2.464L22.99 24.9c-.67.67-1.492 1.006-2.463 1.006-.98 0-1.805-.344-2.476-1.032l-2.5-2.512c-.67-.67-1.006-1.493-1.006-2.463 0-.997.356-1.842 1.068-2.538l-1.068-1.068c-.696.712-1.538 1.068-2.525 1.068-.97 0-1.797-.34-2.476-1.02L7.02 13.82C6.34 13.138 6 12.314 6 11.343c0-.97.344-1.792 1.032-2.464l1.784-1.773c.67-.67 1.492-1.007 2.463-1.007.978 0 1.803.344 2.475 1.032l2.5 2.512c.67.67 1.007 1.492 1.007 2.463 0 .995-.356 1.84-1.068 2.537l1.068 1.068c.696-.712 1.537-1.068 2.524-1.068.97 0 1.797.34 2.476 1.02l2.524 2.523c.68.68 1.02 1.505 1.02 2.476z"
                fill-rule="evenodd"></path>
            </g>
          </svg></span></a><a style="width: 16.6667%;" role="button" tabindex="0" title="E-mail"
        class="at-share-btn at-svc-email"><span class="at-icon-wrapper"
          style="background-color: rgb(132, 132, 132);"><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img"
            aria-labelledby="at-svg-email-10" class="at-icon at-icon-email"
            style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" title="E-mail" alt="E-mail">
            <title id="at-svg-email-10">Email</title>
            <g>
              <g fill-rule="evenodd"></g>
              <path
                d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z">
              </path>
              <path
                d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z">
              </path>
            </g>
          </svg></span></a></div>
  </div>

</html>
