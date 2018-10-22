<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <img src="images/responsive-web.jpg" alt="Branding">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">Responsive</div>
                    <div class="heading-bold">Web Design</div>
                </div>
                <div class="para">
                    Almost 46% of your visitors will judge the credibility of your organization based on the design of your website.
                    What do you get when you combine efelle’s creative web design and website development with our PROVEN marketing-driven approach? You get EFFECTIVE online marketing with RESULTS. Let our creative marketing professionals help your business stand out from the crowd!
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
