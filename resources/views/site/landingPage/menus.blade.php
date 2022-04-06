<div class="categories-wrapper ">
  <div class="categories-container">
    <ul class="categories db ">
      <li class="k "><a href="#all"><b style="color: #5e72e4">#</b></a></li>
      @forelse ($categories as $category)
      <li><a href="#{{ $category->id }}"><b style="color: #5e72e4">{{ $category->description }} </b>  </a></li>
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse
    </ul>
  </div>
</div>