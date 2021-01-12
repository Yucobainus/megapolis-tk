@section('modal')

    <div class="modal">
        @if (empty($session) == true)
            <div class="empty-cart">
                <img src="{{asset('public/pictures/emptycart.png')}}"/>
                <p>Корзина пуста!</p>
            </div>
        @else
            @foreach($session as $el)
                <div class="prod" id="{{$el->id}}">
                    <div class="delete" id="{{$el->id}}a">
                        <label>
                            <input type="checkbox" data-id="{{$el->id}}" value="{{$el->id}}">
                            <img src="{{asset('public/pictures/delete.svg')}}">
                        </label>
                    </div>
                    <div class="photo photo-modal about-prod" data-id="{{$el->id}}"
                         onclick="window.location='{{route('one-door', [$el->company,$el->id])}}'">
                        <img src="{{asset($el->photo)}}">
                    </div>
                    <div class="ab-prod-info">
                        <div class="name about-prod">
                            <p>{{$el->name}}</p>
                        </div>
                        <div class="mutable-info">
                            <div class="mutable-data">
                                <div class="price-modal about-prod">
                                    @if($el->price == 0)
                                        <p> Цена: В зависимости от комплектации</p>
                                    @else
                                        <p>{{$el->price}} сум</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="{{$el->id}}">
            @endforeach
            <div class="buy-form">
                <div class="form-sect">
                    <label for="name">
                        <p>Ваше имя <strong style="color: red">*</strong></p>
                    </label>
                    <input type="text" name="name" id="name-form">
                </div>
                <div class="form-sect">
                    <label for="phone">
                        <p>Ваш телефон <strong style="color: red">*</strong></p>
                    </label>
                    <input type="text" name="phone" value="+998" id="phone-form">
                </div>

                <div class="form-sect">
                    <label for="telegram">
                        <p>Telegram</p>
                    </label>
                    <input type="text" name="telegram" value="@" id="telegram-form">
                </div>
                <p class="errors-valid"></p>
                <div class="form-sect">
                    <input type="submit" class="btn" id="order" value="Оформить заказ">
                </div>
            </div>
        @endif
    </div>
