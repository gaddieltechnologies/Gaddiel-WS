<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";s:41921:"/*animations*/

/******************
* Bounce in right *
*******************/


.animated { 
    -webkit-animation-duration: 1s; 
    animation-duration: 1s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
} 
.slow{
     -webkit-animation-duration: 1.5s; 
    animation-duration: 1.5s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
}
.slower{
     -webkit-animation-duration: 2s; 
    animation-duration: 2s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
}
.slowest{
     -webkit-animation-duration: 3s; 
    animation-duration: 3s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
}

/* Added by Andy Meetan */
.delay-250 {
    -webkit-animation-delay:0.25s;
    -moz-animation-delay:0.25s;
    -o-animation-delay:0.25s;
    animation-delay:0.25s;
}
.delay-500 {
    -webkit-animation-delay:0.5s;
    -moz-animation-delay:0.5s;
    -o-animation-delay:0.5s;
    animation-delay:0.5s;
}
.delay-750 {
    -webkit-animation-delay:0.75s;
    -moz-animation-delay:0.75s;
    -o-animation-delay:0.75s;
    animation-delay:0.75s;
}
.delay-1000 {
    -webkit-animation-delay:1.0s;
    -moz-animation-delay:1.0s;
    -o-animation-delay:1.0s;
    animation-delay:1.0s;
}
.delay-1250 {
    -webkit-animation-delay:1.25s;
    -moz-animation-delay:1.25s;
    -o-animation-delay:1.25s;
    animation-delay:1.25s;
}
.delay-1500 {
    -webkit-animation-delay:1.5s;
    -moz-animation-delay:1.5s;
    -o-animation-delay:1.5s;
    animation-delay:1.5s;
}
.delay-1750 {
    -webkit-animation-delay:1.75s;
    -moz-animation-delay:1.75s;
    -o-animation-delay:1.75s;
    animation-delay:1.75s;
}
.delay-2000 {
    -webkit-animation-delay:2.0s;
    -moz-animation-delay:2.0s;
    -o-animation-delay:2.0s;
    animation-delay:2.0s;
}
.delay-2500 {
    -webkit-animation-delay:2.5s;
    -moz-animation-delay:2.5s;
    -o-animation-delay:2.5s;
    animation-delay:2.5s;
}
.delay-2000 {
    -webkit-animation-delay:2.0s;
    -moz-animation-delay:2.0s;
    -o-animation-delay:2.0s;
    animation-delay:2.0s;
}
.delay-2500 {
    -webkit-animation-delay:2.5s;
    -moz-animation-delay:2.5s;
    -o-animation-delay:2.5s;
    animation-delay:2.5s;
}
.delay-3000 {
    -webkit-animation-delay:3.0s;
    -moz-animation-delay:3.0s;
    -o-animation-delay:3.0s;
    animation-delay:3.0s;
}
.delay-3500 {
    -webkit-animation-delay:3.5s;
    -moz-animation-delay:3.5s;
    -o-animation-delay:3.5s;
    animation-delay:3.5s;
}

.bounceInRight, .bounceInLeft, .bounceInUp, .bounceInDown{
    opacity:0;
    -webkit-transform: translateX(400px); 
    transform: translateX(400px); 
}
.fadeInRight, .fadeInLeft, .fadeInUp, .fadeInDown{
    opacity:0;
    -webkit-transform: translateX(400px); 
    transform: translateX(400px); 
}

.flipInX, .flipInY, .rotateIn, .rotateInUpLeft, .rotateInUpRight, .rotateInDownLeft, .rotateDownUpRight, .rollIn{
    opacity:0;
}

.lightSpeedInRight, .lightSpeedInLeft{
    opacity:0;
    -webkit-transform: translateX(400px); 
    transform: translateX(400px); 
}

/***********
* bounceIn *
************/
@-webkit-keyframes bounceIn { 
    0% { 
        opacity: 0; 
        -webkit-transform: scale(.3); 
    } 

    50% { 
        opacity: 1; 
        -webkit-transform: scale(1.05); 
    } 

    70% { 
        -webkit-transform: scale(.9); 
    } 

    100% { 
         -webkit-transform: scale(1); 
    } 
} 

@keyframes bounceIn { 
    0% { 
        opacity: 0; 
        transform: scale(.3); 
    } 

    50% { 
        opacity: 1; 
        transform: scale(1.05); 
    } 

    70% { 
        transform: scale(.9); 
    } 

    100% { 
        transform: scale(1); 
    } 
} 

.bounceIn.go { 
    -webkit-animation-name: bounceIn; 
    animation-name: bounceIn; 
}

/****************
* bounceInRight *
****************/

@-webkit-keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        
        -webkit-transform: translateX(400px); 
    } 
    60% { 
        
        -webkit-transform: translateX(-30px); 
    } 
    80% { 
        -webkit-transform: translateX(10px); 
    } 
    100% {
    opacity: 1;
     
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        
        transform: translateX(400px); 
    } 
    60% { 
        
        transform: translateX(-30px); 
    } 
    80% { 
        transform: translateX(10px); 
    } 
    100% {
    opacity: 1;
     
        transform: translateX(0); 
    } 
} 


