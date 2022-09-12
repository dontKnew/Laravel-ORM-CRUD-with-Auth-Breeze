<x-Layout>
    <x-slot name="title"> Home</x-slot>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="text-center mb-5 p-2">
                    <h2 class="heading-section "> TUTION FEES MANAGEMENT  </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-4">Add New Student</h4>
                    @if (session()->has('404'))
                        <div class="alert alert-danger"> {{session('404')}}</div>
                    @elseif(session()->has('200')) 
                        <div class="alert alert-success"> {{session('200')}}</div>
                    @endif
                    <form action="" method="POST">
                        @csrf 
                        <div class="mb-3">
                          <label class="form-label">Student Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter Student Name"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Father Name</label>
                            <input type="text" class="form-control" name="father_name" placeholder="Enter Student Father Name"  required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="number" class="form-control" name="contact" placeholder="Enter Contact Numnber"  required>
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Fees</label>
                            <input type="number" class="form-control" name="fees" placeholder="Enter Fees Amount" required>
                          </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </section>
</x-Layout>

    