<template>
    <div class="branding scroll-able">
        <div class="theme-container">
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
    .branding-section{
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        .heading{
            margin:2rem 0;
        }
        .details{
            width: 45%;
            text-align: center;
            .para2{
                padding-top: 1rem;
            }
        }
    }
}
</style>
