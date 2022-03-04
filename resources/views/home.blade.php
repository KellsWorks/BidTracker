@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Add new bid
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-header bg-primary">
                          <h5 class="modal-title text-white">Create a new bid</h5>
                        </div>
                        <div class="modal-content">
                          <form method="POST" action={{url('/create-bid')}} class="p-4">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Bid Number</label>
                              <input name="bid_number" id="bid_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                              <textarea name="description" id="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Date Published</label>
                              <input type="date" name="date_published" id="date_published" class="form-control" id="exampleFormControlInput1" placeholder="Select published date">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Amount</label>
                              <input type="number" name="amount" id="amount"  class="form-control" id="exampleFormControlInput1" placeholder="Amount in Kwacha">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Deadline</label>
                              <input type="date" name="deadline" id="deadline" class="form-control" id="exampleFormControlInput1" placeholder="Select deadline">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Lead</label>
                              <input type="text" name="lead" id="lead" class="form-control" id="exampleFormControlInput1" placeholder="name of the lead personel">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Upload document</label>
                              <input type="file" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                          
                        </div>
                      </div>
                    </div>


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Bid Number</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date Published</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Days left</th>
                            <th scope="col">Lead</th>
                            <th scope="col">Documents</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($bids as $bid)
                          <tr>
                            <th scope="row">{{ $bid->bid_number }}</th>
                            <td>{{ $bid->description }}</td>
                            <td>{{ $bid->date_published }}</td>
                            <td>{{ $bid->amount }}</td>
                            <td>{{ $bid->deadline }}</td>
                            <td>0</td>
                            <td>{{ $bid->lead }}</td>
                            <td>0</td>
                          </tr>
                          @empty
                            <p>No data available</p>
                          @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
