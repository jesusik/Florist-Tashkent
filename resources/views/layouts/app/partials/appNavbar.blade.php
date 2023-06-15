<div class="nav-bar">

  <ul class="container nav-bar-box">
    @foreach($categories as $category)
    <li>
      <a href="#{{$category->id}}">
        <p>{{$category->name}}</p>
      </a>
    </li>
    @endforeach
  </ul>
</div>
<hr>
<div class="banner">
  <div class="container banner-box">
    <h2>Lorem ipsum dolor sit amet</h2>


  </div>
  <hr>
</div>