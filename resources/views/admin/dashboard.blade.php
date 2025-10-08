@extends('admin.layout')
@section('title', 'Applications')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<div class="card shadow-sm">
  <div class="card-body">
    <h5 class="mb-3 text-success"><i class="bi bi-file-earmark-text me-2"></i> Application Submissions</h5>
    <div class="table-responsive">
      <table class="table table-bordered align-middle table-hover">
        <thead class="table-success text-dark">
          <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Class</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($applications as $app)
          <tr id="row-{{ $app->id }}">
            <td>{{ $app->id }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->email }}</td>
            <td>{{ $app->phone }}</td>
            <td>{{ $app->class }}</td>
            <td>
              <button class="btn btn-outline-success btn-sm view-btn" 
                      data-bs-toggle="modal" 
                      data-bs-target="#viewModal"
                      data-id="{{ $app->id }}"
                      data-name="{{ $app->name }}"
                      data-email="{{ $app->email }}"
                      data-phone="{{ $app->phone }}"
                      data-class="{{ $app->class }}"
                      data-father="{{ $app->father_name }}"
                      data-mother="{{ $app->mother_name }}"
                      data-temp="{{ $app->temp_address }}"
                      data-perm="{{ $app->perm_address }}"
                      data-message="{{ $app->message }}">
                <i class="bi bi-eye"></i> View
              </button>
              <button class="btn btn-outline-danger btn-sm delete-btn" data-id="{{ $app->id }}">
                <i class="bi bi-trash"></i> Delete
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-success">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="viewModalLabel">Application Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr><th>Name</th><td id="modalName"></td></tr>
            <tr><th>Email</th><td id="modalEmail"></td></tr>
            <tr><th>Phone</th><td id="modalPhone"></td></tr>
            <tr><th>Class</th><td id="modalClass"></td></tr>
            <tr><th>Father Name</th><td id="modalFather"></td></tr>
            <tr><th>Mother Name</th><td id="modalMother"></td></tr>
            <tr><th>Temporary Address</th><td id="modalTemp"></td></tr>
            <tr><th>Permanent Address</th><td id="modalPerm"></td></tr>
            <tr><th>Message</th><td id="modalMessage"></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Handle view button click
  document.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.getElementById('modalName').textContent = this.dataset.name;
      document.getElementById('modalEmail').textContent = this.dataset.email;
      document.getElementById('modalPhone').textContent = this.dataset.phone;
      document.getElementById('modalClass').textContent = this.dataset.class;
      document.getElementById('modalFather').textContent = this.dataset.father;
      document.getElementById('modalMother').textContent = this.dataset.mother;
      document.getElementById('modalTemp').textContent = this.dataset.temp;
      document.getElementById('modalPerm').textContent = this.dataset.perm;
      document.getElementById('modalMessage').textContent = this.dataset.message;
    });
  });

  // Handle delete button
  document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      let id = this.dataset.id;
      Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this application!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#198754',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          fetch(`/admin/delete/${id}`, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
          })
          .then(res => res.json())
          .then(data => {
            if (data.success) {
              document.getElementById('row-' + id).remove();
              Swal.fire('Deleted!', 'The record has been deleted.', 'success');
            } else {
              Swal.fire('Error!', 'Something went wrong.', 'error');
            }
          });
        }
      });
    });
  });
</script>
@endsection
