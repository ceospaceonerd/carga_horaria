<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if (count($rooms))
        <table class="table table-bordered">
            <thead>
                <tr class="table-head">
                    <th style="width: 40%">Nombre</th>
                    <th style="width: 40%">Seccion</th>
                    <th style="width: 40%">Capacidad</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->name }}</td>
                    <td></td>
                    <td>{{ $room->capacity }}</td>
                    <td>
                    <button class="btn btn-primary btn-sm resource-update-btn" data-id="{{ $room->id }}"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-sm resource-delete-btn" data-id="{{ $room->id }}"><i class="fa fa-trash-o"></i></button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <div id="pagination">
            {!!
                $rooms->render()
            !!}
        </div>
        @else
        <div class="no-data text-center">
            <p>No se encontraron datos relacionados</p>
        </div>
        @endif
    </div>
</div>