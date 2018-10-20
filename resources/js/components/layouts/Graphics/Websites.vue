<template>
    <div class="branding">
        <div class="theme-container">
            <div class="websites-image">
                <img src="images/websites.png" alt="Branding">
            </div>
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">TIMELESS</div>
                    <div class="heading-bold">Branding</div>
                </div>
                <div class="details">
                    <div class="para1 para">
                        Developing a visual identity starts with research, analysis and the creation of a logo. Your visual identity is the graphic universe of your brand and defined different elements: the specifications and usage rules of your logo, as well as the colors, font and iconographic style used.
                    </div>
                    <div class="para2 para">
                        We remain attentive to your needs throughout the creative process and take your wishes and remarks into account. The goal is to best reflect the values of your business.
                    </div>
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
    .websites-image{
        width: 100%;
        height: 60vh;
        text-align: center;
        filter: drop-shadow(-8px -5px 5px $black-shadow);
        img{
           width: auto;
           height: 100%;
        }
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
