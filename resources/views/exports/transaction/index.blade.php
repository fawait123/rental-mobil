<table>
    <thead>
        <tr>
            <th>
                <span class="userDatatable-title">No</span>
            </th>
            <th>
                <span class="userDatatable-title">Customer Name</span>
            </th>
            <th>
                <span class="userDatatable-title">Car</span>
            </th>
            <th>
                <span class="userDatatable-title">Number Vehicles</span>
            </th>
            <th>
                <span class="userDatatable-title">Book Start Date</span>
            </th>
            <th>
                <span class="userDatatable-title">Book End Date</span>
            </th>
            <th>
                <span class="userDatatable-title">Number Of Days</span>
            </th>
            <th>
                <span class="userDatatable-title">Price</span>
            </th>
            <th>
                <span class="userDatatable-title">Total Price</span>
            </th>
            <th>
                <span class="userDatatable-title">Status</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaction as $row)
            <tr>
                <td>
                    <div class="userDatatable-content">
                        {{ $loop->iteration }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->name }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->property->car->name }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->property->car->number_vehicles }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ date('d M Y', strtotime($row->start_order)) }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ date('d M Y', strtotime($row->end_order)) }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->number_of_days }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ number_format($row->price, 2, ',', '.') }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ number_format($row->total_price, 2, ',', '.') }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->status == 'completed' ? 'Completed' : 'Process' }}
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
