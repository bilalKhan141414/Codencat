<template>
    <div class="portfolio-cover">
        <div class="theme-container">
            <div class="portfolio">
                <div class="image">
                    <img src="images/portfolio-cover.jpg" alt="Portfolio">
                </div>
            </div>
        </div>
    </div>
</template>


<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.portfolio-cover{
    height:100vh;
    width:100vw;
    overflow: hidden;
}
.portfolio{
    height: 100vh;
    // width:100%;
    margin: auto;
    // border: 1px solid white;
    position: relative;
    .image{
        position: absolute;
        padding: 2rem 0;
        img{
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }
    }
    .portfolio-quote{
        position: absolute;
        z-index: 5;
        left:50%;
        top:50%;
        transform: translate(-50%,-50%);
    }
}

</style>
