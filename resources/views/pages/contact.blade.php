@extends('main')
  @section('title', '| Contact')
  @section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>Contact us</h1>
          <hr>
          <form class="form">
            <div class="form-group">
              <label name="email">Email :</label>
              <input id="email" class="form-control" type="text" name="email" value="">
            </div>
            <div class="form-group">
              <label name="subject">Subject :</label>
              <input id="subject" class="form-control" type="text" name="subject" value="">
            </div>
            <div class="form-group">
              <label name="message">Email :</label>
              <textbox id="message" class="form-control" type="text" name="message" value="">
            </div>
            <input type="button" name="submit" value="Send Message" class="btn btn-success">
          </form>
        </div>
      </div>
  @endsection
