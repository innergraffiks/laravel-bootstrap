@extends('layouts.app')

@section('app-name', 'Bootstrap')
@section('title', 'Contact')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="stripe contact">
    <div class="container">
        <h2 class="stripe-title">Contact us</h2>
        <p class="lead">Quickly include Bootstrap's CSS and JS into any project. Use your favorite package manager, download the source, or use the Bootstrap CDN.</p>

        <div class="row">
            <div class="col-sm-6 mb-3">
                <h4>Let us know what you feel !</h4>
                <p>Include Bootstrap's source Sass and JavaScript files via Bower, Composer, Meteor, or npm. Package managed installs don't include documentation, but do include our Gruntfile and readme.</p>
                <p>Include Bootstrap's source Sass and JavaScript files via Bower, Composer, Meteor, or npm. Package managed installs don't include documentation, but do include our Gruntfile and readme.</p>
            </div>
            <div class="col-sm-6 mb-3">
                <form id="form-contact" class="label-hidden">

                    <div class="form-group">
                        <label for="contactGender">Example select</label>
                        <select class="form-control" id="contactGender">
                          <option>Mr</option>
                          <option>Mrs</option>
                          <option>Ms</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="contactFirstname">Firstname</label>
                            <input type="text" class="form-control" id="contactFirstname" placeholder="Enter firstname">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="contactLastname">Lastname</label>
                            <input type="text" class="form-control" id="contactLastname" placeholder="Enter lastname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>



                    <div class="form-group">
                        <label for="contactMessage">Message</label>
                        <textarea class="form-control" id="contactMessage" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection