<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    <link rel="stylesheet" href="{{asset ('public/css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/slick/slick-theme.css')}}">
    <title>@yield('title-of-site')</title>
</head>

<body style="background-image: url({{asset('/pictures/pattern.svg')}});" id="body-place">


@include('inc.header')

<div>
    @include('inc.messages')
</div>

<div id="loader">
    <div class="holder">
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
@yield('content')

@include('inc.footer')

@include('inc.cart')
@include('inc.modal')
<script src="{{asset('public/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/js/slick/slick.min.js')}} "></script>
<script src="{{asset('public/js/script.min.js')}} "></script>
<script src="{{asset('public/js/jquery.lazyloadxt.min.js')}}"></script>
@yield('script')
<script>
    $(window).on('load', function () {
        $('html').css('overflow-y', 'scroll')
        $('#loader').fadeOut().end().delay(100).fadeOut('slow');
    });
    $(document).ready(function () {
        @if($_SERVER['REQUEST_URI'] === '/')
        $('header').css({
            'position': 'absolute'
        })
        $('header .header-up').css({
            'background-color': ''
        })
        $('header .header-up').css({
            'background-color': 'rgba(0, 0, 0, 0.7)'
        })
        @endif

        $('#cart').click(function () {
            if ($('.modal').hasClass('open')) {
                $('.modal').removeClass('open')
            } else {
                $('.modal').addClass('open')
            }
        })


    })
</script>
<script>
    $(document).ready(function () {
        textPrice = $('.price').text()
        $('.price').text(prettyPrice(textPrice))

        $('.product-price').each(function (){
            price = $(this).text()
            $(this).text(prettyPrice(price))
        })

        $('.price-modal').each(function (){
            price = $(this).text()
            $(this).text(prettyPrice(price))
        })


        $('#order').click(function (event) {
            event.preventDefault()
            confirmOrder()
        })
        $('.delete input:checkbox').on('change', function (event) {
            id = $(this).attr('data-id')
            if($(`.delete#${id}a input:checkbox`).prop('checked')) {
                event.preventDefault()
                id = $(this).attr('data-id')
                $(`#${id}`).addClass('hide')
            }else{
                $(`#${id}`).removeClass('hide')
            }
        })
    })

    function prettyPrice(price){
      return price.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ')
    }

    function confirmOrder() {
        let deletedProducts = [];
        $('.delete input[type="checkbox"]:checked').each(function () {
            deletedProducts.push(this.value)
        })
        let name =  $('#name-form').val()
        let phone =  $('#phone-form').val()
        let tg =  $('#telegram-form').val()
        $.ajax({
            url: "{{route('confirm-order')}}",
            type: "POST",
            data: {
                "_token": "{{csrf_token()}}",
                "deleted": deletedProducts,
                "name": name,
                "phone": phone,
                "telegram": tg
            },
            success: (data) => {
                location.reload()
            },
            error: (err) => {
                if (err.status == 422) {
                    $('.errors-valid').text('Укажите имя и номер телефона!')
                    $('.errors-valid').addClass('errors-active')
                }else{
                    console.log(err)
                }
            }
        })
    }
</script>
</body>

</html>
