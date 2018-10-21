<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <img src="images/design.jpg" alt="Branding">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">UI / UX</div>
                    <div class="heading-bold">Design</div>
                </div>
                <div class="para">
                    Analyzing your target audience and its habits will help determine the best user interface to design. We structure the design in the best way so that the user will reach relevant information with minimal efforts.
                </div>
                <div class="para" style="margin-top:1rem;">
                    The “mobile first” method is important, because it helps to focus our efforts on the essence of the message to communicate to users. We use that method for web site, platforms and applications.
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
}
</style>
