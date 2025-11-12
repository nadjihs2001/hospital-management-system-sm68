<!-- Modal -->
<div class="modal fade" id="edit{{ $policlinic->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard/policlinics_trans.edit_policlinic')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Policlinics.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard/policlinics_trans.policlinic_name')}}</label>
                    <input type="hidden" name="id" value="{{ $policlinic->id }}">
                    <input type="text" name="name" value="{{ $policlinic->name }}" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/policlinics_trans.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/policlinics_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
