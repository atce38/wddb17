<table class="table  table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr class="table-dark">
            <th>#</th>
            @foreach ($attributes as $head)
            <th>{{ $head['title'] }}</th>
            @endforeach
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data_array as $key=> $data)
            <tr>
                <td>{{ ++$key }}</td>
                @foreach ($attributes as $data1)
                <?php $attribute=$data1['attr']; ?>

                @if (str_contains($data1['title'],'Img'))
                <td><img width="100" height="100" src="{{ $data->$attribute }}" alt=""></td>
                @else
                <td>{{ $data->$attribute }}</td>
                @endif


                @endforeach

                <td><a class="btn btn-primary" href="{{ route($entity.'.edit',['id'=>$data->id]) }}">Edit</a><a class="btn btn-danger" href="{{ route($entity.'.delete',['id'=>$data->id]) }}">Delete</a></td>
            </tr>
            @endforeach
            @if (isset($data_array->links))
            <div>
                {{ $data_array->links('pagination::bootstrap-4') }}
            </div>
            @endif

        </tbody>
</table>
