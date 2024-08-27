@extends('layout.app-layout')

@section('title', 'home')

@section('content')

    <main>

        <div class="imagen__container">
            <div class="imagen__principal">
                <div class="img">
                    <h1>ff 40%</h1>
                    <div class="info__hero">
                        <h3>couple beauty love</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat iure quam<br> quisquam repudiandae dicta deserunt.</p>
                        <button type="submit">SHOP NOW!</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="container__best">
            <div class="hot__seller">
                <h4>hot seller <div class="direction"><i class="fa-solid fa-angle-left"></i><i class="fa-solid fa-angle-right"></i></div></i></h4>
                
                <div class="contenedor__libro">

                    <div class="libros">
                        <div class="cover">
                            <div class="stick__descuento">-{{ $libros[3]['descuento'] }}%</div>
                            <img src="{{ $libros[3]['imagen'] }}" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">{{ $libros[3]['titulo'] }}</h4>
                                <div class="start">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior" >${{ $libros[3]['precio'] }}</div>
                                <div class="precio__actual">$36.43</div>
                            </div>
                            
                        </div>
                        <div class="time"><i class="fa-regular fa-clock fa-flip-horizontal"></i>795 Days 00:05:39</div>
                    </div>
                </div>

                <div class="new__arrivals">
                    <h4>new arrivals <div class="direction"><i class="fa-solid fa-angle-left"></i><i class="fa-solid fa-angle-right"></i></div></i></h4>

                    <div class="contenedor__libro">

                        <div class="libros">
                            <div class="cover">
                                <span>NEW</span>
                                <img src="libros/07.jpg" alt="">
                                <div class="info">
                                    <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                    <a href="#"><i class="fa-regular fa-eye"></i></a>
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#"><i class="fa-solid fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="descripcion">
                                <div class="linea__1">
                                    <h4 class="name">Generacion Idiota</h4>
                                    <div class="start">
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                                
                                <div class="linea__2">
                                    <div class="precio__anterior" ></div>
                                    <div class="precio__actual">$17.50</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="best__seller">

                <h4>best seller <div class="direction"><i class="fa-solid fa-angle-left"></i><i class="fa-solid fa-angle-right"></i></div></i></h4>

                <div class="contenedor__libro">

                    @foreach ($libros as $libro)

                        <div class="libros">
                        <div class="cover">
                            <img src="{{ $libro['imagen'] }}" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">{{ $libro['titulo'] }}</h4>
                                <div class="start">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                    <div class="precio__actual">$ {{ $libro['precio'] }}</div>
                            </div>
                                
                        </div>
                            
                    </div>

                    @endforeach

                </div>

            </div>
        </section>
    </main>

@endsection
