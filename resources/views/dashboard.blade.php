@include('head')
<body style="background-color: @include('color');">
@include('nav')
<div class="card container">
  <div class="card-header">
    <h2>Welcome to GDMOTORS</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>You are logged in {{ Auth::user()->name}}</p>
    </blockquote>
  </div>
</div>
</body>

@include('foot')