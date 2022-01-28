@extends('layouts.default')

@section('content')
    <section class="h-screen flex items-center">
    <div class="container mx-auto">
        <h1 class="text-white text-8xl mb-6 uppercase font-black">
            Nam <span class ="text-purple-500">Xuân</span>
        </h1>
        <h3 class="text-white text-4xl font-light tracking-wider">
            Welcome to my website, it my first time with Laravel!
        </h3>
    </div>
    </section>
@endsection

@section('animation')
    <section class="h-screen flex items-center">
    <div id="div-main">

        <div class="div-2">

            <div class="panda">
                <div class="face">
                    <div class="ear-l"></div>
                    <div class="ear-r"></div>
                    <div class="eye-1">
                        <div class="iris"></div>
                    </div>
                    <div class="eye-2">
                        <div class="iris"></div>
                    </div>
                    <div class="nose"></div>
                    <div class="mouth"></div>
                </div>
                
                <div class="l-hand"></div>
                <div class="r-hand"></div>
                <div class="l-foot"></div>
                <div class="r-foot"></div>
            </div>

        </div>

        </div>
        <style>
            #div-main{
    display: flex;
    flex-direction: column;
    align-items:center;
    justify-content: center;
}
.div-2{
    height: 500px;
    display: flex;
    justify-content:center;
    align-items: center;
    
}
.text-align{
    font-size: 55px;
    text-align: center;
}

body{
    background: #0d70ff;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* animation: change-color 6s infinite linear; */
}
@keyframes change-color{
    0% {background:linear-gradient(0.25turn,#c6ffdd, #fbd786, #f7797d);}
    25% {background: linear-gradient(0.25turn,#12c2e9, #c471ed, #f64f59);}
    50% {background:linear-gradient(#40e0d0, #ff8c00, #ff0080);}
    100% {background:linear-gradient(0.5turn,#da4453, #89216b);}
}
.panda{
    width: 200px;
    height: 200px;
    background-image: linear-gradient(black 40%,#e0dfda 30%);
    border-radius: 200px 200px 150px 150px ;
    border: 0.5px solid white;    
}
.face{
    width: 200px;
    height: 170px;
    background: #FCF2D0;
    border-radius: 50%;
    position:relative;
    top: -120px;
    box-shadow: 50px 0px 0px #FAE0BD inset;
}
.l-hand{
    width: 55px;
    height: 100px;
    background: black;
    position: relative;
    border-radius: 50px;
    top: -200px;
    left:-10px;
    z-index: -1; /*z-index số nhỏ hơn nằm ở dưới */
    transform: rotate(-30deg);
    transform-origin: bottom;
    animation: l-hand-waving 2s infinite linear;
}
@keyframes l-hand-waving {
    50%{
        transform: rotate(-50deg);
    }
}
.r-hand{
    width: 55px;
    height: 100px;
    background: black;
    position: relative;
    border-radius: 50px;
    top: -297px;
    left:160px;
    z-index: -1;
    transform: rotate(27deg);
    transform-origin: bottom;
}
.l-foot{
    width: 55px;
    height: 100px;
    background: black;
    position: relative;
    border-radius: 50px;
    bottom: 200px;
    left:30px;
    z-index: -1;
    transform-origin:bottom ;
}
.r-foot{
    width: 55px;
    height: 100px;
    background: black;
    position: relative;
    border-radius: 50px;
    bottom: 300px;
    left:110px;
    z-index: -1;
    transform-origin:bottom ;
}
.ear-l{
    width: 70px;
    height: 70px;
    background: black;
    position: relative;
    border-radius: 50px;
    bottom: 30px;
    z-index: -1;
    transform-origin:bottom ;
}
.ear-r{
    width: 70px;
    height: 70px;
    background: black;
    position: relative;
    border-radius: 50%;
    bottom: 100px;
    left:130px;
    z-index: -1;
    transform-origin:bottom ;
}
.eye-1{
    width: 50px;
    height: 60px;
    background: rgb(0, 0, 0);
    position: relative;
    border-radius: 50%;
    bottom: 100px;
    left:20px;
    z-index: 0;
    transform-origin:bottom ;
}
.eye-2{
    width: 50px;
    height: 60px;
    background: rgb(8, 8, 8);
    position: relative;
    border-radius: 50%;
    bottom: 160px;
    left:130px;
    z-index: 0;
    transform-origin:bottom ;
}
.iris{
    width: 20px;
    height: 20px;
    background: rgb(255, 254, 254);
    position: absolute;
    border-radius: 50%;
    top: 20px;
    left:15px;
    z-index: 0;
    transform-origin:bottom ;
}
.nose{
    width: 40px;
    height: 30px;
    background: rgb(7, 7, 7);
    position: absolute;
    border-radius: 50%;
    top: 80px;
    left:80px;
    z-index: 0;
    transform-origin:bottom ;
}
.mouth{
    width: 90px;
    height: 90px;
    background-color: transparent;
    border:10px solid transparent;
    border-bottom-color:black;
    border-radius: 50%;
    position: absolute;
    top: 30px;
    left:45px;
    transform: rotate(0deg);
}
        </style>
    </section>
@endsection

