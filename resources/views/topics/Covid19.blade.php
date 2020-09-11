@extends('layout')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Covid 19</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">Post Question</button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Question</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="GET" action="/BlogAndQuora_006/store">
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question:</label>
                        <input type="text" class="form-control" id="question" name="question" required>
                        <input type="hidden" id="categorie" name="categorie" value="covid19" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h2>Questions</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Question</th>
            <th>Categorie</th>
          </tr>
        </thead>
        <tbody>
            @foreach($question as $row)
            <tr>
                <th scope="row">{{$row['id']}}</th>
                <td>{{$row['question']}}</td>
                <td>{{$row['categorie']}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection
