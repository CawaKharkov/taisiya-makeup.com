<table class="table table-responsive">
    <thead>
        <th>Title</th>
        <th>Content</th>
        <th>Preview</th>
        <th>Slug</th>
        <th>Metatags</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($staticPages as $staticPage)
        <tr>
            <td>{!! $staticPage->title !!}</td>
            <td>{!! $staticPage->content !!}</td>
            <td><img src="{{$staticPage->preview->url('thumb')}}" alt="" class="img-thumbnail"></td>
            <td><a href="{{route('staticPages.view',['staticPages' => $staticPage])}}">View</a></td>
            <td>{!! $staticPage->metaTags !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.staticPages.destroy', $staticPage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.staticPages.show', [$staticPage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.staticPages.edit', [$staticPage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>