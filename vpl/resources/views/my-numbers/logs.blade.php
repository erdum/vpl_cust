@extends('master-layout')
@section('title', 'Logs')
@section('content')
<div class="rounded-md shadow overflow-hidden border-b border-gray-200">

  @if ($logs->count() > 0)
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-white">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Number</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">From</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Timestamp</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Minutes Consumed</th>
      </tr>
    </thead>
    <tbody onclick="">
      @foreach ($logs as $log)
      <tr class="even:bg-white odd:bg-gray-50">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{ $log->number->number }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $log->from_number }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $log->start_time->format('Y-m-d h:i:s') }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $log->minutes_consumed }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div class="bg-white rounded-md shadow w-full h-16 flex flex-col justify-center">
    <h2 class="w-full text-center text-xl">No Data</h2>
  </div>
  @endif
</div>

@includeWhen(
  $logs->count() > 0,
  'table-pagination-bar',
  ['rows' => $logs]
)

@endsection
