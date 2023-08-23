<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GAME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/style.css') }}">

<body>
    <div class="quiz-top-area text-center">

        <h1>GAME EDUKASI PENGENALAN RUMAH ADAT DAN AKSARA LONTARA </h1>
        <div class="quiz-countdown text-center ul-li">
            <h2 style="color: aliceblue">{{ session('username') }}</h2>
            <h2 style="color: aliceblue"><a href="{{ route('optionMulai') }}"><i class="fas fa-home"></i></a></h2>
        </div>
    </div>
    <div class="wrapper position-relative">
        <div class="wizard-content-1 clearfix">
            <div class="steps d-inline-block position-absolute clearfix">
                <ul class="tablist multisteps-form__progress">
                    <li class="multisteps-form__progress-btn js-active current"></li>
                    <li class="multisteps-form__progress-btn "></li>
                    <li class="multisteps-form__progress-btn"></li>
                    <li class="multisteps-form__progress-btn"></li>
                    <li class="multisteps-form__progress-btn"></li>
                </ul>
            </div>
            <div class="step-inner-content clearfix position-relative">
                <form class="multisteps-form__form" action="thank-you.html" id="wizard" method="POST">
                    <div class="form-area position-relative">
                        <div class="multisteps-form__panel  js-active" data-animation="fadeIn">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Permainan 1 (Level 1)</span>
                                    <div >
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaan[0]->path_image }}"
                                        width="20%">
                                    </div>
                                    <p>{{ $pertanyaan[0]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="quiz" value="Email Markering"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">ss
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Font Developer"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">GA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Digital Marketing"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">NGA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">NGKA </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 20%">
                                            <span>24% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li class="d-none"><span class="js-btn-next" title="PREV">Permainan
                                                Sebelumnya</span></li>
                                        <li><span class="js-btn-next" title="NEXT">Permainan Selanjutnya</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="multisteps-form__panel " data-animation="fadeIn">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Permainan 1 (Level 1)</span>
                                    <div >
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaan[1]->path_image }}"
                                        width="20%">
                                    </div>
                                    <p>{{ $pertanyaan[1]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="quiz" value="Email Markering"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">ss
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Font Developer"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">GA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Digital Marketing"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">NGA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">NGKA </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 40%">
                                            <span>40% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li class="d-none"><span class="js-btn-next" title="PREV">Permainan
                                                Sebelumnya</span></li>
                                        <li><span class="js-btn-next" title="NEXT">Permainan Selanjutnya</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="multisteps-form__panel " data-animation="fadeIn">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Permainan 1 (Level 1)</span>
                                    <div >
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaan[2]->path_image }}"
                                        width="20%">
                                    </div>
                                    <p>{{ $pertanyaan[2]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="quiz" value="Email Markering"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">ss
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Font Developer"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">GA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Digital Marketing"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">NGA</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">NGKA </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 60%">
                                            <span>40% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li class="d-none"><span class="js-btn-next" title="PREV">Permainan
                                                Sebelumnya</span></li>
                                        <li><span class="js-btn-next" title="NEXT">Permainan Selanjutnya</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                        <!-- step 1 -->
                        {{-- <div class="multisteps-form__panel" data-animation="fadeIn">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Question 2</span>
                                    <h2>Thankyou! Tell us what you do ?</h2>
                                </div>
                                <div class="quiz-option-selector quiz-option-selector-2 clearfix">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="quiz" value="Email Markering"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi1.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Audo Services</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Font Developer"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi2.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Entertainment</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="Digital Marketing"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi3.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Household Services</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi4.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Medicine and Health </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi7.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Rent and lease </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase"><img
                                                        src="{{ asset('Quiz/assets/img/qi6.png') }}"
                                                        alt=""></span>
                                                <span class="exp-label">Construction and repair </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 40%">
                                            <span>40% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li><span class="js-btn-prev" title="PREV">Previous Question</span></li>
                                        <li><span class="js-btn-next" title="NEXT">Next Question</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- step 2 -->
                        <div class="multisteps-form__panel" data-animation="fadeIn">
                            <div class="wizard-forms">
                                <div class="quiz-title text-center">
                                    <span>Question 3</span>
                                    <h2>Start Quiz</h2>
                                </div>
                                <div class="quiz-option-selector">
                                    <label class="quiz-details-option position-relative">
                                        <input type="radio" name="quiz" value="Email Markering"
                                            class="exp-option-box">
                                        <span class="select-area"></span>
                                        <span>User interface design.One Awesome Flat Ui Kit in Psd format. The pack ...
                                            Quiz App is a mobile UI kit created using Sketch and Photoshop, aimed to
                                            help you kick start your next mobile quiz or trivia project</span>
                                    </label>
                                    <label class="quiz-details-option position-relative">
                                        <input type="radio" name="quiz" value="Email Markering"
                                            class="exp-option-box">
                                        <span class="select-area"></span>
                                        <span>User interface design.One Awesome Flat Ui Kit in Psd format. The pack ...
                                            Quiz App is a mobile UI kit created using Sketch and Photoshop, aimed to
                                            help you kick start your next mobile quiz or trivia project</span>
                                    </label>
                                    <label class="quiz-details-option position-relative">
                                        <input type="radio" name="quiz" value="Email Markering"
                                            class="exp-option-box">
                                        <span class="select-area"></span>
                                        <span>User interface design.One Awesome Flat Ui Kit in Psd format. The pack ...
                                            Quiz App is a mobile UI kit created using Sketch and Photoshop, aimed to
                                            help you kick start your next mobile quiz or trivia project</span>
                                    </label>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 60%">
                                            <span>60% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li><span class="js-btn-prev" title="PREV">Previous Question</span></li>
                                        <li><span class="js-btn-next" title="NEXT">Next Question</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!-- step 3 -->
                        <div class="multisteps-form__panel" data-animation="fadeIn">
                            <div class="wizard-forms">
                                <div class="quiz-title text-center">
                                    <span>Question 4</span>
                                    <h2>Start Quiz</h2>
                                    <p>User interface design.One Awesome Flat Ui Kit in Psd format. The pack ... Quiz
                                        App is a mobile UI kit created using Sketch and Photoshop, aimed to help you
                                        kick start your next mobile quiz or trivia project</p>
                                </div>
                                <div class="quiz-option-selector">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="quiz-option-area position-relative">
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="quiz-option-img">
                                                    <img src="{{ asset('Quiz/assets/img/qo1.png') }}" alt="">
                                                </span>
                                                <span class="quiz-option-serial text-center">1</span>
                                                <span class="quiz-option-text">User interface design.One
                                                    Awesome Flat Ui Kit in Psd format.</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="quiz-option-area position-relative">
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="quiz-option-img">
                                                    <img src="{{ asset('Quiz/assets/img/qo3.png') }}" alt="">
                                                </span>
                                                <span class="quiz-option-serial text-center">2</span>
                                                <span class="quiz-option-text">User interface design.One
                                                    Awesome Flat Ui Kit in Psd format.</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="quiz-option-area position-relative">
                                                <input type="radio" name="quiz" value="SEO"
                                                    class="exp-option-box">
                                                <span class="quiz-option-img">
                                                    <img src="{{ asset('Quiz/assets/img/qo2.png') }}" alt="">
                                                </span>
                                                <span class="quiz-option-serial text-center">3</span>
                                                <span class="quiz-option-text">User interface design.One
                                                    Awesome Flat Ui Kit in Psd format.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq1.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 80%">
                                            <span>80% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li><span class="js-btn-prev" title="PREV">Previous Question</span></li>
                                        <li><button class="js-btn-submit" type="submit"><span>SUBMIT</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('Quiz/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('Quiz/assets/js/form-step.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/main.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/switch.js') }}"></script>

    <script>
        $(document).ready(function() {
            // var count = 60;
            // var counter = setInterval(timer, 1000);

            // function timer() {
            //     count = count - 1;
            //     if (count == -1) {
            //         clearInterval(counter);
            //         return;
            //     }

            //     var seconds = count % 60;
            //     var minutes = Math.floor(count / 60);
            //     var hours = Math.floor(minutes / 60);
            //     minutes %= 60;
            //     hours %= 60;
            //     $("#countdown").html(hours + ":" + minutes + ":" + seconds);
            // }
        });
    </script>
</body>

</html>
