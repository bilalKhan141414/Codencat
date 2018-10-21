<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">LIFESTYLE</div>
                    <div class="heading-bold">E-commerce</div>
                </div>
                <div class="para">
                    Based on the behavior of your clients, we optimize the interface of your e-shop in order to obtain the highest conversion rate.
                    Our motto: make the clients purchase process as nice and smooth as possible, in order to increase your revenue. To ensure the security of your database, we directly take care of hosting your e-shop.
                </div>
            </div>
            <img src="images/e-commerce.jpg" alt="Branding">
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
        img{
            width: 50%;
            height: 90vh;
            object-fit: cover;
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
