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
                            <div class="stick__descuento">-10%</div>
                            <img src="libros/04.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Oppenheimer</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior" >$40.48</div>
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

                    <div class="libros">
                        <div class="cover">
                            <img src="libros/01.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Padre Rico</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$30.39</div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                    <div class="libros">
                        <div class="cover">
                            <img src="libros/02.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Mi Queso</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$19.99</div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                    <div class="libros">
                        <div class="cover">
                            <img src="libros/03.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Heroes de Cada Dia</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$15.75</div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                    <div class="libros">
                        <div class="cover">
                            <div class="stick__descuento">-10%</div>
                            <img src="libros/04.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Oppenheimer</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior" >$40.48</div>
                                <div class="precio__actual">$36.43</div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                    <div class="libros">
                        <div class="cover">
                            <img src="libros/05.jpg" alt="">
                                <div class="info">
                                    <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                    <a href="#"><i class="fa-regular fa-eye"></i></a>
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <a href="#"><i class="fa-solid fa-plus"></i></a>
                                </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Psicologia Dinero</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$19.99</div>
                            </div>
                            
                        </div>
                        
                    </div>
    
                    <div class="libros">
                        <div class="cover">
                            <img src="libros/06.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">El Monje</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$25.00</div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="libros">
                        <div class="cover">
                            <span>NEW</span>
                            <img src="libros/07.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button>
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
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$17.50</div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="libros">
                        <div class="cover">
                            <img src="libros/08.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Mi Primer Millón</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$22.50</div>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="libros">
                        <div class="cover">
                            <img src="libros/09.jpg" alt="">
                            <div class="info">
                                <button><i class="fa-solid fa-cart-shopping"></i>ADD TO CART</button>
                                <a href="#"><i class="fa-regular fa-eye"></i></a>
                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="linea__1">
                                <h4 class="name">Cambie su Mundo</h4>
                                <div class="start">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            
                            <div class="linea__2">
                                <div class="precio__anterior"></div>
                                <div class="precio__actual">$13.25</div>
                            </div>
                            
                        </div>
                        
                    </div>

                </div>


            </div>
        </section>
    </main>

@endsection