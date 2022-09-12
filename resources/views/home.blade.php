<x-Layout>
    <x-slot name="title"> Home</x-slot>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="text-center p-2">
                    <h2 class="heading-section "> TUTION FEES MANAGEMENT  </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-2"> <u>Student Information</u></h4>
                    <div class="d-flex justify-content-between text-center">
                        <a href="{{route('add-student')}}" class="btn btn-outline-success my-2">Add Student</a>
                        <a href="{{route('delete-student')}}" class="btn btn-outline-danger my-2 text-center">Delete Table Data</a>
                    </div>
                    
                    @if (session()->has('error'))
                        <div class="alert alert-danger"> {{session('error')}}</div>
                    @elseif(session()->has('success')) 
                        <div class="alert alert-success"> {{session('success')}}</div>
                    @endif
                    <div class="table">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Contact</th>
                                    <th>Subject</th>
                                    <th>Fees</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <th scope="row" class="scope">{{$student->id}}</th>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->father_name}}</td>
                                    <td>{{$student->subject}}</td>
                                    <td>{{$student->contact}}</td>
                                    <td>{{$student->fees}}</td>
                                    <td>{{$student->created_at}}</td>
                                    
                                    <td>
                                        <a href="{{url('update-student', $student->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{url('delete-student', $student->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links('pagination::simple-bootstrap-4')}}                      
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-Layout>

    