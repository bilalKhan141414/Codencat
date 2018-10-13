<template>
    <div class="header">
        <div class="left">
            <div class="logo">
                logo
            </div>
            <div class="contact-button">
                <div class="contact-sign">@</div>
                <div class="contact">CONTACT</div>
            </div>
            <div class="empty-container"></div>
        </div>
        <div class="right">
            <div class="social-links">links</div>
            <div class="menu-button">
                <div class="menu">menu</div>
            </div>
            <div class="empty-container"></div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../sass/app.scss';

*{
    ::before,
    ::after{
            margin: 0px;
    }
}
.header{
    height: 100vh;
    color: $white;
    display: flex;
    justify-content: space-between;
    .left{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        .logo{
            border: 1px solid red;
            height: 35vh;
        }
        .contact-button{
            border: 1px solid red;
            height: 30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            .contact{
                transform: rotate(-90deg);
                padding: 50% 0;
            }
            .contact-sign{
                padding: 20% 0;
            }
        }
        .empty-container{
            border: 1px solid red;
            height: 35vh;
        }
    }
    .right{
        display: flex;
        flex-direction: column;
        justify-content: center;
        .social-links{
            border: 1px solid red;
            height: 35vh;
        }
        .menu-button{
            border: 1px solid red;
            height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .empty-container{
            border: 1px solid red;
            height: 35vh;
        }
    }
}
</style>
