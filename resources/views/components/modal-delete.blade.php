<div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog nodal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah yakin akan di hapus?</p>
                <form action="?" method="post" style="display: none;" id="formDelete">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-scondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-danger" type="button" id="yesDelete">Ya, Hapus!</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function(){
            $('#modalDelete').on('show.bs.modal', function(event){
                var url = $(event.relatedTarget).data('url');
                $(this).find('#formDelete').attr('action', url);
            });
            $('#yesDelete').click(function(){
                $('#formDelete').submit();
            });
        })
    </script>
@endpush