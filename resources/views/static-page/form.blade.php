@extends('layouts.main')
@section('main-content')
    <div class="container">
        <form id="form">
            <h1>Sign Up</h1>
            {{-- Required fields --}}
            <div class="form-group">
                <input type="text" id="first-name" class="form-control" name="first_name" placeholder="First Name">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div>
            <div class="form-group">
                <input type="text" id="last-name" class="form-control" name="last_name" placeholder="Last Name">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div>
            <div class="form-group">
                <input type="text"  id="email" class="form-control" name="email" placeholder="Email">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div>
            <div class="form-group">
                <input type="text" id="address" class="form-control" name="address" placeholder="Address">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div>
            {{-- Password --}}
            <div class="form-group">
                <input  type="password" id="password" class="form-control" name="password" placeholder="Password">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                <i class="fas fa-exclamation-circle hidden"></i>
            </div> 
            {{-- Button --}}
            <div class="btn">
                <input type="submit" value="Sign Up">
            </div>
            <div class="password-check visibility">
                <h3>Password must contain:</h3>
                <ul>
                    <li class="num uncheck">
                        <i class="fas fa-exclamation-circle num-exclamation"></i>
                        <i class="fas fa-check-circle num-check hidden"></i>
                        1 number
                    </li>
                    <li class="special-char uncheck">
                        <i class="fas fa-exclamation-circle special-char-exclamation"></i>
                        <i class="fas fa-check-circle special-char-check hidden"></i>
                        3 special characters
                    </li>
                    <li class="space uncheck">
                        <i class="fas fa-exclamation-circle  space-exclamation"></i>
                        <i class="fas fa-check-circle  space-check hidden"></i>
                        No spaces
                    </li>
                    <li class="no-name uncheck">
                        <i class="fas fa-exclamation-circle  no-name-exclamation"></i>
                        <i class="fas fa-check-circle  no-name-check hidden"></i>
                        No First and Last Name
                    </li>
                    <li class="char uncheck">
                        <i class="fas fa-exclamation-circle min-char-exclamation"></i>
                        <i class="fas fa-check-circle min-char-check hidden"></i>
                        Minimum 10 characters
                    </li>
                </ul>
            </div>   
        </form>
    </div>
    
    <script src="{{ asset('js/form.js') }}"></script>

@endsection