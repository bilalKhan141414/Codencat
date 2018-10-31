<template>
    <div class="project-images">
        <div class="theme-container">
            <div class="image scroll-able">
                <img  src="project-images/brand-mockup.png" alt="Cover">
            </div>
            <div class="image-horizontal scroll-able">
                <div class="quote-para">We Design three different logo for Asstone.</div>
               <div class="image">
                    <img src="project-images/Asset 1.png" alt="Cover">
               </div>
            </div>
            <div class="visit-site scroll-able">
                <button class="button" href="#">SEE SITE</button>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.project-images{
    width: 100vw;
    overflow: hidden;
    .image{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        img{
            height: 80vh;
            width: auto;
            object-fit: cover;
            filter: drop-shadow(0px 3px 3px $black-shadow);
        }
    }
    .image-horizontal{
        display: flex;
        flex-direction: column;
        align-items: center;
        .quote-para{
            color: $black;
            padding-top: 5rem;
        }
        .image{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            img{
                height: auto;
                width: 90%;
                object-fit: cover;
                filter: drop-shadow(0px 3px 3px $black-shadow);
            }
        }
    }
    .visit-site{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        button{
            filter: drop-shadow(0px 3px 3px $black-shadow);
            height: 8rem;
            width: 16rem;
            background-color:$primary;
            color:$black;
            &:hover{
                background-color:$secondary;
                color:$white;
            }
        }
    }
}
</style>

