<template>
    <div class="main-footer scroll-able">
        <div class="theme-container">
            <div class="footer">
                <div class="row heading-bold"><section class="hoverable">CODE<span>N</span>CAT</section></div>
                <div class="row">
                    <div class="col-3 about hoverable">
                        <div class="this-is-us">
                            <div class="footer-heading">THIS IS US</div>
                            <div class="footer-para">There are a lot of companies that do what we do. They share the same what and how, but our clients work with us for our why and our who. We're IndiaNIC, and you're in the right place.</div>
                        </div>
                        <div class="footer-bottom">
                            <div class="heading-bold">ABOUT</div>
                            <div class="para">Creative content studio based in Islamabad City, Pakistan</div>
                        </div>
                        <div class="background"></div>
                    </div>
                    <div class="col-3 contact hoverable">
                        <div class="this-is-us">
                            <div class="footer-heading">SHARE YOUR IDEA</div>
                            <div class="footer-para">We like fast - the same way the technology market moves. In the time it takes you to say "I've got a great idea", someone else has already started working on a similar project half the world away. Tell us about your idea, and we're sure we can take to the next level.</div>
                        </div>
                        <div class="footer-bottom">
                            <div class="heading-bold">CONTACT</div>
                            <div class="para">+92 337 6117677</div>
                            <div class="para">codencat@gmail.com</div>
                        </div>
                        <div class="background"></div>
                    </div>
                    <div class="col-3 portfolio hoverable">
                        <div class="this-is-us">
                            <div class="footer-heading">STUFF WE DID</div>
                            <div class="footer-para">While we can't show you the iceberg of work that is our process or technology we used, Here's a shiny bits that breach the surface. Here's our portfolio of few of our best mobile, web and game projects.</div>
                        </div>
                        <div class="footer-bottom">
                            <div class="icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-pinterest-p"></i>
                                <i class="fab fa-behance"></i>
                            </div>
                            <div class="para">(C) Codencat 2019</div>
                            <div class="para">All Rights Reserved</div>
                        </div>
                        <div class="background"></div>
                    </div>
                    <div class="col-3 links">
                        <div class="this-is-us">
                            <div class="footer-heading" style="visibility: hidden;">LINKS</div>
                            <div class="footer-para hoverable">Home</div>
                            <div class="footer-para hoverable">Design</div>
                            <div class="footer-para hoverable">Development</div>
                            <div class="footer-para hoverable">Legal Terms</div>
                            <div class="footer-para hoverable">Cookie Policy</div>
                        </div>
                        <div class="footer-bottom">
                            <div class="heading-bold" style="visibility: hidden;">LINKS</div>
                            <div class="para">Made with <i class="heart fas fa-heart"></i> Keyboard</div>
                        </div>
                    </div>
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
        font-size: 3rem;
        padding-top:2rem;
        span{
            color: $primary;
        }
    }
    .about , .contact, .portfolio, .links{
        position: relative;
        height:85vh;
        &:hover{
            .background{
                transform: translate(-15px, 0rem) skewY(0deg);

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
    .links{
        .footer-para{
            font-weight: $font-weight-regular;
            transition: color 0.2s ease-in-out;
            &:hover{
                color: $primary;
            }
        }
    }
    .footer-bottom{
        position: absolute;
        bottom: 0;
        padding-bottom:1rem;
        padding-right:1rem;
        .icons{
            color: $white;
            font-size: 1.5rem;
            padding-bottom: 0.8rem;
            i{
                padding-right: 0.5rem;
                transition: color 0.2s ease-in-out;
                &:hover{
                    color: $primary;
                }
            }
        }
        .heading-bold{
            font-size: 3.5rem;
            text-align: left;
        }
        .para{
            opacity: 0.5;
            .heart{
                color:#ff3b00;
                opacity: 1;
                position: relative;
                 &:after {
                    content: '';
                    width: 142%;
                    border-bottom: solid 1px #ffffffc2;
                    position: absolute;
                    left: 0;
                    top: 50%;
                    transform: translate(-9%,-250%) rotate(-30deg);
                    z-index: 1
                }
            }
        }
    }.background{
        position: absolute;
        z-index: -1;
        bottom:0;
        width: 100%;
        height: 120%;
        transform: translate(-15px, 60rem) skewY(50deg);
        background: $white;
        opacity: 0.1;
        transition: transform 1s ease-in-out;
    }

}


</style>
