@include('admin.header')
<div class="container-fluid">
    {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav> --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            {{ session('error') }}
        </div>
    @endif


    <div class="container-fluid px-5">
        <div class="row my-4" style="display: flex;
                  justify-content: center;">


        </div>

        <div class="row" style="min-height: 65vh;">

            <div class="col-xl-12 col-sm-12">
                <div class="card mini-stat ">
                    <div class="card-body mini-stat-img">
                        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL NO.</th>
                                    <th>NAME</th>
                                    <th>EMAIL ID</th>
                                    <th>SUBJECT</th>
                                    <th>MESSAGE</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @php $u=1; @endphp
                                @foreach ($enquiries as $enquiry)
                                    <tr>
                                        <td>{{ $i }}</td>

                                        <td>
                                            <span style="color: rgb(96, 96, 96);">
                                                {{ $enquiry->name }}</span>

                                        </td>
                                        <td>{{ $enquiry->mail }}</td>
                                        <td>{{ $enquiry->subject }}</td>
                                        <td>{{ $enquiry->message }}</td>





                                    </tr>
                                    @php $i++ @endphp
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <label style="color: rgb(190, 190, 190);font-size:12px;">Designed by<span style="color: #004cca">
                    <b><a href="" target="_blank">VEGAS</a></b></span></label>
        </div>
    </div>
</div>



<!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> EDUMMI UNIVERSE <span
                                    class="d-none d-sm-inline-block"> by GREENWORLD International</span>
                            </div>
                        </div>
                    </div>
                </footer> -->
</div>
<script>
    $(document).ready(function() {
        // let table = new DataTable('#myTable', {
        //     responsive: true,

        // });

        let table = new DataTable('#myTable');

    });
</script>
</div>






</body>

</html>
