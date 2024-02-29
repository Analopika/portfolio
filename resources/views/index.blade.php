@extends('layouts.layout')
@section('title', 'Analo Pika')
@section('content')
    <!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ANALO <span class="w3-hide-small">PIKA</span> (INTERN)</span>
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center"><em>I love Software Development</em></p>
    <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
      qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>Analo Pika</b></p><br>
        <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large">
        <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
    <p class="w3-wide"><i class="fa fa-code fa-shake"></i>C# Web Api</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>HTML</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>CSS</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">50%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>JAVASCRIPT</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">50%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>LARAVEL</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">25%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>SQL</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-code"></i>MVC</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
  </div>

@endsection

