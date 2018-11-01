<template>
    <div class="project-images">
        <div class="theme-container">
            <div class="image scroll-able">
                <img  src="project-images/brand-mockup.png" alt="Cover">
            </div>
            <div class="image-horizontal scroll-able">
                <div class="quote-para">We Design three different logo for Asstone.</div>
               <div class="image">
                    <img src="project-images/Asset 1.png" alt="Cover">
               </div>
            </div>
            <div class="visit-site scroll-able">
                <button class="button hoverable" href="#">SEE SITE</button>
            </div>


            <div class="suggestion scroll-able">
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
            </div>


        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.project-images{
    width: 100vw;
    overflow: hidden;
    .image{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        img{
            height: 80vh;
            width: auto;
            object-fit: cover;
            filter: drop-shadow(0px 3px 3px $black-shadow);
        }
    }
    .image-horizontal{
        display: flex;
        flex-direction: column;
        align-items: center;
        .quote-para{
            color: $black;
            padding-top: 5rem;
        }
        .image{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            img{
                height: auto;
                width: 90%;
                object-fit: cover;
                filter: drop-shadow(0px 3px 3px $black-shadow);
            }
        }
    }
    .visit-site{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        button{
            filter: drop-shadow(0px 3px 3px $black-shadow);
            height: 8rem;
            width: 16rem;
            background-color:$primary;
            color:$black;
            &:hover{
                background-color:$secondary;
                color:$white;
            }
        }
    }
    .suggestion{
        display: flex;
        flex-wrap: wrap;
        width: 90%;
        height: 100vh;
        overflow: hidden;
        margin: auto;
        .items{
            padding:0 1.5rem;
            height: 78vh;
            width: 25%;
            position: relative;
            z-index: 1;
            transition: margin 0.3s ease-in-out;

            img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));
            transition: filter 0.3s ease-in-out;
            }
            .details{
                top: 20%;
                right: -20%;
                position: absolute;
                width: 90%;
                height: 15%;
                background: #FBFBFB;
                filter: drop-shadow(3px 3px 3px rgba(0,0,0,0.25));
                transition: filter 0.3s ease-in-out;
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
            &:hover{
                img{
                    filter: drop-shadow(3px 3px 10px $black-shadow);
                }
                .details{
                    filter: drop-shadow(3px 3px 10px $black-shadow);
                }
            }

            $odd-items-margin: 3rem;
            $even-items-margin: 6rem;
            &:nth-child(odd){
                margin-top:$odd-items-margin;
                &:hover{
                    margin-top:$odd-items-margin - $odd-items-margin;
                }
            }
            &:nth-child(even){
                margin-top:$even-items-margin;
                 &:hover{
                    margin-top:$even-items-margin - $odd-items-margin;
                }
            }
            &:hover{
                z-index: 10 !important;
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

    }
}
</style>

