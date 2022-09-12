<x-Layout>
    <x-slot name="title"> Home</x-slot>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="text-center mb-5 p-2">
                    <h2 class="heading-section "> TUTION FEES MANAGEMENT  </h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mb-4">
                    <h4 class="text-center mb-4"> <u>Update Student Data</u></h4>
                    <form action="" method="POST">
                        @csrf 
                        @method("PUT")
                        <div class="mb-3">
                          <label class="form-label">Student Name</label>
                          <input type="text" value="{{$student->name}}" class="form-control" name="name" placeholder="Enter Student Name"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Father Name</label>
                            <input type="text" value="{{$student->father_name}}" class="form-control" name="father_name" placeholder="Enter Student Father Name"  required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Contact Number</label>
                            <input type="number" value="{{$student->contact}}" class="form-control" name="contact" placeholder="Enter Contact Numnber"  required>
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" value="{{$student->subject}}" class="form-control" name="subject" placeholder="Enter Subject" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Fees</label>
                            <input type="number" value="{{$student->fees}}" class="form-control" name="fees" placeholder="Enter Fees Amount" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Registerd Date</label>
                            <input type="text" value="{{$student->created_at}}" class="form-control" name="join-date" placeholder="Enter Fees Amount" readonly required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Last Update</label>
                            <input type="text" value="{{$student->updated_at}}" class="form-control" name="update-date" placeholder="Enter Fees Amount" readonly required>
                          </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </section>
</x-Layout>

    