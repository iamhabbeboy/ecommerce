
<div id="new-checkout-address" class="show">
    <div id="page-loader"></div>
        <div class="fund-account">
           
            <h4>Shopping History</h4>
            @if (count($list_history))
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>product title</th>
                    <th>product price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </tr>
                @php $total = 0 @endphp
                {{-- {{dd($list_history)}} --}}
                @foreach ($list_history as $key => $card)
                @php $total = $total + (array_get($card, 'product_price')) @endphp
                <tr>
                    <td> {{$key+1}} </td>
                    <td>{{array_get($card, 'title')}} </td>
                    <td>{{array_get($card, 'product_price')}} points</td>
                    <td> {{array_get($card, 'qty')}}</td>
                    <td>{{array_get($card, 'created_at')}}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th class="text-right">Total</th>
                    <th colspan="2"> {{$total}} points</th>
                </tr>
            </table>
            @else
                <div class="alert alert-warning">No shopping record available</div>
            @endif
        </div>
</div><!-- End #new-checkout-address -->