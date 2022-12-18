<table>
    <thead>
        <tr>
            <th>
                <span class="userDatatable-title">No</span>
            </th>
            <th>
                <span class="userDatatable-title">Invoice</span>
            </th>
            <th>
                <span class="userDatatable-title">Customer Name</span>
            </th>
            <th>
                <span class="userDatatable-title">Payment Type</span>
            </th>
            <th>
                <span class="userDatatable-title">Nominal</span>
            </th>
            <th>
                <span class="userDatatable-title">Status</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payment as $row)
            <tr>
                <td>
                    <div class="userDatatable-content">
                        {{ $loop->iteration }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->payment->transaction->invoice ?? '' }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->payment->transaction->name ?? '' }}
                    </div>
                </td>
                @if ($row->payment->type == 'payment gateway')
                    <td>
                        <div class="userDatatable-content d-inline-block">
                            <span style="text-transform: uppercase">{{ $row->midtrans->bank }}</span>,
                            {{ $row->midtrans->va_number }}
                        </div>
                    </td>
                @else
                    <td>
                        <div class="userDatatable-content d-inline-block">
                            {{ $row->payment->type }}
                        </div>
                    </td>
                @endif
                <td>
                    <div class="userDatatable-content d-inline-block">
                        Rp. {{ number_format($row->nominal, 2, ',', '.') }}
                    </div>
                </td>
                <td>
                    <div class="userDatatable-content d-inline-block">
                        {{ $row->status }}
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
