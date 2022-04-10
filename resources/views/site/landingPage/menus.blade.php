
<div class="categories-wrapper ">
  <div class="categories-container">
    <ul class="categories db ">
      <li data-activates="nav-mobile" class="button-collapse" ><a href="#all"><b style="color: #212529">Sobre</b></a></li>
      <li class="k "><a href="#all"><b style="color: #212529">#</b></a></li>
      @forelse ($categories as $category)
      <li><a href="#{{ $category->id }}"><b style="color: #212529">{{ $category->description }} </b>  </a></li>
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse
    </ul>
  </div>
</div>







