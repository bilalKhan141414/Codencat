<template>
    <div class="contact scroll-able  ">
        <div class="theme-container">
            <div class="branding-section">
                <div class="heading">
                    <div class="heading-light">BE IN</div>
                    <div class="heading-bold">Touch</div>
                </div>
                <div class="details">
                    <div class="para location">
                        House No 5, Street No 116, G13/1, Islmabad Pakistan
                    </div>
                    <div class="para location">
                        Pakistan
                    </div>
                    <div class="para map hoverable">
                        View on map
                    </div>
                    <br>
                    <div class="para email hoverable">
                        Lissanh95@gmail.com
                    </div>
                    <div class="para number">
                        +92-337-6117677
                    </div>
                </div>
            </div>
            <img src="images/contact.jpg" alt="Branding">
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.contact{
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
        width: 100%;
        .heading{
            margin:2rem 0;
            .heading-light{
                padding:0;
            }
        }
        .location, .map, .email, .number{
            font-weight: $font-weight-medium;

        }
        .map, .email{
            color:$primary;
            display: inline-block;
        }
        .map{
            margin-bottom: 1rem;
        }
    }
}
</style>
