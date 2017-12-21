<li>
  <img src="#" alt="{{ $collector->name }}" class="gravatar"/>
  <a href="{{ route('collectors.show', $collector->id )}}" class="username">{{ $collector->name }}</a>

  @can('destroy', $collector)
      <form action="{{ route('collectors.destroy', $collector->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>
    @endcan
</li>
