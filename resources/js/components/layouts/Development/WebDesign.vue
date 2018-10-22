<template>
    <div class="branding scroll-able">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">CUSTOM</div>
                    <div class="heading-bold">Web Design</div>
                </div>
                <div class="details">
                    <div class="para1 para">
                        Count on our talented team with exceptional web development experience to establish your brand, automatize processes, collaboration or just about anything that you can think on web.
                    </div>
                    <div class="para2 para">
                        We hand-hold you at every single step while we create custom web solution for you – be it during discovery, definition, design, development or deployment.
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
