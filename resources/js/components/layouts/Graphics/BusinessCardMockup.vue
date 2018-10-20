<template>
    <div class="business-card scroll-able">
        <div class="theme-container">
            <div class="image">
                <img src="images/businesscards.jpeg" alt="Branding">
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

.business-card{
    height: 100vh;
    width: 100vw ;
    overflow: hidden;
    .image{
        padding: 2rem 0;
        img{
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }
    }
}
</style>
