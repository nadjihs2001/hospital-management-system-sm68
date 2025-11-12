<!-- Modal -->
<div class="modal fade" id="delete{{ $policlinic->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/policlinics_trans.delete_policlinic')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Policlinics.destroy', 'test') }}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
            <div class="modal-body">
                <input type="hidden" name="id" value="{{ $policlinic->id }}">
                <h5>{{trans('Dashboard/policlinics_trans.warning')}}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/policlinics_trans.close')}}</button>
                <button type="submit" class="btn btn-danger">{{trans('Dashboard/policlinics_trans.submit')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
