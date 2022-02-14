@extends('layout.layout')
@section('title', 'Contact')

@section('content')

<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
    <div class="row text-white mb-5">
        <p class="mx-auto mb-5">
            Do You Have Any Question? Please do not hesitate to contact. I will come back to You
            withiin a matter of hours to help you.
        </p>
        <div class="col-sm-9 mb-5">
            <form action="">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="inputName">Your Name*</label>
                        <input type="text" class="form-control mt-2"
                        id="inputName" required>
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail">Your Email*</label>
                        <input type="email" class="form-control mt-2"
                        id="inputEmail" required>
                    </div> 

                    <div class="col-md-12">
                        <label for="inputSubject">Your Subject*</label>
                        <input type="text" class="form-control mt-2"
                        id="inputSubject" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="inputTextarea">Your Message*</label>
                        <textarea  id="inputTextarea" class="form-control mt-2" required
                        ></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
        <div class="col-sm-3 text-center">
            <ul class="list-unstyled">

                <li>
                    <i class="fas fa-map-marker-alt fa-2x i-color"></i><p>Lahore,Punjab,Pakistan</p>
                </li>
                <li>
                    <i  class="fas fa-phone fa-2x mt-4 i-color"></i><p>+92-03054855901</p>
                </li>
                <li>
                    <i  class="fas fa-envelope fa-2x mt-4 i-color"></i><p>mughalzahid462@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="#" target="_blank"><i class="fab fa-twitter-square i-color mx-1"></i></a>           
    <a href="#" target="_blank"><i class="fab fa-facebook-square i-color mx-1"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram i-color mx-1"></i></a>
    <a href="#" target="_blank"><i class="fab fa-dribbble-square i-color mx-1"></i></a>
</div>
    
@endsection