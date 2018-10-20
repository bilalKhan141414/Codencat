<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <img src="images/design-logo.jpg" alt="Branding">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">DESIGN</div>
                    <div class="heading-bold">Logo</div>
                </div>
                <div class="para">
                    Thanks to previously defined strategy, we work on designing a logo that will be the emblem of your brand image and that will be used on your various communication media.
                    Together, we explore different graphic options to reach a solution that will bring out your uniqueness on the market.
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.branding{
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    .theme-container{
        display:flex;
        align-items: center;
        height: 100%;
    }
    img{
        width: 50%;
        height: 90vh;
        object-fit: cover;
    }
    .branding-section{
        margin: 1rem;
        .heading{
            margin:2rem 0;
        }
        .details{
            display: flex;
            justify-content: space-between;
            .para1{
                width: 48%;
            }
            .para2{
                width: 48%;
            }
        }
    }
}
</style>
