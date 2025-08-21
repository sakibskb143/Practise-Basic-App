@extends('master')

@section('content1')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registration</h5>
                <form>
                    <div class="form-group">
                        <label for="regEmail">Email address</label>
                        <input type="email" class="form-control" id="regEmail" aria-describedby="regEmailHelp" placeholder="Enter email">
                        <small id="regEmailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="regPassword">Password</label>
                        <input type="password" class="form-control" id="regPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="regPasswordConfirm">Confirm Password</label>
                        <input type="password" class="form-control" id="regPasswordConfirm" placeholder="Confirm Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="regTerms">
                        <label class="form-check-label" for="regTerms">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form>
                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" aria-describedby="loginEmailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
