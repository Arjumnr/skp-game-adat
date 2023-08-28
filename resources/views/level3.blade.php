<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GAME LEVEL 3s</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('Quiz/assets/css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <li class="multisteps-form__progress-btn"></li>
                </ul>
            </div>
            <div class="step-inner-content clearfix position-relative">
                <form class="multisteps-form__form" id="wizard" method="POST" action="{{ route('postL1') }}">
                    @csrf
                    {{-- pertanyaan id --}}
                    <input type="hidden" name="q-1-id" value="{{ $pertanyaans[0]->id }}">
                    <input type="hidden" name="q-2-id" value="{{ $pertanyaans[1]->id }}">
                    <input type="hidden" name="q-3-id" value="{{ $pertanyaans[2]->id }}">
                    <input type="hidden" name="q-4-id" value="{{ $pertanyaans[3]->id }}">
                    <input type="hidden" name="q-5-id" value="{{ $pertanyaans[4]->id }}">

                    <div class="form-area position-relative">
                        {{-- STEP 1 --}}
                        <div class="multisteps-form__panel  js-active" data-animation="fadeIn" id="step-1">
                            <div class="wizard-forms clearfix position-relative" id="steps">
                                <div class="quiz-title text-center">
                                    <span>Game 1</span>
                                    <div>
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaans[0]->path_image }}"
                                            width="40%">
                                    </div>
                                    <p>{{ $pertanyaans[0]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="p1"
                                                    value="{{ $pertanyaans[0]->opsi[0]->opsi1 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">{{ $pertanyaans[0]->opsi[0]->opsi1 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p1"
                                                    value="{{ $pertanyaans[0]->opsi[0]->opsi2 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">{{ $pertanyaans[0]->opsi[0]->opsi2 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p1"
                                                    value="{{ $pertanyaans[0]->opsi[0]->opsi3 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">{{ $pertanyaans[0]->opsi[0]->opsi3 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p1"
                                                    value="{{ $pertanyaans[0]->opsi[0]->opsi4 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">{{ $pertanyaans[0]->opsi[0]->opsi4 }} </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq2.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 20%">
                                            <span>20% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li class="d-none"><span class="js-btn-next" title="PREV">Kembali</span></li>
                                        <li><span class="js-btn-next" title="NEXT" id="btnNext1">Lanjutkan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- STEP 2 --}}
                        <div class="multisteps-form__panel" data-animation="fadeIn" id="step-2">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Game 2</span>
                                    <div>
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaans[1]->path_image }}"
                                            width="40%">
                                    </div>
                                    <p>{{ $pertanyaans[1]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix" id="stepss">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="p2"
                                                    value="{{ $pertanyaans[1]->opsi[0]->opsi1 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">{{ $pertanyaans[1]->opsi[0]->opsi1 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p2"
                                                    value="{{ $pertanyaans[1]->opsi[0]->opsi2 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">{{ $pertanyaans[1]->opsi[0]->opsi2 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p2"
                                                    value="{{ $pertanyaans[1]->opsi[0]->opsi3 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">{{ $pertanyaans[1]->opsi[0]->opsi3 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p2"
                                                    value="{{ $pertanyaans[1]->opsi[0]->opsi4 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">{{ $pertanyaans[1]->opsi[0]->opsi4 }}
                                                </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq2.png') }}" alt="">
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
                                        <li><span class="js-btn-prev" title="PREV">Kembali</span></li>
                                        <li><span class="js-btn-next" title="NEXT" id="btnNext2">Lanjutkan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- STEP 3 --}}
                        <div class="multisteps-form__panel" data-animation="fadeIn" id="step-3">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Game 3</span>
                                    <div>
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaans[2]->path_image }}"
                                            width="40%">
                                    </div>
                                    <p>{{ $pertanyaans[2]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix" id="stepss">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="p3"
                                                    value="{{ $pertanyaans[2]->opsi[0]->opsi1 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">{{ $pertanyaans[2]->opsi[0]->opsi1 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p3"
                                                    value="{{ $pertanyaans[2]->opsi[0]->opsi2 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">{{ $pertanyaans[2]->opsi[0]->opsi2 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p3"
                                                    value="{{ $pertanyaans[2]->opsi[0]->opsi3 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">{{ $pertanyaans[2]->opsi[0]->opsi3 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p3"
                                                    value="{{ $pertanyaans[2]->opsi[0]->opsi4 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">{{ $pertanyaans[2]->opsi[0]->opsi4 }}
                                                </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq2.png') }}" alt="">
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
                                        <li><span class="js-btn-prev" title="PREV">Kembali</span></li>
                                        <li><span class="js-btn-next" title="NEXT" id="btnNext3">Lanjutkan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- STEP 4 --}}
                        <div class="multisteps-form__panel" data-animation="fadeIn" id="step-4">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Game 4</span>
                                    <div>
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaans[3]->path_image }}"
                                            width="40%">
                                    </div>
                                    <p>{{ $pertanyaans[3]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix" id="stepss">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="p4"
                                                    value="{{ $pertanyaans[3]->opsi[0]->opsi1 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">{{ $pertanyaans[3]->opsi[0]->opsi1 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p4"
                                                    value="{{ $pertanyaans[3]->opsi[0]->opsi2 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">{{ $pertanyaans[3]->opsi[0]->opsi2 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p4"
                                                    value="{{ $pertanyaans[3]->opsi[0]->opsi3 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">{{ $pertanyaans[3]->opsi[0]->opsi3 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p4"
                                                    value="{{ $pertanyaans[3]->opsi[0]->opsi4 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">{{ $pertanyaans[3]->opsi[0]->opsi4 }}
                                                </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq2.png') }}" alt="">
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
                                        <li><span class="js-btn-prev" title="PREV">Kembali</span></li>
                                        <li><span class="js-btn-next" title="NEXT" id="btnNext4">Lanjutkan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- STEP 5 --}}
                        <div class="multisteps-form__panel" data-animation="fadeIn" id="step-4">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    <span>Game 4</span>
                                    <div>
                                        <img src="{{ URL::to('/') }}/img/{{ $pertanyaans[4]->path_image }}"
                                            width="40%">
                                    </div>
                                    <p>{{ $pertanyaans[4]->pertanyaan }}</p>
                                </div>
                                <div class="quiz-option-selector clearfix" id="stepss">
                                    <ul>
                                        <li>
                                            <label class="start-quiz-item">
                                                <input type="radio" name="p5"
                                                    value="{{ $pertanyaans[4]->opsi[0]->opsi1 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">A</span>
                                                <span class="exp-label">{{ $pertanyaans[4]->opsi[0]->opsi1 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p5"
                                                    value="{{ $pertanyaans[4]->opsi[0]->opsi2 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">b</span>
                                                <span class="exp-label">{{ $pertanyaans[4]->opsi[0]->opsi2 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p5"
                                                    value="{{ $pertanyaans[4]->opsi[0]->opsi3 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">c</span>
                                                <span class="exp-label">{{ $pertanyaans[4]->opsi[0]->opsi3 }}</span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" name="p5"
                                                    value="{{ $pertanyaans[4]->opsi[0]->opsi4 }}"
                                                    class="exp-option-box">
                                                <span class="exp-number text-uppercase">d</span>
                                                <span class="exp-label">{{ $pertanyaans[4]->opsi[0]->opsi4 }}
                                                </span>
                                                <span class="checkmark-border"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-vector">
                                    <img src="{{ asset('Quiz/assets/img/bq2.png') }}" alt="">
                                </div>
                                <div class="quiz-progress-area">
                                    <div class="progress">
                                        <div class="progress-bar position-relative" style="width: 100%">
                                            <span>100% complete, keep it up!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions clearfix">
                                    <ul>
                                        <li><span class="js-btn-prev" title="PREV">Kembali</span></li>
                                        <li><span class="js-btn-next" title="NEXT" id="btnSubmit"><button
                                                    type="submit">Submit</button></span>
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
$(document).ready(function () {
        //required stepss on btnNext
        $('#btnNext1').click(function () {
            console.log($('input[name="p1"]:checked').length);
            if ($('input[name="p1"]:checked').length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilihan Tidak Boleh Kosong',
                })
                return false;
            }
            
        });
        $('#btnNext2').click(function () {
            console.log($('input[name="p2"]:checked').length);
            if ($('input[name="p2"]:checked').length === 0) {
               Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilihan Tidak Boleh Kosong',
                })
                return false;
            }
            
        });
        $('#btnNext3').click(function () {
            console.log($('input[name="p3"]:checked').length);
            if ($('input[name="p3"]:checked').length === 0) {
               Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilihan Tidak Boleh Kosong',
                })
                return false;
            }
            
        });
        $('#btnNext4').click(function () {
            console.log($('input[name="p4"]:checked').length);
            if ($('input[name="p4"]:checked').length === 0) {
               Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilihan Tidak Boleh Kosong',
                })
                return false;
            }
            
        });
        $('#btnSubmit').click(function () {
            console.log($('input[name="p5"]:checked').length);
            if ($('input[name="p5"]:checked').length === 0) {
               Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilihan Tidak Boleh Kosong',
                })
                return false;
            }
            
        });




    });




    </script>
</body>

</html>
