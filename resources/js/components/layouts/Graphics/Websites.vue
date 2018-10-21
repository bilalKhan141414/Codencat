<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <div class="websites-image">
                <img src="images/websites.png" alt="Branding">
            </div>
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">STATIC / DUNAMIC</div>
                    <div class="heading-bold">Websites</div>
                </div>
                <div class="details">
                    <div class="para1 para">
                        A web site is the most valuable marketing tool, as it can be viewed by more than 4 billion people in the world: it is a large-scale marketing tool for your business.
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
            .heading-light{
                padding: 0;
            }
        }
        .details{
            .para1{
                width: 48%;
            }
        }
    }
}
</style>
