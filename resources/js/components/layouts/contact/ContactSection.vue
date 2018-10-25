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
                            <textarea class="message-box"  placeholder="I have a great project and i need you for..."></textarea>
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
            <div class="job-internship">
                <form action="" class="row" style="margin:0;">
                    <div class="col-6">
                        <div class="heading">
                            <div class="heading-light">LOOKING FOR A NEW</div>
                            <div class="heading-bold">Adventure ?</div>
                        </div>
                        <div class="para">If you’re not afraid to work in an offbeat but serious atmosphere and you wish to rise to new challenges, you’ve come to the right place!
                        </div>
                        <div class="resume">
                            <div class="resume-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 45 51">
                                    <defs>
                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 569 629">
                                        <image width="569" height="629" xlink:href="data:image/png;base64,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"/>
                                        </pattern>
                                    </defs>
                                    <rect id="Asset_1" data-name="Asset 1" class="cls-1" width="45" height="51"/>
                                </svg>
                            </div>
                            <div class="resume-text para">Resume</div>
                        </div>
                        <div class="job-button">
                            <button class="button hoverable" type="button">SUBMIT </button>
                        </div>
                    </div>
                    <div class="col-6 job-details">
                        <div class="button-text contact-section-heading">ABOUT</div>
                        <div class="row">
                                <div class="col-6"><input class="text-box hoverable" type="text" placeholder="First Name*"></div>
                                <div class="col-6"><input class="text-box hoverable" type="text" placeholder="Last Name*"></div>
                        </div>
                        <div class="row">
                                <div class="col-6"><input class="text-box hoverable" type="text" placeholder="Email*"></div>
                                <div class="col-6"><input class="text-box hoverable" type="text" placeholder="Phone"></div>
                        </div>
                         <div class="row job-domain">
                            <div class="col-6 graphic-design"><label class="domain-container hoverable">
                                <input type="radio" name="expertise3" value="branding"><span class="checkmark"></span><span class="para">Graphic Design</span>
                                </label></div>
                            <div class="col-6"><label class="domain-container hoverable">
                                <input type="radio" name="expertise4" value="e-shop"><span class="checkmark"></span><span class="para">Development</span>
                                </label></div>
                            <div class="col-12 message">
                                <textarea class="message-box"  placeholder="Description About Your Domain..."></textarea>
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
                    color:$white;
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
    .job-internship{
        .job-details{
            margin-top: 2rem;
        }
        .heading{
            margin-left:0;
        }
        .col-6{
            padding:1rem;
            .text-box{
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
        .job-domain{
            text-align:left;
            margin:1rem 0;
            // padding: 0 1rem;
            .graphic-design{
                padding-left:0;
            }
            .domain-container{
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
            .message{
                text-align:left;
                margin:1rem 0;
                padding: 0;
                .message-box{
                    width: 100%;
                    height:7rem;
                    background-color: rgba(0, 0, 0, 0);
                    border: 0px;
                    border-bottom: 2px solid rgba(255,255,255,0.1);
                    padding-bottom: 0.5rem;
                    outline-width: 0;
                    color:$white;
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

        }
        .resume{
            margin: 3.5rem 0;
            display:flex;
            justify-content:flex-start;
            align-items:center;
            .resume-icon{

                width:3rem;
                .cls-1 {
                    fill: url(#pattern);
                }
            }
            .resume-text{
                display:inline-block;
                padding:1rem;
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
