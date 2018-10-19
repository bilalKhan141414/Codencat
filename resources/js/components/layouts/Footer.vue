<template>
    <div class="theme-container">
        <div class="footer">
            <div class="row heading-bold">CODE<span>N</span>CAT</div>
            <div class="row">
                <div class="col-3 about">
                    <div class="this-is-us">
                        <div class="footer-heading">THIS IS US</div>
                        <div class="footer-para">There are a lot of companies that do what we do. They share the same what and how, but our clients work with us for our why and our who. We're IndiaNIC, and you're in the right place.</div>
                    </div>
                    <div class="footer-bottom">
                        <div class="heading-bold">ABOUT</div>
                        <div class="para">Creative content studio based in jersey City, Pakistan</div>
                    </div>
                    <div class="background"></div>
                </div>
                <div class="col-3 contact">
                    <div class="this-is-us">
                        <div class="footer-heading">THIS IS US</div>
                        <div class="footer-para">There are a lot of companies that do what we do. They share the same what and how, but our clients work with us for our why and our who. We're IndiaNIC, and you're in the right place.</div>
                    </div>
                    <div class="footer-bottom">
                        <div class="heading-bold">ABOUT</div>
                        <div class="para">Creative content studio based in jersey City, Pakistan</div>
                    </div>
                    <div class="background"></div>
                </div>
                <div class="col-3 portfolio">
                    <div class="this-is-us">
                        <div class="footer-heading">THIS IS US</div>
                        <div class="footer-para">There are a lot of companies that do what we do. They share the same what and how, but our clients work with us for our why and our who. We're IndiaNIC, and you're in the right place.</div>
                    </div>
                    <div class="footer-bottom">
                        <div class="heading-bold">ABOUT</div>
                        <div class="para">Creative content studio based in jersey City, Pakistan</div>
                    </div>
                    <div class="background"></div>
                </div>
                <div class="col-3 links">
                    <div class="this-is-us">
                        <div class="footer-heading">THIS IS US</div>
                        <div class="footer-para">There are a lot of companies that do what we do. They share the same what and how, but our clients work with us for our why and our who. We're IndiaNIC, and you're in the right place.</div>
                    </div>
                    <div class="footer-bottom">
                        <div class="heading-bold">ABOUT</div>
                        <div class="para">Creative content studio based in jersey City, Pakistan</div>
                    </div>
                    <div class="background"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../sass/app.scss';


.footer{
    height: 100vh;
    overflow: hidden;
    color:$white;
    .row{
        margin-right: 0px;
        margin-left: 0px;
    }
    .heading-bold{
        justify-content: center;
        span{
            color: $primary;
        }
    }
    .about , .contact, .portfolio, .links{
        position: relative;
        height:87vh;
        &:hover{
            .background{
                transform: translate(-15px, 5rem) skewY(20deg);
            }
        }
    }
    .footer-heading{
        font-size: $font-size-semi-large;
        color: $white;
        font-weight:$font-weight-bold;
        padding: 4rem 0 1.5rem 0;
        color:$primary;
    }
    .footer-para{
        font-size: $font-size-medium;
        color: $white;
        font-weight:$font-weight-x-light;
        line-height: 1.5rem;
    }
    .footer-bottom{
        position: absolute;
        bottom: 0;
        padding-bottom:1rem;
        padding-right:1rem;
        .heading-bold{
            font-size: 3.5rem;
            text-align: left;
        }
        .para{
            opacity: 0.5;
        }
    }.background{
        position: absolute;
        bottom:0;
        width: 100%;
        height: 150%;
        transform: translate(-15px, 60rem) skewY(20deg);
        background: $white;
        opacity: 0.1;
        transition: transform 0.5s ease-in-out;
    }

}


</style>
