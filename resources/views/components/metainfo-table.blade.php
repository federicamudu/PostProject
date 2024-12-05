<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col">Q.tà articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metainfos as $metainfo)
        <tr>
            <th scope="row">{{$metainfo->id}}</th>
            <td>{{$metainfo->name}}</td>
            <td>{{count($metainfo->articles)}}</td>
            @if ($metaType=='tags')
            <td>
                <form action="{{route('admin.editTag', ['tag'=>$metainfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" id="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-secondary">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag'=>$metainfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory', ['category'=>$metainfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" id="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-secondary">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category'=>$metainfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>