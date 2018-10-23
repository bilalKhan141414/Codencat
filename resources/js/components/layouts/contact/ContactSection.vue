<template>
    <div class="contact scroll-able">
        <div class="theme-container">
            <div class="contact-category">
                <div class="button-text contact-button active hoverable">PROJECT</div>
                <div class="button-text contact-button hoverable">JOB / INTERNSHIP</div>
                <div class="button-text contact-button hoverable">HELLO</div>
                <div class="highlighter"></div>
            </div>
            <div class="project">
                <form action="">
                    <div class="heading">
                        <div class="heading-light">TELL US ABOUT</div>
                        <div class="heading-bold">Your Idea</div>
                    </div>
                    <div class="row col-12" style="margin: 0; padding: 0;">
                        <div class="col-6 about-section">
                            <div class="about button-text contact-section-heading">ABOUT</div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="First Name*"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Last Name*"></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="Email*"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Phone"></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="Company"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Website"></div>
                            </div>
                        </div>
                        <div class="col-6 expertise-section">
                            <div class="expertise button-text contact-section-heading">I NEED YOUR EXPERTISE ON</div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise1" value="logo"><span class="checkmark"></span><span class="para">Logo</span>
                                        </label></div>
                                    <div class="last-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise2" value="website"><span class="checkmark"></span><span class="para">Website</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise3" value="branding"><span class="checkmark"></span><span class="para">Branding</span>
                                        </label></div>
                                    <div class="last-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise4" value="e-shop"><span class="checkmark"></span><span class="para">E-shop</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise5" value="ui/ux"><span class="checkmark"></span><span class="para">UI/UX Interface</span>
                                    </label></div>
                            </div>
                        </div>
                    </div>


                    <div class="row col-12" style="margin: 0; padding: 0;">
                        <div class="col-6 about-section">
                            <div class="about button-text contact-section-heading">ABOUT</div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="First Name*"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Last Name*"></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="Email*"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Phone"></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><input class="para hoverable" type="text" placeholder="Company"></div>
                                    <div class="last-name col-6"><input class="para hoverable" type="text" placeholder="Website"></div>
                            </div>
                        </div>
                        <div class="col-6 expertise-section">
                            <div class="expertise button-text contact-section-heading">I NEED YOUR EXPERTISE ON</div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise1" value="logo"><span class="checkmark"></span><span class="para">Logo</span>
                                        </label></div>
                                    <div class="last-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise2" value="website"><span class="checkmark"></span><span class="para">Website</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise3" value="branding"><span class="checkmark"></span><span class="para">Branding</span>
                                        </label></div>
                                    <div class="last-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise4" value="e-shop"><span class="checkmark"></span><span class="para">E-shop</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="first-name col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise5" value="ui/ux"><span class="checkmark"></span><span class="para">UI/UX Interface</span>
                                    </label></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
@import '../../../../sass/app.scss';

.contact{
    width: 100vw;
    overflow: hidden;
    position:relative;
    .contact-category{
        display:flex;
        justify-content: space-around;
        padding: 9vh 13vw;
        .active{
            color: $primary;
            transition: color 0.3s ease-in-out;
        }
        .highlighter{
            background-color: $secondary;
            width: 50px;
            height: 3px;
            position:absolute;
            left: 26vw;
            top: 85px;
            transition: left 0.3s ease-out;
        }
    }


    .heading{
        margin: 3rem 1rem;
        .heading-light{
            padding:0;
        }
    }

    .contact-section-heading{
        margin: 1rem 0 2rem 0;
        font-size:1rem;
        letter-spacing: 0;
    }



    // placeholder
    ::placeholder {/* Firefox */
        font-weight:$font-weight-bold;
        line-height: 1.3rem;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        font-weight:$font-weight-bold;
        line-height: 1.3rem;
    }
    ::-ms-input-placeholder { /* Microsoft Edge */
        font-weight:$font-weight-bold;
        line-height: 1.3rem;
    }

    .project{

        .about-section{
            .col-6{
                text-align:center;
                padding:1rem;
                .para{
                    width: 100%;
                    background-color: rgba(0, 0, 0, 0);
                    border: 0px;
                    border-bottom: 2px solid rgba(255,255,255,0.1);
                    padding-bottom: 0.5rem;
                    outline-width: 0;
                    caret-color: $primary;
                    font-weight: $font-weight-bold;
                    transition: border 0.3s ease-in-out;

                    &:focus{
                        border-bottom: 2px solid rgba(0,224,223,1);
                    }
                }
            }
        }
        .expertise-section{
            .col-6{
                text-align:left;
                margin:1rem 0;
                padding: 0 1rem;
                .contact-container{
                    margin-bottom: 0.6rem;
                    display: inline-block;
                    position: relative;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    .para{
                        width: 100%;
                        font-weight: $font-weight-medium;
                        transition: color 0.3s ease-in-out;
                        padding-left:3rem;
                    }
                    input{
                        position: absolute;
                        top: 50%;
                        left: 2%;
                        transform: translate(0 ,-43%);
                        opacity: 0;
                        z-index:2;
                    }
                    .checkmark {
                        z-index:1;
                        position: absolute;
                        top: 50%;
                        left: 2%;
                        transform: translate(0 ,-43%);
                        height: 15px;
                        width: 15px;
                        border-radius: 50%;
                        border: 2px solid rgba(255,255,255,0.1);
                        transition: background-color 0.3s ease-in-out, border 0.3s ease-in-out;
                    }
                    input:checked ~ .checkmark {
                        background-color: $primary;
                        border: 2px solid $primary;
                    }
                }

            }
        }
    }
}
</style>

<script>
$(function(){
    $(".contact-button").click(function(){
        $('.contact-button').removeClass('active');
        $(this).addClass('active');
        if($(this).text() == "PROJECT"){
            $(".highlighter").css({
                'left': '26vw'
            })
        }
        else if($(this).text() == "JOB / INTERNSHIP"){
            $(".highlighter").css({
                'left': '48vw'
            })
        }
        else{
            $(".highlighter").css({
                'left': '70.5vw'
            })
        }
    })
})

</script>
