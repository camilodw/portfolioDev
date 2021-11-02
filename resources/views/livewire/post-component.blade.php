<div>
    @forelse ($posts as $p)
    <div class="col-12">
    {{ $p->name }}    
    </div>    
    <div class="col-12">
        <p class="text text-secondary">{{ $p->text }}</p> 
    </div>
    <div class="col-12">
      {{ $p->created_at }}
    </div>
    @empty
        
    @endforelse
</div>
