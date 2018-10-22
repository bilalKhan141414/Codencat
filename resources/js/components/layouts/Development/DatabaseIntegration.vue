<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <img src="images/database-integration.jpg" alt="Branding">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">DATABASE</div>
                    <div class="heading-bold">Integration</div>
                </div>
                <div class="para">
                    If you want your site to be more than a corporate brochure, then you are likely to need to integrate the site with a database. Our outstanding expertise in database design, coupled with our advanced techniques for integrating databases with websites mean that we can quickly build you a highly sophisticated website.
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
