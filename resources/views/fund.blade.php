<div id="new-checkout-address" class="show">
    <div id="page-loader"></div>
        <div class="fund-account">
            <label>Amount</label>
            <input type="text" name="amount" id="amount" class="form-control" >
            <button class="btn btn-primary" id="generate">Generate Digital Card</button>
            <hr>
            @if (count($userFind))
            <h4>Fund History</h4>
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Digital Number</th>
                    <th>Date</th>
                </tr>
                @php $total = 0 @endphp
                @foreach ($userFind as $key => $card)
                @php $total = $total + ($card->amount) @endphp
                <tr>
                    <td> {{$key+1}} </td>
                    <td>&#8358; {{$card->amount}}</td>
                    <td>{{$card->digital_number}}</td>
                    <td>{{$card->created_at}}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th class="text-right">Total</th>
                    <th colspan="2"> &#8358; {{$total}} </th>
                </tr>
            </table>
            @endif
        </div>
</div><!-- End #new-checkout-address -->