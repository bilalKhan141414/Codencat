<template>
    <div class="portfolio-files scroll-able">
        <div class="theme-container">
            <div class="tabs">
                <div class="tab all hoverable">
                    <div class="line"></div>
                    <div class="title heading-light active">ALL</div>
                </div>
                <div class="tab branding hoverable">
                    <div class="line"></div>
                    <div class="title heading-light">BRANDING</div>
                </div>
                <div class="tab logo hoverable">
                    <div class="line"></div>
                    <div class="title heading-light">LOGO</div>
                </div>
                <div class="tab website hoverable">
                    <div class="line"></div>
                    <div class="title heading-light">WEBSITE</div>
                </div>
                <div class="tab development hoverable">
                    <div class="line"></div>
                    <div class="title heading-light">DEVELOPMENT</div>
                </div>
            </div>
            <div class="work-section">
                <div class="item1 items main hoverable">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">
                            <div class="color blue"></div>
                            <div class="color black"></div>
                        </div>
                    </div>
                </div>
                <div class="item2 items hoverable">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
                <div class="item3 items hoverable">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
                <div class="item4 items hoverable">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
                <div class="item1 items main">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">
                            <div class="color blue"></div>
                            <div class="color black"></div>
                        </div>
                    </div>
                </div>
                <div class="item2 items">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
                <div class="item3 items">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
                <div class="item4 items">
                    <img src="images/brand-mockup.jpg" alt="Portfolio">
                    <div class="details">
                        <div class="text">
                            <div class="title">TITTLE NAME</div>
                            <div class="category">Category</div>
                            <div class="year">Year</div>
                        </div>
                        <div class="colors">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.portfolio-files{
    width: 100vw;
    // background-color: red;
    .tabs{
        padding:3rem 0;
        display:flex;
        justify-content: center;
        .tab{
            padding: 0 2rem;
            .line{
                height: 0.7rem;
                width: 5rem;
            }
            .title{
                padding: 0.5rem 0;
                color:$black;
                font-weight: $font-weight-regular;
                opacity: 0.5;
                letter-spacing: 1px;
            }
            .active{
                color: $primary;
                opacity: 1;
            }
        }
        .all{
            .line{
                background-color: $white;
            }
        }
        .branding{
            .line{
                background-color: $primary;
            }
        }
        .logo{
            .line{
                background-color: $secondary;
            }
        }
        .website{
            .line{
                background-color: #FF8C33;
            }
        }
        .development{
            .line{
                background-color: #53F86B;
            }
        }
    }
    .work-section{
        display: flex;
        flex-wrap: wrap;
        width: 90%;
        margin: auto;
        .items{
            padding:0 1.5rem;
            height: 89vh;
            width: 25%;
            position: relative;
            z-index: 1;
            filter: drop-shadow(0px 3px 3px $black-shadow);

            img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
            .details{
                top: 20%;
                right: -20%;
                position: absolute;
                width: 90%;
                height: 15%;
                background: #FBFBFB;
                filter: drop-shadow(0px 3px 3px $black-shadow);

                display: flex;
                .text{
                    flex:9;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    padding-left: 1rem;
                    .title , .category , .year{
                        font-size: $font-size-regular;
                        color: $black;
                        font-weight:$font-weight-medium;
                        letter-spacing: 4px;
                        line-height: 1.3rem;
                    }
                    .category , .year{
                        opacity: 0.5;
                    }
                }
                .colors{
                    height: 100%;
                    width: 100%;
                    flex: 0.4;
                    .blue{
                        background: blue;
                        height: 50%;
                        width: 100%;
                    }
                    .black{
                        height: 50%;
                        width: 100%;
                         background: black;
                    }
                }
            }
        }
        .item1{
            z-index: 4;
        }
        .item2{
            z-index: 3;
        }
        .item3{
            z-index: 2;
        }
        .item4{
            z-index: 1;
        }
        .item1, .item3{
            margin-top:3rem;
            transition: margin 0.3s ease-in-out;
            &:hover{
                margin-top:0rem;
                z-index: 10 !important;
            }
        }
        .item2, .item4{
            margin-top:6rem;
            transition: margin 0.3s ease-in-out;
            &:hover{
                margin-top:3rem;
                z-index: 10 !important;
            }
        }
    }
}
</style>

 <script>
 $(function(){

     $(window).scroll(function(){
         // scroll down element opacity
         if( $('.portfolio-files').length ) {
             let offsetportfolio = ($('.portfolio-files').offset().top)-300;
             let offsetfooter = ($('.main-footer').offset().top)-300;
             let offsetwindow = $(window).scrollTop();
             if(offsetportfolio < offsetwindow && offsetfooter > offsetwindow){
                 $(".portfolio-body").css({
                 'background-color': '#FBFBFB',
                 });
             }
             else{
                     $(".portfolio-body").css({
                 'background-color': "rgba(0,0,0,0)",
                 });
             }
         }
     })
 })

</script>
