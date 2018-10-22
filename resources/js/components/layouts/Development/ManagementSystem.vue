<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">MANAGEMENT</div>
                    <div class="heading-bold">System</div>
                </div>
                <div class="para">
                    Content always had led the success of any digital solution. We enable you to let your users consume meaningful content in the form and the factor you choose. We create information centric and future-ready systems with features having greater ease-of-use.
                </div>
            </div>
            <img src="images/management-system.jpg" alt="Branding">
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
