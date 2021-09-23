@extends('base')
@section('content')

        <div class="card"><br>
                <div class="card-title text-center"><h4>Create account <h5>
                <img src="https://i.ibb.co/MBSwXG3/dad.png" width="40" height="40" class="d-inline-block align-top" alt=""></h5></h4><p><hr class="my-4"></p></div>
            <div class="cad-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <p class="text-center">Already have an account? Log in <a href="{{url('/login')}}">here</a>.</p>
                        <button class="btn btn-primary" style="width: 100%;">Sign up</button>
                    </div>
                <br>
                </form>
            </div>
        </div>
        
@stop