.bounceInRight.go { 
    -webkit-animation-name: bounceInRight; 
    animation-name: bounceInRight; 
}

/******************
* Bounce in left *
*******************/

@-webkit-keyframes bounceInLeft { 
    0% { 
        opacity: 0; 
        
        -webkit-transform: translateX(-400px); 
    } 
    60% { 
       
        -webkit-transform: translateX(30px); 
    } 
    80% { 
        -webkit-transform: translateX(-10px); 
    } 
    100% {
        opacity: 1;
         
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInLeft { 
    0% { 
        opacity: 0; 
        
        transform: translateX(-400px); 
    } 
    60% { 
       
        transform: translateX(30px); 
    } 
    80% { 
        transform: translateX(-10px); 
    } 
    100% {
        opacity: 1;
         
        transform: translateX(0); 
    } 
} 

.bounceInLeft.go { 
    -webkit-animation-name: bounceInLeft; 
    animation-name: bounceInLeft; 
}

/******************
* Bounce in up *
*******************/

@-webkit-keyframes bounceInUp { 
    0% { 
        opacity: 0; 
        
        -webkit-transform: translateY(400px); 
    } 
    60% { 
       
        -webkit-transform: translateY(-30px); 
    } 
    80% { 
        -webkit-transform: translateY(10px); 
    } 
    100% {
        opacity: 1;
         
        -webkit-transform: translateY(0); 
    } 
} 

@keyframes bounceInUp { 
    0% { 
        opacity: 0; 
        
        transform: translateY(400px); 
    } 
    60% { 
       
        transform: translateY(-30px); 
    } 
    80% { 
        transform: translateY(10px); 
    } 
    100% {
        opacity: 1;
         
        transform: translateY(0); 
    } 
} 

.bounceInUp.go { 
    -webkit-animation-name: bounceInUp; 
    animation-name: bounceInUp; 
}


/******************
* Bounce in down *
*******************/

@-webkit-keyframes bounceInDown { 
    0% { 
        opacity: 0; 
        
        -webkit-transform: translateY(-400px); 
    } 
    60% { 
       
        -webkit-transform: translateY(30px); 
    } 
    80% { 
        -webkit-transform: translateY(-10px); 
    } 
    100% {
        opacity: 1;
         
        -webkit-transform: translateY(0); 
    } 
} 

@keyframes bounceInDown { 
    0% { 
        opacity: 0; 
        
        transform: translateY(-400px); 
    } 
    60% { 
       
        transform: translateY(30px); 
    } 
    80% { 
        transform: translateY(-10px); 
    } 
    100% {
        opacity: 1;
         
        transform: translateY(0); 
    } 
} 

.bounceInDown.go { 
    -webkit-animation-name: bounceInDown; 
    animation-name: bounceInDown; 
}


/**********
* Fade In *
**********/ 
@-webkit-keyframes fadeIn { 
    0% {opacity: 0;} 
    100% {opacity: 1;
        display:block;} 
} 
@keyframes fadeIn { 
    0% {opacity: 0;} 
    100% {opacity: 1;
        display:block;} 
}
.fadeIn{
    opacity:0;
}
.fadeIn.go { 
    -webkit-animation-name: fadeIn; 
    animation-name: fadeIn; 
}

/**********
* Grow in *
***********/

@-webkit-keyframes growIn { 
    0% { 
        -webkit-transform: scale(0.2); 
        opacity:0;
    } 
    50% { 
        -webkit-transform: scale(1.2); 
        
    } 
    100% { 
        -webkit-transform: scale(1); 
        opacity:1;
    } 
} 
@keyframes growIn { 
    0% { 
        transform: scale(0.2); 
        opacity:0;
    } 
    50% { 
        transform: scale(1.2); 
        
    } 
    100% { 
        transform: scale(1); 
        opacity:1;
    } 
} 
.growIn { 

    -webkit-transform: scale(0.2);
    transform: scale(0.2);
    opacity:0;
}
.growIn.go{
    -webkit-animation-name: growIn; 
    animation-name: growIn; 
}

/********
* Shake *
********/
@-webkit-keyframes shake { 
    0%, 100% {-webkit-transform: translateX(0);} 
    10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);} 
    20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);} 
} 
@keyframes shake { 
    0%, 100% {transform: translateX(0);} 
    10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);} 
    20%, 40%, 60%, 80% {transform: translateX(10px);} 
} 
.shake.go { 
    -webkit-animation-name: shake; 
    animation-name: shake; 
}

/********
* ShakeUp *
********/
@-webkit-keyframes shakeUp { 
    0%, 100% {-webkit-transform: translateX(0);} 
    10%, 30%, 50%, 70%, 90% {-webkit-transform: translateY(-10px);} 
    20%, 40%, 60%, 80% {-webkit-transform: translateY(10px);} 
} 
@keyframes shakeUp { 
    0%, 100% {transform: translateY(0);} 
    10%, 30%, 50%, 70%, 90% {transform: translateY(-10px);} 
    20%, 40%, 60%, 80% {transform: translateY(10px);} 
} 
.shakeUp.go { 
    -webkit-animation-name: shakeUp; 
    animation-name: shakeUp; 
}

