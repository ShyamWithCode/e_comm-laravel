@extends('master')

@section('content')

<div class="login-container">
    <h2>LOGIN WITH EMAIL</h2>
    <form action="" method="POST">
        @csrf
        <div class="container">
            <div class="row my-2">
                <div class="col-sm-4 col-sm-offset-4 my-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="phone" placeholder="" required>

                    <label for="">Password</label>
                    <input type="text" class="form-control" name="phone" placeholder="" required>
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- <div class="categories-container">
    <div class="category-item">
        <img src="{{ asset('images/earrng1jpg.jpg')}}" alt="Earrings">
        <p>EARRINGS</p>
    </div>
    <div class="category-item">
        <img src="{{ asset('images/earrng3.jpg') }}" alt="Rings">
        <p>RINGS</p>
    </div>
    <div class="category-item">
        <img src="{{ asset('images/ring1.jpg') }}" alt="Neckpieces">
        <p>NECKPIECES</p>
    </div>
    <div class="category-item">
        <img src="{{ asset('images/necklace1.jpg') }}" alt="Bracelets">
        <p>BRACELETS</p>
    </div>
    <div class="category-item">
        <img src="{{ asset('images/nacklace3.jpg') }}" alt="Anklets">
        <p>ANKLETS</p>
    </div>
    <div class="category-item">
        <img src="{{ asset('images/ring2.jpg') }}" alt="Hair Accessories">
        <p>HAIR ACCESSORIES</p>
    </div>
</div>
<div class="main">
    <div class="row1">
            <img src="{{ asset('images/ring3.jpg') }}" alt="Image 1">
        </div>
         <div class="row2">
            <div class="row2-col1">
                <div class="row2-col1-row1"><img src="{{ asset('images/ring2.jpg') }}" alt="Image 1"></div>
                <div class="row2-col1-row2"><img src="{{ asset('images/ring1.jpg') }}" alt="Image 1"></div>
            </div>
            <div class="row2-col2"><img src="{{ asset('images/ring2.jpg') }}" alt="Image 1"></div>
         </div>
         <div class="row3"><img src="{{ asset('images/ring2.jpg') }}" alt="Image 1"></div>
         <div class="row4">
            <div class="row4-col1"><img src="{{ asset('images/ring2.jpg') }}" alt="Image 1"></div>
            <div class="row4-col2"><img src="{{ asset('images/ring2.jpg') }}" alt="Image 1"></div>
         </div>
    </div> -->

@endsection