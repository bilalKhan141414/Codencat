<template>
    <div class="services scroll-able">
        <div class="theme-container">
            <div class="heading">
                <div class="heading-light">DISCOVER</div>
                <div class="heading-bold">Our Services</div>
            </div>
            <div class="services-section">
                <div class="service">
                    <div class="heading-light">PORTFOLIO</div>
                    <div class="background"></div>
                    <img src="images/portfolio-cover.jpg" alt="Branding">
                </div>
                <div class="service">
                    <div class="heading-light">DEVELOPMENT</div>
                    <div class="background"></div>
                    <img src="images/developmen-covert.jpg" alt="Branding">
                </div>
            </div>
        </div>
    </div>
</template>


<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.services{
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    .heading{
        padding: 5rem 0rem 0rem 1rem;
    }
    .services-section{
        display: flex;
        align-items: center;
        height: 75vh;
        .service{
            height: 15vw;
            width: 50%;
            position: relative;
            .heading-light{
                position: absolute;
                color:$white;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                font-weight: $font-weight-regular;
                z-index:2;
                transition: color 0.3s ease-in-out;
            }
            .background{
                position: absolute;
                background-color: $black;
                opacity: 0.7;
                height: 100%;
                width: 100%;
                z-index:1;
                -webkit-transition: background-color 0.3s ease-in-out;
                -moz-transition: background-color 0.3s ease-in-out;
                -o-transition: background-color 0.3s ease-in-out;
                -ms-transition: background-color 0.3s ease-in-out;
                transition: background-color 0.3s ease-in-out;
            }
            img{
                object-fit: cover;
                height: 100%;
                width: 100%;

            }
            &:hover{
                cursor: pointer;
                .heading-light{
                    color: $black;
                }
                .background{
                    background-color:$primary;
                }
            }
        }
    }
}
</style>