/*************
* FadeInLeft *
*************/

@-webkit-keyframes fadeInLeft { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(-400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInLeft { 
    0% { 
        opacity: 0; 
        transform: translateX(-400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInLeft{ 
    opacity: 0; 
    -webkit-transform: translateX(-400px); 
    transform: translateX(-400px);
}
.fadeInLeft.go { 
    -webkit-animation-name: fadeInLeft; 
    animation-name: fadeInLeft; 
}


/*************
* FadeInRight *
*************/

@-webkit-keyframes fadeInRight { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInRight { 
    0% { 
        opacity: 0; 
        transform: translateX(400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInRight{ 
    opacity: 0; 
    -webkit-transform: translateX(400px); 
    transform: translateX(400px);
}
.fadeInRight.go { 
    -webkit-animation-name: fadeInRight; 
    animation-name: fadeInRight; 
}

/*************
* FadeInUp *
*************/

@-webkit-keyframes fadeInUp { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateY(400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
} 
@keyframes fadeInUp { 
    0% { 
        opacity: 0; 
        transform: translateY(400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
} 
.fadeInUp{ 
    opacity: 0; 
    -webkit-transform: translateY(400px); 
    transform: translateY(400px);
}
.fadeInUp.go { 
    -webkit-animation-name: fadeInUp; 
    animation-name: fadeInUp; 
}

/*************
* FadeInDown *
*************/

@-webkit-keyframes fadeInDown { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateY(-400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
} 
@keyframes fadeInDown { 
    0% { 
        opacity: 0; 
        transform: translateY(-400px); 
    } 
    50%{
       opacity: 0.3; 
    }
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
} 
.fadeInDown{ 
    opacity: 0; 
    -webkit-transform: translateY(-400px); 
    transform: translateY(-400px);
}
.fadeInDown.go { 
    -webkit-animation-name: fadeInDown; 
    animation-name: fadeInDown; 
}

/*****************
* rotateIn *
*****************/
@-webkit-keyframes rotateIn { 
    0% { 
        -webkit-transform-origin: center center; 
        -webkit-transform: rotate(-200deg); 
        opacity: 0; 
    } 
    100% { 
        -webkit-transform-origin: center center; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
} 
@keyframes rotateIn { 
    0% { 
        transform-origin: center center; 
        transform: rotate(-200deg); 
        opacity: 0; 
    } 
    100% { 
        transform-origin: center center; 
        transform: rotate(0); 
        opacity: 1; 
    } 
} 
.rotateIn.go { 
    -webkit-animation-name: rotateIn; 
    animation-name: rotateIn; 
}

/*****************
* rotateInUpLeft *
*****************/

@-webkit-keyframes rotateInUpLeft { 
    0% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(90deg); 
        opacity: 0; 
    } 
    100% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
} 
@keyframes rotateInUpLeft { 
    0% { 
        transform-origin: left bottom; 
        transform: rotate(90deg); 
        opacity: 0; 
    } 
    100% { 
        transform-origin: left bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
} 
.rotateInUpLeft.go { 
    -webkit-animation-name: rotateInUpLeft; 
    animation-name: rotateInUpLeft; 
}

/*******************
* rotateInDownLeft *
*******************/
@-webkit-keyframes rotateInDownLeft { 
    0% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(-90deg); 
        opacity: 0; 
    } 
    100% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
} 
@keyframes rotateInDownLeft { 
    0% { 
        transform-origin: left bottom; 
        transform: rotate(-90deg); 
        opacity: 0; 
    } 
    100% { 
        transform-origin: left bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
} 
.rotateInDownLeft.go { 
    -webkit-animation-name: rotateInDownLeft; 
    animation-name: rotateInDownLeft; 
}

/******************
* rotateInUpRight *
*******************/

@-webkit-keyframes rotateInUpRight { 
    0% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(-90deg); 
        opacity: 0; 
    } 
    100% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
} 
@keyframes rotateInUpRight { 
    0% { 
        transform-origin: right bottom; 
        transform: rotate(-90deg); 
        opacity: 0; 
    } 
    100% { 
        transform-origin: right bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
} 
.rotateInUpRight.go { 
    -webkit-animation-name: rotateInUpRight; 
    animation-name: rotateInUpRight; 
}

/********************
* rotateInDownRight *
********************/

@-webkit-keyframes rotateInDownRight { 
    0% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(90deg); 
        opacity: 0; 
    } 
    100% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
} 
@keyframes rotateInDownRight { 
    0% { 
        transform-origin: right bottom; 
        transform: rotate(90deg); 
        opacity: 0; 
    } 
    100% { 
        transform-origin: right bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
} 
.rotateInDownRight.go { 
    -webkit-animation-name: rotateInDownRight; 
    animation-name: rotateInDownRight; 
}

/*********
* rollIn *
**********/

@-webkit-keyframes rollIn { 
    0% { opacity: 0; -webkit-transform: translateX(-100%) rotate(-120deg); } 
    100% { opacity: 1; -webkit-transform: translateX(0px) rotate(0deg); } 
} 
@keyframes rollIn { 
    0% { opacity: 0; transform: translateX(-100%) rotate(-120deg); } 
    100% { opacity: 1; transform: translateX(0px) rotate(0deg); } 
} 
.rollIn.go { 
    -webkit-animation-name: rollIn; 
    animation-name: rollIn; 
}

/*********
* wiggle *
**********/

@-webkit-keyframes wiggle { 
    0% { -webkit-transform: skewX(9deg); } 
    10% { -webkit-transform: skewX(-8deg); } 
    20% { -webkit-transform: skewX(7deg); } 
    30% { -webkit-transform: skewX(-6deg); } 
    40% { -webkit-transform: skewX(5deg); } 
    50% { -webkit-transform: skewX(-4deg); } 
    60% { -webkit-transform: skewX(3deg); } 
    70% { -webkit-transform: skewX(-2deg); } 
    80% { -webkit-transform: skewX(1deg); } 
    90% { -webkit-transform: skewX(0deg); } 
    100% { -webkit-transform: skewX(0deg); } 
} 
@keyframes wiggle { 
    0% { transform: skewX(9deg); } 
    10% { transform: skewX(-8deg); } 
    20% { transform: skewX(7deg); } 
    30% { transform: skewX(-6deg); } 
    40% { transform: skewX(5deg); } 
    50% { transform: skewX(-4deg); } 
    60% { transform: skewX(3deg); } 
    70% { transform: skewX(-2deg); } 
    80% { transform: skewX(1deg); } 
    90% { transform: skewX(0deg); } 
    100% { transform: skewX(0deg); } 
} 
.wiggle.go { 
    -webkit-animation-name: wiggle; 
    animation-name: wiggle; 
    -webkit-animation-timing-function: ease-in; 
    animation-timing-function: ease-in; 
} 

/********
* swing *
*********/

@-webkit-keyframes swing { 
    20%, 40%, 60%, 80%, 100% { -webkit-transform-origin: top center; } 
    20% { -webkit-transform: rotate(15deg); } 
    40% { -webkit-transform: rotate(-10deg); } 
    60% { -webkit-transform: rotate(5deg); } 
    80% { -webkit-transform: rotate(-5deg); } 
    100% { -webkit-transform: rotate(0deg); } 
} 
@keyframes swing { 
    20% { transform: rotate(15deg); } 
    40% { transform: rotate(-10deg); } 
    60% { transform: rotate(5deg); } 
    80% { transform: rotate(-5deg); } 
    100% { transform: rotate(0deg); } 
} 
.swing.go { 
    -webkit-transform-origin: top center; 
    transform-origin: top center; 
    -webkit-animation-name: swing; 
    animation-name: swing; 
}

/*******
* tada *
********/

@-webkit-keyframes tada { 
    0% {-webkit-transform: scale(1);} 
    10%, 20% {-webkit-transform: scale(0.9) rotate(-3deg);} 
    30%, 50%, 70%, 90% {-webkit-transform: scale(1.1) rotate(3deg);} 
    40%, 60%, 80% {-webkit-transform: scale(1.1) rotate(-3deg);} 
    100% {-webkit-transform: scale(1) rotate(0);} 
} 
@keyframes tada { 
    0% {transform: scale(1);} 
    10%, 20% {transform: scale(0.9) rotate(-3deg);} 
    30%, 50%, 70%, 90% {transform: scale(1.1) rotate(3deg);} 
    40%, 60%, 80% {transform: scale(1.1) rotate(-3deg);} 
    100% {transform: scale(1) rotate(0);} 
} 
.tada.go { 
    -webkit-animation-name: tada; 
    animation-name: tada; 
}

/*********
* wobble *
**********/

@-webkit-keyframes wobble { 
  0% { -webkit-transform: translateX(0%); } 
  15% { -webkit-transform: translateX(-25%) rotate(-5deg); } 
  30% { -webkit-transform: translateX(20%) rotate(3deg); } 
  45% { -webkit-transform: translateX(-15%) rotate(-3deg); } 
  60% { -webkit-transform: translateX(10%) rotate(2deg); } 
  75% { -webkit-transform: translateX(-5%) rotate(-1deg); } 
  100% { -webkit-transform: translateX(0%); } 
} 
@keyframes wobble { 
  0% { transform: translateX(0%); } 
  15% { transform: translateX(-25%) rotate(-5deg); } 
  30% { transform: translateX(20%) rotate(3deg); } 
  45% { transform: translateX(-15%) rotate(-3deg); } 
  60% { transform: translateX(10%) rotate(2deg); } 
  75% { transform: translateX(-5%) rotate(-1deg); } 
  100% { transform: translateX(0%); } 
} 
.wobble.go { 
    -webkit-animation-name: wobble; 
    animation-name: wobble; 
}

/********
* pulse *
*********/

@-webkit-keyframes pulse { 
    0% { -webkit-transform: scale(1); } 
    50% { -webkit-transform: scale(1.1); } 
    100% { -webkit-transform: scale(1); } 
} 
@keyframes pulse { 
    0% { transform: scale(1); } 
    50% { transform: scale(1.1); } 
    100% { transform: scale(1); } 
} 
.pulse.go { 
    -webkit-animation-name: pulse; 
    animation-name: pulse; 
}

/***************
* lightSpeedInRight *
****************/
@-webkit-keyframes lightSpeedInRight { 
   0% { -webkit-transform: translateX(100%) skewX(-30deg); opacity: 0; } 
    60% { -webkit-transform: translateX(-20%) skewX(30deg); opacity: 1; } 
    80% { -webkit-transform: translateX(0%) skewX(-15deg); opacity: 1; } 
    100% { -webkit-transform: translateX(0%) skewX(0deg); opacity: 1; } 
} 
@keyframes lightSpeedInRight { 
    0% { transform: translateX(100%) skewX(-30deg); opacity: 0; } 
    60% { transform: translateX(-20%) skewX(30deg); opacity: 1; } 
    80% { transform: translateX(0%) skewX(-15deg); opacity: 1; } 
    100% { transform: translateX(0%) skewX(0deg); opacity: 1; } 
} 
.lightSpeedInRight.go { 
    -webkit-animation-name: lightSpeedInRight; 
    animation-name: lightSpeedInRight; 
    -webkit-animation-timing-function: ease-out; 
    animation-timing-function: ease-out; 
} 

/***************
* lightSpeedInLeft *
****************/
@-webkit-keyframes lightSpeedInLeft { 
   0% { -webkit-transform: translateX(-100%) skewX(30deg); opacity: 0; } 
    60% { -webkit-transform: translateX(20%) skewX(-30deg); opacity: 1; } 
    80% { -webkit-transform: translateX(0%) skewX(15deg); opacity: 1; } 
    100% { -webkit-transform: translateX(0%) skewX(0deg); opacity: 1; } 
} 
@keyframes lightSpeedInLeft { 
    0% { transform: translateX(-100%) skewX(30deg); opacity: 0; } 
    60% { transform: translateX(20%) skewX(-30deg); opacity: 1; } 
    80% { transform: translateX(0%) skewX(15deg); opacity: 1; } 
    100% { transform: translateX(0%) skewX(0deg); opacity: 1; } 
} 
.lightSpeedInLeft.go { 
    -webkit-animation-name: lightSpeedInLeft; 
    animation-name: lightSpeedInLeft; 
    -webkit-animation-timing-function: ease-out; 
    animation-timing-function: ease-out; 
} 


/*******
* Flip *
*******/
@-webkit-keyframes flip { 
    0% { 
        -webkit-transform: perspective(400px) rotateY(0); 
        -webkit-animation-timing-function: ease-out; 
    } 
    40% { 
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg); 
        -webkit-animation-timing-function: ease-out; 
    } 
    50% { 
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1); 
        -webkit-animation-timing-function: ease-in; 
    } 
    80% { 
        -webkit-transform: perspective(400px) rotateY(360deg) scale(.95); 
        -webkit-animation-timing-function: ease-in; 
    } 
    100% { 
        -webkit-transform: perspective(400px) scale(1); 
        -webkit-animation-timing-function: ease-in; 
    } 
}
@keyframes flip { 
    0% { 
        transform: perspective(400px) rotateY(0); 
        animation-timing-function: ease-out; 
    } 
    40% { 
        transform: perspective(400px) translateZ(150px) rotateY(170deg); 
        animation-timing-function: ease-out; 
    } 
    50% { 
        transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1); 
        animation-timing-function: ease-in; 
    } 
    80% { 
        transform: perspective(400px) rotateY(360deg) scale(.95); 
        animation-timing-function: ease-in; 
    } 
    100% { 
        transform: perspective(400px) scale(1); 
        animation-timing-function: ease-in; 
    } 
} 
.flip.go { 
    -webkit-backface-visibility: visible !important; 
    -webkit-animation-name: flip; 
    backface-visibility: visible !important; 
    animation-name: flip; 
}

/**********
* flipInX *
**********/
@-webkit-keyframes flipInX { 
    0% { 
        -webkit-transform: perspective(400px) rotateX(90deg); 
        opacity: 0; 
    } 
    40% { 
        -webkit-transform: perspective(400px) rotateX(-10deg); 
    } 
    70% { 
        -webkit-transform: perspective(400px) rotateX(10deg); 
    } 
    100% { 
        -webkit-transform: perspective(400px) rotateX(0deg); 
        opacity: 1; 
    } 
} 
@keyframes flipInX { 
    0% { 
        transform: perspective(400px) rotateX(90deg); 
        opacity: 0; 
    } 
    40% { 
        transform: perspective(400px) rotateX(-10deg); 
    } 
    70% { 
        transform: perspective(400px) rotateX(10deg); 
    } 
    100% { 
        transform: perspective(400px) rotateX(0deg); 
        opacity: 1; 
    } 
} 
.flipInX.go { 
    -webkit-backface-visibility: visible !important; 
    -webkit-animation-name: flipInX; 
    backface-visibility: visible !important; 
    animation-name: flipInX; 
}

/**********
* flipInY *
**********/

@-webkit-keyframes flipInY { 
    0% { 
        -webkit-transform: perspective(400px) rotateY(90deg); 
        opacity: 0; 
    } 
    40% { 
        -webkit-transform: perspective(400px) rotateY(-10deg); 
    } 
    70% { 
        -webkit-transform: perspective(400px) rotateY(10deg); 
    } 
    100% { 
        -webkit-transform: perspective(400px) rotateY(0deg); 
        opacity: 1; 
    } 
} 
@keyframes flipInY { 
    0% { 
        transform: perspective(400px) rotateY(90deg); 
        opacity: 0; 
    } 
    40% { 
        transform: perspective(400px) rotateY(-10deg); 
    } 
    70% { 
        transform: perspective(400px) rotateY(10deg); 
    } 
    100% { 
        transform: perspective(400px) rotateY(0deg); 
        opacity: 1; 
    } 
} 
.flipInY.go { 
    -webkit-backface-visibility: visible !important; 
    -webkit-animation-name: flipInY; 
    backface-visibility: visible !important; 
    animation-name: flipInY; 
}

/*****************
* Out animations *
*****************/


/************
* bounceOut *
*************/
@-webkit-keyframes bounceOut { 
    0% { 
        -webkit-transform: scale(1); 
    } 
    25% { 
        -webkit-transform: scale(.95); 
    } 
    50% { 
        opacity: 1; 
        -webkit-transform: scale(1.1); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: scale(.3); 
    } 
} 
@keyframes bounceOut { 
    0% { 
        transform: scale(1); 
    } 
    25% { 
        transform: scale(.95); 
    } 
    50% { 
        opacity: 1; 
        transform: scale(1.1); 
    } 
    100% { 
        opacity: 0; 
        transform: scale(.3); 
    } 
} 
.bounceOut.goAway { 
    -webkit-animation-name: bounceOut; 
    animation-name: bounceOut; 
}

/************
* bounceOutUp *
*************/
@-webkit-keyframes bounceOutUp { 
    0% { 
        -webkit-transform: translateY(0); 
    } 
    20% { 
        opacity: 1; 
        -webkit-transform: translateY(20px); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateY(-2000px); 
    } 
} 
@keyframes bounceOutUp { 
    0% { 
        transform: translateY(0); 
    } 
    20% { 
        opacity: 1; 
        transform: translateY(20px); 
    } 
    100% { 
        opacity: 0; 
        transform: translateY(-2000px); 
    } 
} 
.bounceOutUp.goAway { 
    -webkit-animation-name: bounceOutUp; 
    animation-name: bounceOutUp; 
}

/************
* bounceOutDown *
*************/
@-webkit-keyframes bounceOutDown { 
    0% { 
        -webkit-transform: translateY(0); 
    } 
    20% { 
        opacity: 1; 
        -webkit-transform: translateY(-20px); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateY(2000px); 
    } 
} 
@keyframes bounceOutDown { 
    0% { 
        transform: translateY(0); 
    } 
    20% { 
        opacity: 1; 
        transform: translateY(-20px); 
    } 
    100% { 
        opacity: 0; 
        transform: translateY(2000px); 
    } 
} 
.bounceOutDown.goAway { 
    -webkit-animation-name: bounceOutDown; 
    animation-name: bounceOutDown; 
}


/************
* bounceOutLeft *
*************/
@-webkit-keyframes bounceOutLeft { 
    0% { 
        -webkit-transform: translateX(0); 
    } 
    20% { 
        opacity: 1; 
        -webkit-transform: translateX(20px); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateX(-2000px); 
    } 
} 
@keyframes bounceOutLeft { 
    0% { 
        transform: translateX(0); 
    } 
    20% { 
        opacity: 1; 
        transform: translateX(20px); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
} 
.bounceOutLeft.goAway { 
    -webkit-animation-name: bounceOutLeft; 
    animation-name: bounceOutLeft; 
}

/************
* bounceOutRight *
*************/
@-webkit-keyframes bounceOutRight { 
    0% { 
        -webkit-transform: translateX(0); 
    } 
    20% { 
        opacity: 1; 
        -webkit-transform: translateX(-20px); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateX(2000px); 
    } 
} 
@keyframes bounceOutRight { 
    0% { 
        transform: translateX(0); 
    } 
    20% { 
        opacity: 1; 
        transform: translateX(-20px); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(2000px); 
    } 
} 
.bounceOutRight.goAway { 
    -webkit-animation-name: bounceOutRight; 
    animation-name: bounceOutRight; 
}

/************
* fadeOut *
*************/
@-webkit-keyframes fadeOut { 
    0% {opacity: 1;} 
    100% {opacity: 0;} 
} 
@keyframes fadeOut { 
    0% {opacity: 1;} 
    100% {opacity: 0;} 
} 
.fadeOut.goAway { 
    -webkit-animation-name: fadeOut; 
    animation-name: fadeOut; 
}

/************
* fadeOutUp *
*************/
@-webkit-keyframes fadeOutUp { 
    0% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateY(-2000px); 
    } 
} 
@keyframes fadeOutUp { 
    0% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
    100% { 
        opacity: 0; 
        transform: translateY(-2000px); 
    } 
} 
.fadeOutUp.goAway { 
    -webkit-animation-name: fadeOutUp; 
    animation-name: fadeOutUp; 
}

/************
* fadeOutDown *
*************/
@-webkit-keyframes fadeOutDown { 
    0% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateY(2000px); 
    } 
} 
@keyframes fadeOutDown { 
    0% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
    100% { 
        opacity: 0; 
        transform: translateY(2000px); 
    } 
} 
.fadeOutDown.goAway { 
    -webkit-animation-name: fadeOutDown; 
    animation-name: fadeOutDown; 
}

/************
* fadeOutLeft *
*************/
@-webkit-keyframes fadeOutLeft { 
    0% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateX(-2000px); 
    } 
} 
@keyframes fadeOutLeft { 
    0% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(-2000px); 
    } 
} 
.fadeOutLeft.goAway { 
    -webkit-animation-name: fadeOutLeft; 
    animation-name: fadeOutLeft; 
}

/************
* fadeOutRight *
*************/
@-webkit-keyframes fadeOutRight { 
    0% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateX(2000px); 
    } 
} 
@keyframes fadeOutRight { 
    0% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(2000px); 
    } 
} 
.fadeOutRight.goAway { 
    -webkit-animation-name: fadeOutRight; 
    animation-name: fadeOutRight; 
}
/************
* flipOutX *
*************/
@-webkit-keyframes flipOutX { 
    0% { 
        -webkit-transform: perspective(400px) rotateX(0deg); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform: perspective(400px) rotateX(90deg); 
        opacity: 0; 
    } 
} 
@keyframes flipOutX { 
    0% { 
        transform: perspective(400px) rotateX(0deg); 
        opacity: 1; 
    } 
    100% { 
        transform: perspective(400px) rotateX(90deg); 
        opacity: 0; 
    } 
} 
.flipOutX.goAway { 
    -webkit-animation-name: flipOutX; 
    -webkit-backface-visibility: visible !important; 
    animation-name: flipOutX; 
    backface-visibility: visible !important; 
}

/************
* flipOutY *
*************/
@-webkit-keyframes flipOutY { 
    0% { 
        -webkit-transform: perspective(400px) rotateY(0deg); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform: perspective(400px) rotateY(90deg); 
        opacity: 0; 
    } 
} 
@keyframes flipOutY { 
    0% { 
        transform: perspective(400px) rotateY(0deg); 
        opacity: 1; 
    } 
    100% { 
        transform: perspective(400px) rotateY(90deg); 
        opacity: 0; 
    } 
} 
.flipOutY { 
    -webkit-backface-visibility: visible !important; 
    -webkit-animation-name: flipOutY; 
    backface-visibility: visible !important; 
    animation-name: flipOutY; 
}

/************
* lightSpeedOutRight *
*************/
@-webkit-keyframes lightSpeedOutRight { 
    0% { -webkit-transform: translateX(0%) skewX(0deg); opacity: 1; } 
    100% { -webkit-transform: translateX(100%) skewX(-30deg); opacity: 0; } 
} 
@keyframes lightSpeedOutRight { 
    0% { transform: translateX(0%) skewX(0deg); opacity: 1; } 
    100% { transform: translateX(100%) skewX(-30deg); opacity: 0; } 
} 
.lightSpeedOutRight.goAway { 
    -webkit-animation-name: lightSpeedOutRight; 
    animation-name: lightSpeedOutRight; 
    -webkit-animation-timing-function: ease-in; 
    animation-timing-function: ease-in; 
} 


/************
* lightSpeedOutLeft *
*************/
@-webkit-keyframes lightSpeedOutLeft { 
    0% { -webkit-transform: translateX(0%) skewX(0deg); opacity: 1; } 
    100% { -webkit-transform: translateX(-100%) skewX(30deg); opacity: 0; } 
} 
@keyframes lightSpeedOutLeft { 
    0% { transform: translateX(0%) skewX(0deg); opacity: 1; } 
    100% { transform: translateX(-100%) skewX(30deg); opacity: 0; } 
} 
.lightSpeedOutLeft.goAway { 
    -webkit-animation-name: lightSpeedOutLeft; 
    animation-name: lightSpeedOutLeft; 
    -webkit-animation-timing-function: ease-in; 
    animation-timing-function: ease-in; 

} 

/************
* rotateOut *
*************/
@-webkit-keyframes rotateOut { 
    0% { 
        -webkit-transform-origin: center center; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform-origin: center center; 
        -webkit-transform: rotate(200deg); 
        opacity: 0; 
    } 
} 
@keyframes rotateOut { 
    0% { 
        transform-origin: center center; 
        transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        transform-origin: center center; 
        transform: rotate(200deg); 
        opacity: 0; 
    } 
} 
.rotateOut.goAway { 
    -webkit-animation-name: rotateOut; 
    animation-name: rotateOut; 
}


/************
* rotateOutUpLeft *
*************/
@-webkit-keyframes rotateOutUpLeft { 
    0% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(-90deg); 
        opacity: 0; 
    } 
} 
@keyframes rotateOutUpLeft { 
    0% { 
        transform-origin: left bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        -transform-origin: left bottom; 
        -transform: rotate(-90deg); 
        opacity: 0; 
    } 
} 
.rotateOutUpLeft.goAway { 
    -webkit-animation-name: rotateOutUpLeft; 
    animation-name: rotateOutUpLeft; 
}

/************
* rotateOutDownLeft *
*************/

@-webkit-keyframes rotateOutDownLeft { 
    0% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform-origin: left bottom; 
        -webkit-transform: rotate(90deg); 
        opacity: 0; 
    } 
} 
@keyframes rotateOutDownLeft { 
    0% { 
        transform-origin: left bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        transform-origin: left bottom; 
        transform: rotate(90deg); 
        opacity: 0; 
    } 
} 
.rotateOutDownLeft.goAway { 
    -webkit-animation-name: rotateOutDownLeft; 
    animation-name: rotateOutDownLeft; 
}
/************
* rotateOutUpRight *
*************/

@-webkit-keyframes rotateOutUpRight { 
    0% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        -webkit-transform-origin: right bottom; 
        -webkit-transform: rotate(90deg); 
        opacity: 0; 
    } 
} 
@keyframes rotateOutUpRight { 
    0% { 
        transform-origin: right bottom; 
        transform: rotate(0); 
        opacity: 1; 
    } 
    100% { 
        transform-origin: right bottom; 
        transform: rotate(90deg); 
        opacity: 0; 
    } 
} 
.rotateOutUpRight.goAway { 
    -webkit-animation-name: rotateOutUpRight; 
    animation-name: rotateOutUpRight; 
}

/************
* rollOut *
*************/
@-webkit-keyframes rollOut { 
    0% { 
        opacity: 1; 
        -webkit-transform: translateX(0px) rotate(0deg); 
    } 
    100% { 
        opacity: 0; 
        -webkit-transform: translateX(100%) rotate(120deg); 
    } 
} 
@keyframes rollOut { 
    0% { 
        opacity: 1; 
        transform: translateX(0px) rotate(0deg); 
    } 
    100% { 
        opacity: 0; 
        transform: translateX(100%) rotate(120deg); 
    } 
} 
.rollOut.goAway { 
    -webkit-animation-name: rollOut; 
    animation-name: rollOut; 
}
/*****************
* Short Animations
*******************/

/*********************
* fadeInUpShort
*********************/
@-webkit-keyframes fadeInUpShort { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateY(20px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
} 

@keyframes fadeInUpShort { 
    0% { 
        opacity: 0; 
        transform: translateY(20px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
} 
.fadeInUpShort{
    opacity: 0; 
    -webkit-transform: translateY(20px); 
    transform: translateY(20px); 
}
.fadeInUpShort.go { 
    -webkit-animation-name: fadeInUpShort; 
    animation-name: fadeInUpShort; 
}

/*********************
* fadeInDownShort
*********************/
@-webkit-keyframes fadeInDownShort { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateY(-20px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateY(0); 
    } 
} 

@keyframes fadeInDownShort { 
    0% { 
        opacity: 0; 
        transform: translateY(-20px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    } 
} 
.fadeInDownShort{
    opacity: 0; 
    -webkit-transform: translateY(-20px); 
    transform: translateY(-20px); 
}
.fadeInDownShort.go { 
    -webkit-animation-name: fadeInDownShort; 
    animation-name: fadeInDownShort; 
}

/*********************
* fadeInRightShort 
*********************/
@-webkit-keyframes fadeInRightShort { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(20px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInRightShort { 
    0% { 
        opacity: 0; 
        transform: translateX(20px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInRightShort { 
    opacity: 0; 
    -webkit-transform: translateX(20px);  
    transform: translateX(20px); 
}
.fadeInRightShort.go { 
    -webkit-animation-name: fadeInRightShort; 
    animation-name: fadeInRightShort; 
}

/*********************
* fadeInLeftShort 
*********************/
@-webkit-keyframes fadeInLeftShort { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(-20px); 
    } 
    100% { 
        opacity: 1; 
        -webkit-transform: translateX(0); 
    } 
} 
@keyframes fadeInLeftShort { 
    0% { 
        opacity: 0; 
        transform: translateX(-20px); 
    } 
    100% { 
        opacity: 1; 
        transform: translateX(0); 
    } 
} 
.fadeInLeftShort { 
    opacity: 0; 
    -webkit-transform: translateX(-20px);  
    transform: translateX(-20px); 
}
.fadeInLeftShort.go { 
    -webkit-animation-name: fadeInLeftShort; 
    animation-name: fadeInLeftShort; 
}";}