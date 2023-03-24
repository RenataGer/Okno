@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Okno</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
body {
font-family: 'Nunito', sans-serif;
}

ul, li {
    display: block;
    padding: 0;
    margin: 0;
}

h1, h2, h3, h4, p{
    font-weight: 700;
    color: #fff;
    font-weight: bolder;
}
h2 {
    text-align: center;
}
h3 {
    font-weight: 400;
}
/* первый экран*/

header{
    padding-top: 30px;
    display: flex;
    justify-content: center;
}
.menu{
 margin-top: 10px;
}

.menu_item{
 margin: 25px;
 
}

.menu_item a{
    text-decoration: none;
    font-size: 22px;
    font-weight: 700;
    color: black;
}
.menu_item a:hover{
    color: #be3333;
}

.carousel-inner h2 {
    font-weight: bold;
    margin-bottom: 50px;
}

.carousel-inner {
    padding-top: 50px;
    margin-bottom: 50px;
    
}

.reviews{
	background-color:  #ABCDEF;
	padding-top: 30px;
}
.text-pyp1 {
	position: relative;
	top: 110px;
}

.text-pyp1 h3 {
	font-size: 15px;
	font-weight: bold;
	position: relative;
	left: 80px;
}

.text-pyp1 p{
	font-size: 15px;
	position: relative;
	top: 20px;
	left: 20px;
}

.text-pyp2 {
	position: relative;
	bottom: 160px;
	margin: 40px;
}

.text-pyp2 h3{
	font-size: 15px;
	font-weight: bold;
	position: relative;
	top: 10px;
	left: 40px;
}

.text-pyp2 p{
	font-size: 15px;
	position: relative;
	top: 20px;
	right: 20px;
}



.reviews_block_3{
	position: relative;
	right: 330px;
} 

.karta {
	position: relative;
	top: 100px;
	left: 50px;
}

/*Footer*/

.footer h4 {
    color:  #ABCDEF;
	font-weight: bold;
    font-size: 20px;
    padding-bottom: 3px;
}
.footer a {
    text-decoration: none;
    transition: all .3s;
}
.footer a:hover {
    color: #002F55;
}

.footer a, .footer ul {
    color: #42AAFF;
}
        </style>
    </head>
        <body class="antialiased">
        <section class="reviews">
        <div class="container">
            <div class="row">                  
                    <div class="col-lg-3 col-md-2 adres">
                        <div class="text-pyp1">
                            <h3>Адресс</h3>
                            <p>г. Нск, Красный проспект,  165/8</p>
                        </div>
                    <div class="reviews_block1">
                            <img src="img/Group 11.png" alt="">
                        </div>
                    </div>                        
                    <div class="col-lg-3 col-md-2 telefon">
                        <div class="text-pyp1">
                            <h3>Телефон</h3>
                            <p>+7 913 4796865</p>
                        </div>
                        <div class="reviews_block2">
                            <img src="img/Group 44.png" alt="">
                        </div>
                    </div>    
                    <div class="karta col-lg-6 col-md-2">
                      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3f9d14ea7f9e9929abc121f4dfd0e117546d2f37b59ef8368324a8499871009c&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>            
                    <div class="col-lg-6 col-md-2 chas">
                        <div class="reviews_block4">
                            <img src="img/Group 33.png" alt="">
                        </div>
                        <div class="text-pyp2">
                            <h3>Часы работы</h3>
                            <p>10:00 - 18:00</p>
                        </div>
                    </div>  
                    <div class="col-lg-6 col-md-2 reviews_block_3">
                        <div class="pochta">
                            <img src="img/Group 22.png" alt="">
                        </div>
                        <div class="text-pyp3 text-pyp2">
                            <h3>Почта</h3>
                            <p>sab.nsk14@gmail.com</p>
                        </div>
                    </div>    
             </div>  
        </div>
    </section>
    
    <footer>
      <section class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-2  text-center" >
              <h4 >Информация</h4>
              <ul class="list-unstyled text-center">
                <li><a href="about.html">О нас</a></li>
                <li><a href="">Контакты</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-2 text-center">
              <h4>Время работы</h4>
              <ul class="list-unstyled">
                <li>10:00 - 18:00</li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-2 text-center">
              <h4>Контакты</h4>
              <ul class="list-unstyled">
                <li><a href="tel:5551234567"> +7 913 4796865</a></li>
                <li><a href="tel:5551234568"> sab.nsk14@gmail.com</a></li>
              </ul>
            </div>
        </div>
      </section>
    </footer>
            
    </body>
</html>
@endsection