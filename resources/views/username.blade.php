<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GAME EDUKASI PENGENALAN RUMAH ADAT DAN AKSARA LONTARA </title>
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
    </div>
    <div class="wrapper position-relative">
        <div class="wizard-content-1 clearfix">
            <div class="step-inner-content clearfix position-relative">
                <form action="{{ route('postUsername') }}" method="POST">
                    @csrf
                    <div class="form-area position-relative">
                        <div class="multisteps-form__panel  js-active" data-animation="fadeIn">
                            <div class="wizard-forms clearfix position-relative">
                                <div class="quiz-title text-center">
                                    {{-- <span>Perhatian!</span> --}}
                                    <div class="bottom-vector">
                                        <img src="{{ asset('Quiz/assets/img/img-awal.png') }}" alt=""
                                            width="50%">
                                    </div>

                                </div>
                                <div class="quiz-option-selector clearfix">
                                    {{-- username --}}
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            required>
                                    </div>
                                </div>
                                <div class="actions clearfix text-center">
                                    <ul>

                                        <button type="submit">
                                            <li><span class="js-btn-next" title="NEXT">Simpan</span></li>
                                        </button>
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
</body>

</html>
