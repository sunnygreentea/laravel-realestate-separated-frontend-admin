@extends('layouts.admin')
@section('content')
@can('listing_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.listings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.listing.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.listing.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-listing">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.listing.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.listing.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.listing.fields.agent') }}
                        </th>
                        <th>
                            {{ trans('cruds.listing.fields.price') }}
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listings as $key => $listing)
                        <tr data-entry-id="{{ $listing->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $listing->id ?? '' }}
                            </td>
                            <td>
                                {{ $listing->name ?? '' }}
                            </td>
                            <td>
                                {{ $listing->user->name ?? '' }}
                            </td>
                             <td>
                                @money($listing->price)
                            </td>
                            
                            <td>
                                @can('listing_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.listings.show', $listing->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('listing_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.listings.edit', $listing->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('listing_delete')
                                    <form action="{{ route('admin.listings.destroy', $listing->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('listing_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.listings.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-listing:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection