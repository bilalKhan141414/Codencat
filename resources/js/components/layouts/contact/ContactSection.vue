<template>
    <div class="contact scroll-able">
        <div class="theme-container tch">
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
                            <div class="button-text contact-section-heading">ABOUT</div>
                            <div class="row">
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="First Name*"></div>
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="Last Name*"></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="Email*"></div>
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="Phone"></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="Company"></div>
                                    <div class="col-6"><input class="para hoverable" type="text" placeholder="Website"></div>
                            </div>
                        </div>
                        <div class="col-6 expertise-budget-deadline">
                            <div class="button-text contact-section-heading">I NEED YOUR EXPERTISE ON</div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise1" value="logo"><span class="checkmark"></span><span class="para">Logo</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise2" value="website"><span class="checkmark"></span><span class="para">Website</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise3" value="branding"><span class="checkmark"></span><span class="para">Branding</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise4" value="e-shop"><span class="checkmark"></span><span class="para">E-shop</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="checkbox" name="expertise5" value="ui/ux"><span class="checkmark"></span><span class="para">UI/UX Interface</span>
                                    </label></div>
                            </div>
                        </div>
                    </div>


                    <div class="row col-12 budget-deadline" style="margin: 0; padding: 0;">
                        <div class="col-6 expertise-budget-deadline">
                            <div class="button-text contact-section-heading">MY BUDGET IS</div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="budget" value="male"><span class="checkmark"></span><span class="para">$ 10 - $ 100</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="budget" value="male"><span class="checkmark"></span><span class="para">No limit ;)</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="budget" value="male"><span class="checkmark"></span><span class="para">$ 100 - $ 500</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="budget" value="male"><span class="checkmark"></span><span class="para">I don't know</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="budget" value="male"><span class="checkmark"></span><span class="para">$ 100 - $ 500</span>
                                    </label></div>
                            </div>
                        </div>
                        <div class="col-6 expertise-budget-deadline">
                            <div class="button-text contact-section-heading">MY DEADLINE IS</div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">Urgent</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">6 month</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">1 month</span>
                                        </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">1 year</span>
                                        </label></div>
                            </div>
                            <div class="row">
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">3 month</span>
                                    </label></div>
                                    <div class="col-6"><label class="contact-container hoverable">
                                        <input type="radio" name="deadline" value="male"><span class="checkmark"></span><span class="para">+ 1 year</span>
                                    </label></div>
                            </div>
                        </div>
                    </div>

                    <div class="row col-12 message-button" style="margin: 0; padding: 0;">
                        <div class="col-12 button-text contact-section-heading">I NEED YOUR EXPERTISE ON</div>
                        <div class="col-6 message">
                            <textarea class="message-input message-box"  placeholder="I have a great project and i need you for..."></textarea>
                        </div>
                        <div class="col-6 submit-button">
                            <label class="agrement hoverable">
                                <input class="agrement-input" type="checkbox" name="expertise1" value="logo"><span class="checkmark"></span><span class="para">I agree with the <span class="trems-policy">legal terms and the cookie policy</span></span>
                            </label>
                            <!-- <div class="button hoverable">
                                <div class="button-text">SUBMIT</div>
                            </div> -->
                            <div class="project-button">
                                <button class="button hoverable" type="button">SUBMIT </button>
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
    height: auto !important;
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
    ::placeholder ,textarea {/* Firefox */
        font-weight:$font-weight-bold;
        line-height: 1.3rem;
    }
    :-ms-input-placeholder ,::-ms-textarea{ /* Internet Explorer 10-11 */
        font-weight:$font-weight-bold;
        line-height: 1.3rem;
    }
    ::-ms-input-placeholder , ::-ms-textarea{ /* Microsoft Edge */
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
        .expertise-budget-deadline{
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


        .budget-deadline{
            margin-top: 4rem !important;
        }
        .message-button{
            margin-top: 3rem !important;
            padding-left:1rem;
        }

        .message-button{
            .col-6{
                text-align:left;
                margin:1rem 0;
                padding: 0 1rem;

                .message-box{
                    width: 100%;
                    height:7rem;
                    background-color: rgba(0, 0, 0, 0);
                    border: 0px;
                    border-bottom: 2px solid rgba(255,255,255,0.1);
                    padding-bottom: 0.5rem;
                    outline-width: 0;
                    caret-color: $primary;
                    font-family: 'Sofia Pro';
                    font-weight: $font-weight-bold;
                    transition: border 0.3s ease-in-out;
                    resize: none;
                    &:focus{
                        border-bottom: 2px solid rgba(0,224,223,1);
                    }
                }
            }
            .submit-button{
                .agrement{
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
                        .trems-policy{
                            color:$secondary;
                        }
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
                .button{
                    margin-top:2rem;
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



    // if ($('.agrement-input').attr('checked'))
    // {
    //     alert("checked");
    //     $(".project-button input[type=submit]").attr("disabled", "disabled");
    // }
})

</script>
