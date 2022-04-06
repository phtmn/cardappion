<div class="categories-wrapper af lighten-1">
  <div class="categories-container">
    <ul class="categories db">
      <li class="k"><a href="#all">#</a></li>
      @forelse ($categories as $category)
      <li><a href="#{{ $category->id }}">{{ $category->description }} </a></li>
      @empty
      <p class="text-danger">Nenhuma categoria cadastrada!</p>
      @endforelse
    </ul>
  </div>
</div>