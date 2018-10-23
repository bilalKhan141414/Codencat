<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">REDESIGN / REFRESH</div>
                    <div class="heading-bold">Website</div>
                </div>
                <div class="para">
                    So, You’ve Already Got a Website, but You’re Wondering if it Might Be Time for a Website Redesign?
                    <br>
                    Well, you've come to the right place! Your website should represent your business in a positive, professional light. It should also engage site visitors, instill trust and meet their needs quickly and easily.
                </div>
            </div>
            <img src="images/redesign-erbsite.jpg" alt="Branding">
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
            .heading-light{
                padding:0;
            }
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
