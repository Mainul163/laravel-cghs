<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    p.card_info {
        font-size: 18px;
        font-weight: bold;
    }

    p.card_info span {
        font-weight: normal;
    }

    a.btn.dy_btn {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    @media only screen and (min-width: 768px) {
        .mobil_redesing {
            display: none;
        }

    }

    @media only screen and (max-width: 767px) {
        .display_deisgn {
            display: none;
        }

        .mobil_redesing {
            display: block;
        }
    }
    </style>
</head>

<body class="profile_main">



    @foreach($graduatedData as $row)
    <!-- <img src="{{asset('images/' .$row->img)}}" width='170px' height='170px' alt='image' />
    <img src="" alt=""> -->


    <div class="container log_pg mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="main_Protfolio_design">
                    <div class="card">
                        <div class="card-body">

                            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/'.$row->img)))}}"" width='170px' height='auto' alt='image'
                                class=" border rounded" />


                            <br><br>

                            <div class="display_deisgn">
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Registration Id
                                        :</label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">graduated-1001{{$row->id}} </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Name : </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->graduated_name}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Batch : </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->batch}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Mobile Number :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->mobile_number}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Blood Group :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->blood_group}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">T-Shirt Size :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->t_shirt}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Profession :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->profession}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Profession Institute
                                        :

                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->profession_institute}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Designation :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->designation}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Guest : </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->guest}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Total : </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->total}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Payment Number :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->bkash}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Transaction Id :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->transaction_id}}</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Registration Time :
                                    </label>
                                    <div class="col-sm-8">

                                        <label class="col-sm-12 col-form-label"
                                            for="basic-default-name">{{$row->created_at}}</label>
                                    </div>
                                </div>
                            </div>












                            <div class="mobil_redesing">
                                <p class="card_info">Registration Id : <span>graduated-1001{{$row->id}}</span>
                                </p>
                                <p class="card_info">Name : <span>{{$row->graduated_name}}</span> </p>
                                <p class="card_info">Batch : <span>{{$row->batch}}</span> </p>
                                <p class="card_info">Mobile Number : <span>{{$row->mobile_number}}</span> </p>
                                <p class="card_info">Blood Group : <span>{{$row->blood_group}}</span> </p>
                                <p class="card_info">T-Shirt Size : <span>{{$row->t_shirt}}</span> </p>
                                <p class="card_info">Profession : <span>{{$row->profession}}</span> </p>
                                <p class="card_info">Profession Institute : <span>{{$row->profession_institute}}</span>
                                </p>

                                <p class="card_info">Designation : <span>{{$row->designation}}</span> </p>
                                <p class="card_info">Guest : <span>{{$row->guest}}</span> </p>
                                <p class="card_info">Total : <span>{{$row->total}}</span> </p>
                                <p class="card_info">Payment Number : <span>{{$row->bkash}}</span> </p>
                                <p class="card_info">Transaction Id : <span>{{$row->transaction_id}}</span> </p>
                                <p class="card_info">Registration Time : <span>{{$row->created_at}}</span> </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container log_pg mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="main_Protfolio_design border p-2">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12  py-5 px-5">
                                <div class="top_logo text-center">
                                    <img src="{{asset('logo/'.'CGHS.png')}}" alt="" width="80">
                                </div>
                                
                                <h2 class="text-center mt-2 mb-3">Invitation letter</h2>
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-md-3 ">
                               
                            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/'.$row->img)))}}"" width='170px' height='auto' alt='image'
                            class=" border rounded" />

                            </div>
                            <div class="col-md-8 text-left top_info_short">
                                <p class="">1st July 2023, Sunday</p>
                                <p class="">Registration Id : <span>graduated-1001{{$row->id}}</span></p>
                                <p class="">Name : <span>{{$row->graduated_name}}</span> </p>
                                <p class="">Batch : <span>{{$row->batch}}</span> </p>  
                                <p class="">Mobile Number : <span>{{$row->mobile_number}}</span> </p>                              
                                
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-md-6  mt-3">
                                
                                <p class="card_info">Blood Group : <span>{{$row->blood_group}}</span> </p>                                
                                <p class="card_info">Profession : <span>{{$row->profession}}</span> </p>
                                <p class="card_info">Profession Institute : <span>{{$row->profession_institute}}</span></p>
                                <p class="card_info">Designation : <span>{{$row->designation}}</span> </p>
                                <p class="card_info">Guest : <span>{{$row->guest}}</span> </p>
                                <p class="card_info">Total : <span>{{$row->total}}</span> </p>
                                <p class="card_info">Payment Number : <span>{{$row->bkash}}</span> </p>
                                <p class="card_info">Transaction Id : <span>{{$row->transaction_id}}</span> </p>
                                <p class="card_info">T-Shirt Size : <span>{{$row->t_shirt}}</span> </p>
                                
                                
                            </div> --}}
                            <div class="col-md-12 mt-3">
                                  <table class="table table-bordered">                                    
                                    <tbody>
                                      <tr>
                                        <th>Blood Group</th>
                                        <td >{{$row->blood_group}}</td>

                                      </tr>
                                      <tr>
                                        <th>Profession</th>
                                        <td>{{$row->profession}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Profession Institute</th>
                                        <td>{{$row->profession_institute}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Designation</th>
                                        <td>{{$row->designation}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Guest</th>
                                        <td>{{$row->guest}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Total</th>
                                        <td>{{$row->total}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Payment Number</th>
                                        <td>{{$row->bkash}}</td>     
                                      </tr>
                                      <tr>
                                        <th>Transaction Id</th>
                                        <td>{{$row->transaction_id}}</td>     
                                      </tr>
                                      <tr>
                                        <th>T-Shirt Size</th>
                                        <td>{{$row->t_shirt}}</td>     
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <p></p>
    @endforeach







</body>

</html>