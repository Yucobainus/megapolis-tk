
@extends('layouts.app')

@section('title-of-site')Наши партнёры@endsection

@section('content')

    <section class="partners">

        <div class="title">Наши партнёры</div>

        <div class="p-list">

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/buldoors.png')}}" alt="logo"></div>
                    <div class="name">
                        <p> Бульдорс </p>
                    </div>
                </div>
                <div class="text">
                    <p> Один из ведущих производителей входных дверей в России. Производственные площади Казанского
                        завода
                        стальных дверей оборудованы автоматизированными комплексами от лучших российских и зарубежных
                        машиностроителей. Высокая степень автоматизации позволяет производить до 950 дверей в сутки.
                        Бульдорс
                        выстраивает гибкое производство, которое включает в себя полный цикл создания стальных дверей
                        благодаря
                        передовым технологиям и современному высококачественному оборудованию.</p>
                </div>
                <div class="table-head">
                    <h4>Дилеры Бульдорс</h4>
                </div>
                <div class="table-wrapper">
                    <div class="table-row">
                        <div class="city">
                            <p>Город</p>
                        </div>
                        <div class="name">
                            <p>Имя</p>
                        </div>
                        <div class="adress">
                            <p>Адресс</p>
                        </div>
                        <div class="table-contact">
                            <p>Контакты</p>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Андижан</p>
                        </div>
                        <div class="name">
                            <p>Рустам-ака</p>
                        </div>
                        <div class="adress">
                            <p>Улица Бобур шох; дом 11а.
                                Мулжал Янги бозор худуди</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998904097771">90 409 77 71</a><br>
                                <a href ="tel:+998985761977">98 576 19 77</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Бухара</p>
                        </div>
                        <div class="name">
                            <p>Ильхом,
                                Манушер</p>
                        </div>
                        <div class="adress">
                            <p>Перекресток Самаркандский
                                Рядом с Савдогарбанком</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998914080010">91 408 00 10</a> <br>
                             <a href="tel:+998973070070">97 307 00 70</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Джизак</p>
                        </div>
                        <div class="name">
                            <p>Лазиза,
                                Диёра</p>
                        </div>
                        <div class="adress">
                            <p>Строительный рынок "Ором",
                                магазин №23</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998912077777"> 91 207 77 77</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Коканд</p>
                        </div>
                        <div class="name">
                            <p>Мухуддин</p>
                        </div>
                        <div class="adress">
                            <p>Улица Фуркат, 37. Напротив дехкан базара</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998944454454"> 94 445 44 54</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Самарканд</p>
                        </div>
                        <div class="name">
                            <p>Жонибек</p>
                        </div>
                        <div class="adress">
                            <p>Улица Рудакий, 158</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998915307708">91 530 77 08</a><br>
                               <a href="tel:+998981377708"> 98 137 77 08</a>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="city">
                            <p>Термез</p>
                        </div>
                        <div class="name">
                            <p>Боходир</p>
                        </div>
                        <div class="adress">
                            <p>Улица Тараккиёт, перекресток Океан, махалля Ёшлик, дом 12</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998935086633">93 508 66 33<br>
                              <a href="tel:+998977679955">97 767 99 55</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Фергана</p>
                        </div>
                        <div class="name">
                            <p>Гулом ака
                                Сарвар
                                Рустам ака</p>
                        </div>
                        <div class="adress">
                            <p>Улица А. Навойи, дом 12а.
                                Мулжал вилоят Хокимлиги олдида</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998916565377">91 656 53 77</a><br>
                            <a href="tel:+998975017887">97 501 78 87</a><br>
                             <a href="tel:+998985761977">98 576 19 77</a>
                        </div>
                    </div>
            <h4>Ташкент</h4>
                    <div class="table-row">
                        <div class="city">
                            <p>Бек-Тупи</p>
                        </div>
                        <div class="name">
                            <p>Алишер</p>
                        </div>
                        <div class="adress">
                            <p>Рынок Бек-Тупи</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998977564727">97 756 47 27</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Бек-Тупи</p>
                        </div>
                        <div class="name">
                            <p>Суннат</p>
                        </div>
                        <div class="adress">
                            <p>Рынок Бек-Тупи</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998977786701">97 778 67 01</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Джами</p>
                        </div>
                        <div class="name">
                            <p>Нодир
                                Шерзод</p>
                        </div>
                        <div class="adress">
                            <p>Рынок Джами</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998951694080">95 169 40 80</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Домбрабад</p>
                        </div>
                        <div class="name">
                            <p>Александра</p>
                        </div>
                        <div class="adress">
                            <p>Стройрынок Домбрабад, 9 этажка</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998933771347">93 377 13 47</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Куйлюк</p>
                        </div>
                        <div class="name">
                            <p>Асрор</p>
                        </div>
                        <div class="adress">
                            <p>Рынок Куйлюк</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998974201442">97 420 14 42</a><br>
                               <a href="tel:+998974021442"> 97 402 14 42</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Шота Руставели</p>
                        </div>
                        <div class="name">
                            <p>Миродил</p>
                        </div>
                        <div class="adress">
                            <p>Шота Руставели</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998909029994">90 902 99 94</a>
                        </div>
                    </div>

                    <div class="table-row">
                        <div class="city">
                            <p>Юнус-Абад</p>
                        </div>
                        <div class="name">
                            <p>Акбар</p>
                        </div>
                        <div class="adress">
                            <p>Юнус-Абад, 8 квартал</p>
                        </div>
                        <div class="table-contact">
                            <a href="tel:+998977161546">97 716 15 46</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/gardian.jpg')}}" alt="logo"></div>
                    <div class="name">
                        <p> Гардиан </p>
                    </div>
                </div>
                <div class="text">
                    <p> Гардиан – это группа компаний, которая включает производственные комплексы предприятий по
                        изготовлению стальных дверей, замков и фурнитуры, цилиндровых механизмов, декоративных панелей
                        для стальных дверей, межкомнатных дверей, мебельных фасадов и 3D-стеновых панелей.</p>
                </div>
            </div>

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/dara.jpg')}}" alt="logo"></div>
                    <div class="name">
                        <p> Dara </p>
                    </div>
                </div>
                <div class="text">
                    <p> Dara - это стильные межкомнатные двери, которые украсят ваш интерьер.<br><br>

                        Отделка межкомнатных дверей Dara по цвету и фактуре полностью сочетаются с внутренними отделками
                        входных дверей Бульдорс<br><br>

                        Двери Dara удачно впишутся в любой интерьер! Всего компания представляет 3 коллекции<br><br>

                        межкомнатных дверей в различных стилях:<br><br>

                        - классический - Diva<br>
                        - минимализм - Crystal<br>
                        - хай-тек - Silver<br><br>

                        Dara - двери на радость</p>
                </div>
            </div>


            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/profildoors.jpg')}}" alt="logo"></div>
                    <div class="name">
                        <p> Profil-Doors </p>
                    </div>
                </div>
                <div class="text">
                    <p> Компания ProfilDoors образована в 2002 году. В начале деятельности предприятие производило
                        комплектующие для дверного и мебельного производства. С 2004 года налажен выпуск межкомнатных
                        дверей, при производстве которых используются самые последние технологии, материалы и достижения
                        в мировой дверной индустрии.</p>
                </div>
            </div>

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/wellwood.png')}}" alt="logo"></div>
                    <div class="name">
                        <p> wellwood </p>
                    </div>
                </div>
                <div class="text">
                    <p>Фирменный магазин мебели в Ташкенте. Компания предлагает широкий ассортимент самой разнообразной
                        мебели на любой вкус и цвет, а также занимается изготовлением мебели на заказ.</p>
                </div>
            </div>

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/dimplex.jpg')}}" alt="logo"></div>
                    <div class="name">
                        <p> Dimplex </p>
                    </div>
                </div>
                <div class="text">
                    <p>Dimplex является мировым лидером на рынке электрокаминов и аксессуаров к ним, поставляя свою продукцию во многие регионы мира. Компания основана в 1973 году в Северной Ирландии.</p>
                </div>
            </div>

            <div class="p-block">
                <div class="p-head">
                    <div class="logo"><img src="{{asset('public/pictures/partners/modulemebel.jpg')}}" alt="logo"></div>
                    <div class="name">
                        <p> Module-Mebel </p>
                    </div>
                </div>
                <div class="text">
                    <p>Ташкентский салон мебели специализирующийся на изготовлении готовых решений для дома на заказ.</p>
                </div>
            </div>

        </div>
    </section>

@endsection
