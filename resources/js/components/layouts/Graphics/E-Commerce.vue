<template>
    <div class="branding">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">TIMELESS</div>
                    <div class="heading-bold">Branding</div>
                </div>
                <div class="para">
                    Developing a visual identity starts with research, analysis and the creation of a logo. Your visual identity is the graphic universe of your brand and defined different elements: the specifications and usage rules of your logo, as well as the colors, font and iconographic style used.
                </div>
            </div>
            <img src="images/branding.png" alt="Branding">
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
    }
    img{
        width: 50%;
        height: 100vh;
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
