<template>
    <div class="project-cover scroll-able">
        <div class="theme-container">
            <div class="row project-information">
                <img class="col-6" src="project-images/brand-mockup.png" alt="Cover">
                <div class="col-6 project-details">
                    <div class="year heading-light">2018</div>
                    <div class="heading-bold">Asstone</div>
                    <div class="colors"><span></span><span></span><span></span></div>
                    <div class="tags button-text"><span>LOGO</span><span>BRANDING</span><span>BUSINESS CARD</span></div>
                    <div class="para">Almost 46% of your visitors will judge the credibility of your organization based on the design of your website.<br>
                    What do you get when you combine efelle’s creative web design and website development with our PROVEN marketing-driven approach? You get EFFECTIVE online marketing with RESULTS. Let our creative marketing professionals help your business stand out from the crowd!</div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.project-cover{
    height: 100vh;
    width: 100vw;
    overflow: hidden;
    .theme-container{
        Display: flex;
        align-items: center;
        height: 100vh;
    }
    .project-information{
        margin:0;
        img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            align-self: center;
            padding:0 2rem;

        }
        .project-details{
            padding:0 2rem;
            align-self: flex-end;
            .heading-bold, .tags, .para{
                color: $black !important;
            }
            .colors{
                display: flex;
                justify-content: flex-start;
                align-items: center;
                :first-child{
                    border-radius: 4px 0 0 4px;
                }
                :last-child{
                    border-radius: 0 4px 4px 0;
                }
                span{
                    height: 1.5rem;
                    width: 3.5rem;
                    display: block;
                    position: relative;

                    $colors: $primary, $white, $black ;
                    @for $i from 1 through 3 {
                        &:nth-child(#{$i}){
                            background: nth($colors, $i);
                            &:hover{
                                &:after{
                                    content: '';
                                    width: 122%;
                                    border-bottom: solid 35px nth($colors, $i);
                                    position: absolute;
                                    left: -11%;
                                    top: -21%;
                                    z-index: 1;
                                }
                            }
                        }
                    }
                }
            }
            .tags{
                margin: 1.5rem 0;
                // font-size: 1rem;
                font-weight:$font-weight-bold;
                span{
                    margin-right:2rem;
                }
                .para{
                    white-space: pre-line;
                }
            }
        }
    }
}
</style>

<script>
$(function(){
    $(".project-body").css({
        'background-color': '#FBFBFB',
    });

    $(window).scroll(function(){
        // scroll down element opacity
        if( $('.project-body').length ) {
            let offset_footer = ($('.main-footer').offset().top)-300;
            let offset_window = $(window).scrollTop();
            if(offset_footer > offset_window){
                $(".project-body").css({
                'background-color': '#FBFBFB',
                });
            }
            else{
                    $(".project-body").css({
                'background-color': "rgba(0,0,0,0)",
                });
            }
        }
    })
})


</script>
