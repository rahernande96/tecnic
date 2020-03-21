<a href="{{ route('admin.users.edit',$id) }}" class="btn btn-primary">
    <span class="icon-pencil"></span>
</a>


<button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_destroy_{{ $id }}">
    <span class="icon-trash"></span>
</button>

  <!-- Danger modal -->
<div id="modal_destroy_{{ $id }}" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
            <h6 class="modal-title">Eliminar a {{ $name }}</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <h6 class="font-weight-semibold">Text in a modal</h6>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                <hr>

                <h6 class="font-weight-semibold">Another paragraph</h6>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn bg-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
<!-- /default modal -->