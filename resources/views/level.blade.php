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
    <br>

    <div class="quiz-option-selector clearfix">

        <ul>
            <li>
                <a href="{{ route('level1') }}">
                    <label class="start-quiz-item">
                        {{-- <input type="radio" name="quiz" value="Email Markering" class="exp-option-box"> --}}
                        <span class="exp-number text-uppercase"><i class="fas fa-play"></i></span>
                        <span class="exp-label">Level 1</span>
                        <span class="checkmark-border"></span>
                    </label>
                </a>
            </li>
            <li>
                <a href="{{ route('level2') }}">
                    <label class="start-quiz-item">
                        {{-- <input type="radio" name="quiz" value="Email Markering" class="exp-option-box"> --}}
                        <span class="exp-number text-uppercase"><i class="fas fa-play"></i></span>
                        <span class="exp-label">Level 2</span>
                        <span class="checkmark-border"></span>
                    </label>
                </a>
            </li>
            <li>
                <a href="{{ route('level3') }}">
                    <label class="start-quiz-item">
                        {{-- <input type="radio" name="quiz" value="Email Markering" class="exp-option-box"> --}}
                        <span class="exp-number text-uppercase"><i class="fas fa-play"></i></span>
                        <span class="exp-label">Level 3</span>
                        <span class="checkmark-border"></span>
                    </label>
                </a>
            </li>

            <li>
                <a href="{{ route('back') }}">
                    <label>
                        {{-- <input type="radio" name="quiz" value="Font Developer" class="exp-option-box"> --}}
                        <span class="exp-number text-uppercase"><i class="fas fa-arrow-left"></i></span>
                        <span class="exp-label">Back</span>
                        <span class="checkmark-border"></span>
                    </label>
                </a>
            </li>
        </ul>
    </div>


    <script src="{{ asset('Quiz/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    {{-- <script src="{{ asset('Quiz/assets/js/form-step.js') }}"></script> --}}
    <script src="{{ asset('Quiz/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/main.js') }}"></script>
    <script src="{{ asset('Quiz/assets/js/switch.js') }}"></script>
</body>

</html>
