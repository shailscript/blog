@extends('main')
  @section('title', '| Contact')
  @section('content')
      <div class="row">
        <div class="col">
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
              <textarea id="message" class="form-control" type="text" name="message" value="" rows="3"></textarea>
            </div>
            <input type="button" name="submit" value="Send Message" class="btn btn-success btn-lg btn-block">
          </form>
          <br><br>
        </div>
      </div>
  @endsection
